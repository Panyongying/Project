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

        public function delete()
        {

            $id = I('get.');

            $num = M('goods')->where('id='.$id)->delete();

            return $num;

        }


    }
