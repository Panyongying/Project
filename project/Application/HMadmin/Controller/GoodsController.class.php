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
        public function ajaxDelete()
        {
            if (IS_AJAX) {

                $res = D('goods')->deleteOne();

                if ($res) {

                    $this->ajaxReturn(1);
                }
            }

        }

        //添加goods
        public function addGood()
        {

            if (IS_POST) {

                $res = D('goods')->addGood();

            } else {

                $this->display('Backstage/addGood');
            }


        }

    }

