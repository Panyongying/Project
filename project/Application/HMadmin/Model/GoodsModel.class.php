<?php

    namespace HMadmin\Model;

    use Think\Model;

    class GoodsModel extends Model
    {
        //查询所有商品
        public function selectAll()
        {
            $goodsList = $this->field('id,name,price,tid,des,status,viewtimes,saled,addtime')->select();

            $tidArr    = ['小米', '华为'];
            $statusArr = ['', '在售中', '已下架'];

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

        //添加商品
        public function addGood()
        {
            $data = I('post.');

            $data['addtime'] = time();
            dump($data);exit;
            // $res = M('goods')->add($data);

            dump(M('goods')->getLastSql());exit;
        }

    }
