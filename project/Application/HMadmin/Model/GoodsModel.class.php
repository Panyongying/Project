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
            array('aid', 'require', '请选择颜色/尺码'),
            array('pic', 'require', '必须上传一张以上的图'),
        );

        //查询所有商品的信息
        public function selectAll()
        {
            $goodsList = $this->field('id,name,price,tid,des,status,viewtimes,saled,addtime')->select();

            //查询跟id关联的pic和detail数据
            for ($i=0; $i<count($goodsList); $i++) {

                $gid = $goodsList[$i]['id'];
                // dump($gid);

                //查询详情
                $goodsList[$i]['detail'] = M('goods_detail')->field('detail')->where( 'gid='.$gid )->select();

                // //查询aid
                // $goodsList[$i]['aid'] = M('stock')->field('aid')->where('gid='.$gid)->select();

                // $aid = $goodsList[$i]['aid'][0]['aid'];


                // $map['id'] = array('in', $aid);

                // //查询attr的属性名
                // $goodsList[$i]['aid'] = M('attr')->field('attrName')->where($map)->select();

                // for ($i=0; $i<count($goodsList[$i]['aid']); $i++) {

                //     dump($goodsList[$i]['aid'][0]);
                // }

            }
                // dump($goodsList);

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


            return $goodsList;
        }

        //删除商品
        public function deleteOne()
        {

            $id = I('get.id');

            // dump($id);exit;

            $bool = M('goods')->delete($id);

            return $bool;
        }

        //批量删除
        public function deleteAll()
        {

            $checkVal = I('post.checkson');

            $ids = rtrim( join(',', $checkVal) );

            $affecNum = M('goods')->delete($ids);

            //需要把跟这些商品id关联的其他东西也删除
            return  $affecNum;
        }

        //获取分类类型
        public function selectType()
        {

            $typeAll = M('type')->where('pid=0')->select();

            return $typeAll;
        }

        //获取商品属性->颜色、尺寸
        public function selectAttr()
        {

            $attr = M('attr')->select();

            return $attr;
        }

        //添加商品
        public function addGood()
        {
            //启动事务
            $Goods = M();
            $Goods->startTrans();

            $data = I('post.');

            $data['addtime'] = time();
            $data['aid'] = join(',', $data['aid']);

            //过滤添加
            $affectNum = M('goods')->field('name,price,tid,des,status,addtime')->data($data)->add();

            if ($affectNum > 0) {

                $gid = M('goods')->field('id')->where("name='{$data['name']}'")->select();

                $data['gid'] = $gid[0]['id'];

                //遍历图片插入
                foreach ($data['pic'] as $v) {

                    $newData['gid'] = $data['gid'];
                    $newData['pic'] = $v;

                    M('goods_pic')->data($newData)->add();

                }

                $res = M('stock')->field('gid,aid,goodsNum')->data($data)->add();

                if ($res) {

                    $final = M('goods_detail')->field('gid,detail')->data($data)->add();

                    if ($final) {

                        $Goods->commit();
                    } else {

                        $Goods->rollback();
                    }
                }

                return ture;
            }
        }

        //显示商品所以图
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

            $pic = './'.strstr($pic, 'Upload');

            $bool = M('goods_pic')->where("pic='{$pic}'")->delete();

            return $bool;
        }

        //查找商品信息
        public function goodsEdit()
        {

            $id = I('get.id');

            $Model = new Model();

            $res = $Model->query("SELECT g.name,g.tid,g.price,g.des,g.status,t.name tname,d.detail,s.aid,s.goodsNum FROM __GOODS__ g,__GOODS_DETAIL__ d,__TYPE__ t,__STOCK__ s,__ATTR__ a WHERE g.id={$id} AND d.gid={$id} AND g.tid=t.id AND s.gid={$id} AND s.aid=a.id");

            // $status = ['', '在售中', '下架'];
            // $res[0]['status'] = $status[ $res[0]['status'] ];

            $pic = M('goods_pic')->field('pic')->where("gid='{$id}'")->select();

            // $type = M('type')->field('name')->where("pid=0")->select();

            // $map['id'] = array('in', $res[0]['aid']);
            $attr = M('attr')->field('attrName,attrType')->where($map)->select();

            for ($i=0; $i<count($pic); $i++) {
                $pic[$i]['pic'] = ltrim($pic[$i]['pic'], './');
            }

            $res[0]['addtime'] = time();
            $res[0]['pic'] = $pic;
            // $res[0]['type'] = $type;

            // $aidName = array_combine(explode(',', $res[0]['aid']), $attr);
            $res[0]['aid'] = explode(',', $res[0]['aid']);

            foreach ($res as $val) {

            }
            // dump($val);exit;
            return $val;

        }
    }
