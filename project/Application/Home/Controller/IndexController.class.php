<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {

        $this->display();
    }

    public function goods()
    {

        $this->display('Goods/Goods');
    }
}
