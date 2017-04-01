<?php
namespace HMadmin\Controller;

use Think\Controller;

class UserController extends CommonController 
{
    public function index()
    {	
    	$list = D('user')->getUserInfo();

    	$this->assign('list', $list);

      	$this->display('Backstage/member');
    }
}