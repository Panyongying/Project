<?php

    namespace HMadmin\Model;

    use Think\Model;

    class GoodsModel extends Model
    {
        //查询所有商品的信息
        public function selectAll()
        {
            $goodsList = $this->field('id,name,price,tid,des,status,viewtimes,saled,addtime')->select();

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

            dump($ids);exit;
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

                M('stock')->field('gid,aid,goodsNum')->data($data)->add();
                M('goods_detail')->field('gid,detail')->data($data)->add();

                return ture;
            }

        }
    }
