<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	$data = D('cart')->showCart();

		$this->assign('data', $data);

        $this->display();
    }

    public function goods()
    {

        $this->display('Goods/Goods');
    }
}
