<?php

namespace HMadmin\Controller;


class CustomServiceController extends CommonController {
    //后台客服页面显示
    public function index()
    {
       $this->display('Backstage/customService');
    }

    //与客户交流
    public function chat()
    {
    	$cid = I('get.cid');
    	$this->assign('cid', $cid);
    	$this->display('Backstage/customServiceChat');
    }

}