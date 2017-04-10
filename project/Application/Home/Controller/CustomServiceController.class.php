<?php

namespace Home\Controller;

use Think\Controller;

class CustomServiceController extends Controller
{
    public function index()
    {

        $this->display('CustomService/customService');
    }

}
