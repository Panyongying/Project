<?php

namespace HMadmin\Controller;

use Think\Controller;


class IndexController extends CommonController 
{
    public function index()
    {
       $this->display('Backstage/index');
    }
}
