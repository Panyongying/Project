<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {

        $OneList = D('goods')->OneList();
        $data = D('cart')->showCart();

        $this->assign('data', $data);
        $this->assign('OneList', $OneList);
        $this->display();
    }


    public function base()
    {

        if (IS_POST) {

            $twoList = D('goods')->twoGoodsList();

            echo json_encode($twoList);

        } else {

            $OneList = D('goods')->OneList();

            $this->assign('OneList', $OneList);
            $this->display('Base/base');
        }

    }

    //拿取商品
    public function goods()
    {
        $pid = I('get.pid');
        $OneList = D('goods')->OneList();
        $twoList = D('goods')->twoList();
        $goodsList = D('goods')->goodsList();

        $this->assign('OneList', $OneList);
        $this->assign('twoList', $twoList);
        $this->assign('goodsList', $goodsList);
        $this->assign('pid', $pid);
        $this->display('Goods/Goods');
    }

    //根据商品二级分类获得下面的商品
    public function goodsList()
    {
        $pid = I('get.pid');

        $OneList = D('goods')->OneList();
        $twoList = D('goods')->twoList();
        $lists = D('goods')->lists();

        $this->assign('OneList', $OneList);
        $this->assign('twoList', $twoList);
        $this->assign('lists', $lists);
        $this->assign('pid', $pid);
        $this->display('Goods/GoodsList');
    }
}
