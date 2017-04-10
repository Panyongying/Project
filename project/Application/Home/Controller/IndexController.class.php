<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $OneList = D('goods')->OneList();
        $this->assign('OneList' ,$OneList);
        $this->display();
    }


    public function base()
    {

        if (IS_POST) {

            $twoList = D('goods')->twoGoodsList();
            echo json_encode($twoList);

        } else {


            $OneList = D('goods')->OneList();

            $this->assign('OneList' ,$OneList);
            $this->display('Base/base');
        }

    }


    public function goods()
    {
        $pid = I('get.pid');
        $OneList = D('goods')->OneList();

        $this->assign('OneList' ,$OneList);
        $this->assign('pid' ,$pid);
        $this->display('Goods/Goods');
    }
}
