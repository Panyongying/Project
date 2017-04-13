<?php

    namespace HMadmin\Model;

    use Think\Model;

    class GoodsModel extends Model
    {

        //自动验证
        protected $dataAll = array(

            array('name', 'require', '商品名不能为空'),
            array('price', '/[0-9]{1,10}/', '价格必须有'),
            array('des', 'require', '描述不能为空'),
            array('detail', 'require', '详情不能为空'),
            array('goodsNum', '/[0-9]{1,10}/', '库存只能为数字'),
            array('pic', 'require', '必须上传一张以上的图'),
        );

        //查询所有商品的信息+分页搜索
        public function selectAll()
        {

            $name = I('get.name');

            if ( !empty($name) ) {

                $search['name'] = array('like', "%{$name}%");
            }

            $goodsList = $this->field('id,name,price,tid,des,status,viewtimes,saled,addtime')->where($search)->select();

            $total = count($goodsList);

            $page = new \Think\Page($total, 10);

            //分页
            $goodsList = $this->field('id,name,price,tid,des,status,viewtimes,saled,addtime')->where($search)->limit($page->firstRow.','.$page->listRows)->select();

            $show = $page->show();

            //查询跟id关联的pic和detail数据
            for ($i=0; $i<count($goodsList); $i++) {

                $gid = $goodsList[$i]['id'];

                //查询详情
                $goodsList[$i]['detail'] = M('goods_detail')->field('detail')->where( 'gid='.$gid )->select();

            }

            $typeList = M('type')->field('id,name')->select();

            //查出分类后将分类id作为下标，重组数组
            for ($i=0; $i<count($typeList); $i++) {

                $tidName[] = $typeList[$i]['name'];
                $tids[] = $typeList[$i]['id'];
            }
            $tidArr = array_combine($tids, $tidName);

            $statusArr = ['', '在售中', '已下架'];

            //将数字的值转化为对应中文
            for ($i=0; $i<count($goodsList); $i++) {

                $goodsList[$i]['tid'] = $tidArr[ $goodsList[$i]['tid'] ];
                $goodsList[$i]['status'] = $statusArr[ $goodsList[$i]['status'] ];
                $goodsList[$i]['addtime'] = date('Y-m-d H:i:s', $goodsList[$i]['addtime']);
            }

            $goodsList['show'] = $show;

            return $goodsList;
        }

        //删除商品
        public function deleteOne()
        {
            //启动事务
            $Goods = M();
            $Goods->startTrans();

            $flag = true;

            $id = I('get.id');

            $res = M('goods')->delete($id);

            if ($res != 1) {

                $flag = false;
            }

            $res = M('goods_detail')->where('gid='.$id)->delete();

            if ($res != 1) {

                $flag = false;
            }

            $res = M('goods_pic')->where('gid='.$id)->delete();

            if ($res == false) {

                $flag = false;
            }

            $res = M('stock')->where('gid='.$id)->delete();

            if ($res == false) {

                $flag = false;
            }

            if ($flag) {

                $Goods->commit();
                return true;

            } else {

                $Goods->rollback();
                return false;
            }
        }

        //批量删除
        public function deleteAll()
        {
            //启动事务
            $Goods = M();
            $Goods->startTrans();

            $flag = true;

            $checkVal = I('post.checkson');

            $ids = rtrim( join(',', $checkVal) );

            $res = M('goods')->delete($ids);


            if (!$res) {

                $flag = false;
            }

            $map['gid'] = array('in', $ids);


            $res = M('goods_detail')->where($map)->delete();

            if (!$res) {

                $flag = false;
            }

            $res = M('goods_pic')->where($map)->delete();

            if ($res === false) {

                $flag = false;
            }

            $res = M('stock')->where($map)->delete();

            if (!$res) {

                $flag = false;
            }

            if ($flag) {

                $Goods->commit();
                return true;

            } else {

                $Goods->rollback();
                return false;
            }
        }

        //获取分类类型
        public function selectType()
        {

            $typeAll = M('type')->order('concat(path, id)')->select();

            return $typeAll;
        }

        //获取商品属性->颜色、尺寸
        public function selectAttr()
        {

            $attr = M('attr')->select();

            return $attr;
        }

        //查询颜色属性
        public function findAttrColor()
        {
            $attrColor = M('attr')->where('attrType=1')->select();

            return $attrColor;
        }

        //添加商品
        public function addGood()
        {
            //启动事务
            $Goods = M();
            $Goods->startTrans();

            $flag = true;
            $data = I('post.');
            // dump($data);exit;


            $data['addtime'] = time();


            if (!M('goods')->create($data)) {

                $this->error('失败', U('Goods/addGood'));
                exit;
            }

            //过滤添加
            $res = M('goods')->field('name,price,tid,des,status,addtime')->data($data)->add();

            //失败就赋值false
            if (!$res) {

                $flag = false;
            }

            $gid = M('goods')->field('id')->where("name='{$data['name']}'")->select();

            $data['gid'] = $gid[0]['id'];

            if (isset($_POST['pic'])) {

                foreach ($data['pic'] as $v) {

                    $newData['gid'] = $data['gid'];
                    $newData['pic'] = $v;

                    $res = M('goods_pic')->data($newData)->add();

                    if (!$res) {

                        $flag = false;
                    }
                }

            } else {

                $flag = false;
            }


            $res = M('goods_detail')->field('gid,detail')->data($data)->add();

            if (!$res) {

                $flag = false;
            }

            if ($flag) {

                $Goods->commit();
                return true;

            } else {

                $Goods->rollback();
                return false;
            }
        }

        //显示商品所有图
        public function goodsDetail()
        {
            $id = I('get.id');

            $pic = M('goods_pic')->field('pic')->where("gid='{$id}'")->select();

            for ($i=0; $i<count($pic); $i++) {

                $pic[$i]['pic'] = ltrim($pic[$i]['pic'], './');
            }

            return $pic;
        }

        //editDelPic删除编辑的商品
        public function editDelPic()
        {
            $pic = I('get.pic');

            $pic = strstr($pic, 'Upload');

            $newpic = './'.$pic;

            $bool = M('goods_pic')->where("pic='{$newpic}'")->delete();

            if ($bool) {

                unlink("./Public/{$pic}");
            }

            return $bool;
        }

        //查找商品信息
        public function goodsEdit()
        {

            $id = I('get.id');

            $Model = new Model();

            $res = $Model->query("SELECT g.id,g.name,g.tid,g.price,g.des,g.status,t.name tname,d.detail FROM __GOODS__ g,__GOODS_DETAIL__ d,__TYPE__ t WHERE g.id={$id} AND d.gid={$id} AND g.tid=t.id");

            $pic = M('goods_pic')->field('pic')->where("gid='{$id}'")->select();

            for ($i=0; $i<count($pic); $i++) {
                $pic[$i]['pic'] = ltrim($pic[$i]['pic'], './');
            }

            $res[0]['addtime'] = time();
            $res[0]['pic'] = $pic;

            foreach ($res as $val) {

            }

            return $val;
        }

        //修改商品信息
        public function editOneGood()
        {
            //启动事务
            $Goods = M();
            $Goods->startTrans();

            $flag = true;

            $data = I('post.');

            $data['addtime'] = time();

            $data['aid'] = join(',', $data['aid']);

            $res = M('goods')->where('id='.$data['id'])->field('name,price,des,status,tid,addtime')->filter('strip_tags')->save($data);

            //什么都没修改
            if ($res === false) {

                $flag = false;
            }

            $res = M('goods_detail')->where('gid='.$data['id'])->field('detail')->save($data);

            if ($res === false) {

                $flag = false;
            }

            //判断有图片就添加,没有就不走
            if ( isset($_POST['pic']) ) {

                foreach ($data['pic'] as $v) {

                    $newData['gid'] = $data['id'];
                    $newData['pic'] = $v;

                    $res = M('goods_pic')->data($newData)->add();

                    if ($res === false) {

                        $flag = false;
                    }
                }

            }

            if ($flag) {

                $Goods->commit();
                return true;

            } else {

                $Goods->rollback();
                return false;
            }
        }

        //ajax修改状态
        public function editStatus()
        {

            $status = I('get.');

            if ($status['status'] == "在售中") {

                $status['status'] = 2;

                $res = M('goods')->field('status')->where('id='.$status['id'])->save($status);

                if ($res) {

                    return 2;
                }

            } else if ($status['status'] == "已下架") {

                $status['status'] = 1;

                $res = M('goods')->field('status')->where('id='.$status['id'])->save($status);

                if ($res) {

                    return 1;
                }
            }
        }

        //库存
        public function stockDetail()
        {
            $gid = I('get.gid');

            $stockDetail = M('stock')->field('id,aid,goodsNum')->where('gid='.$gid)->select();

            foreach ($stockDetail as $value) {

                $value['aid'] = explode(',', $value['aid']);

                for ($i=0; $i<count($value['aid']); $i++) {

                    $value['aid'][$i] = M('attr')->field('attrName')->select($value['aid'][$i]);

                    $value['aid'][$i] = join($value['aid'][$i][0]);

                }

                $stocks[] = $value;
            }

            return $stocks;
        }

        //查看修改库存情况
        public function stockFind()
        {
            $id = I('get.id');

            $stockOne = M('stock')->find($id);

            $stockOne['aid'] = explode(',', $stockOne['aid']);

            return $stockOne;
        }

        //修改库存颜色尺码
        public function stockEditOne()
        {

            $data = I('post.');

            $data['aid'] = join(',', $data['aid']);

            $res = M('stock')->where('id='.$data['id'])->save($data);

            return $res;
        }

        //添加库存颜色尺码
        public function addStock()
        {
            $data = I('post.');

            $data['aid'] = join(',', $data['aid']);

            $res = M('stock')->add($data);

            return $res;
        }

        // 删除stockDel
        public function stockDel()
        {
            $id = I('get.id');

            $res = M('stock')->delete($id);

            return $res;
        }

        //查看商品对应颜色对应图片
        public function GoodsDetailPic()
        {

            $name = I('get.name');

            if ( !empty($name) ) {

                $search['name'] = array('like', "%{$name}%");
            }


            $data = M('goods')->field('id,name')->where($search)->order('id desc')->select();


            $total = count($data);

            $page = new \Think\Page($total, 8);

            //分页
            $data = $this->field('id,name')->where($search)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();

            $show = $page->show();

            for ($i=0; $i<count($data); $i++) {

                //根据id查商品有什么颜色，再根据颜色查商品有多少张图
                $data[$i]['aid'] = M('goods_pic')->distinct(true)->field('aid')->where('gid='.$data[$i]['id'])->select();

                for ($j=0; $j<count($data[$i]['aid']); $j++) {

                    $data[$i]['aid'][$j] = explode(',', $data[$i]['aid'][$j]['aid'][0]);

                }
            }

            // dump($data);exit;
            $data['show'] = $show;

            return $data;
        }

        //根据aid和gid查找对应图片
        public function seePics()
        {
            $g_a_id = I('get.');

            $data = M('goods_pic')->field('id,pic')->where($g_a_id)->select();

            // dump($data);exit;
            for ($i=0; $i<count($data); $i++) {

                $data[$i]['pic'] = ltrim($data[$i]['pic'], './');
            }

            $data['g_a_id'] = $g_a_id;


            return $data;
        }

        // 添加商品对应颜色对应图片
        public function addColorPic()
        {
            $data = I('post.');

            $num = count($data['pic']);

            for ($i=0; $i<$num; $i++) {

                $data['p'][$i] = $data['pic'][$i];
            }

            for ($i=0; $i<$num; $i++) {

                $data['pic'] = $data['p'][$i];

                $res[] = M('goods_pic')->data($data)->add();
            }

            return $res;
        }

    }
