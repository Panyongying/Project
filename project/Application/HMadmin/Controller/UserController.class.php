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
    //删除用户
    public function deleteUser ()
    {
        if (IS_AJAX) {

            $num = D('user')->deleteUser();

            echo $num;
            
        }else {

            $this->error('非法请求');
        }
    }
}