<?php

    namespace HMadmin\Controller;

    use Think\Controller;

    class GoodsController extends Controller
    {
        //商品列表
        public function index()
        {
            if (IS_POST) {


            } else {

                $goodsList = D('goods')->selectAll();

                $this->assign('goodsList', $goodsList);
                $this->display('Backstage/goods');

            }

        }

        //ajax删除
        public function deletes()
        {
            if (IS_POST) {

            } else {

                $deleteOne = D('goods')->delete();

                dump($deleteOne);
                exit;
            }


        }



    }

