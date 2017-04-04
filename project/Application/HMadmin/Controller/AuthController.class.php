<?php

namespace HMadmin\Controller;


class AuthController extends CommonController {
    //type首页显示
    public function index()
    {
       $this->display('Backstage/auth');
    }

    //显示添加权限页面
    public function showAddAuthPage()
    {
    	$this->display('Backstage/addAuth');
    }

}