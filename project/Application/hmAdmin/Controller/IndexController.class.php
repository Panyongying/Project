<?php

namespace HMadmin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
       $this->display('Backstage/index');
    }
}
