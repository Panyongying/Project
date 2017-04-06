<?php
namespace HMadmin\Controller;

use Think\Controller;

class UserController extends CommonController 
{
    public function index()
    {	      
        $list = D('user')->getUserInfo();

        $res = array_pop($list);

        $this->assign('list', $list);

        $this->assign('show', $res);

        $this->display('Backstage/member');

    }
    //删除用户
    public function deleteUser()
    {
        if (IS_AJAX) {

            $num = D('user')->deleteUser();

            echo $num;
            
        }else {

            $this->error('非法请求');
        }

    }
    //添加用户
    public function addUser()
    {
        if (IS_GET) {

            $this->display('Backstage/addUser');
        }

        if (IS_POST) {

            $addModel = D('user');

            //使用create()方法来创建数据对象
            $res = $addModel->create();

            if (!$res) {

                $this->error( $addModel->getError() );
                exit;
            }

            $addModel->add();

            $this->success('成功', U('addUser'), 2);


        }

    }
    //修改用户个人资料 hm_account表
    public function editUser()
    {
        if (IS_GET){

            $id = I('get.id');

            $res = M('account')->where('uid='.$id)->find();

            if (!$res) {

                $this->error('该用户暂时没有添加个人数据');
            }

            $this->assign('list',$res);

            $this->display('Backstage/editUser');
        }

        if (IS_POST){

            $res = D('user')->editUser();

            if ($res >= 1) {

                $this->success('修改成功', U('index'), 2);

            }else {

                $this->error('用户资料没有发生改变');
            }
        }
      
    }
    //查看用户详情
    public function getUserMoreInfo()
    {
        $list = D('user')->getUserdetail();

        $this->assign('list', $list);

        $this->display('Backstage/userDetail'); 
        
        // dump($list);
    }

    //删除多个
    public function delAll()
    {
        $list = D('user')->ajaxdelsome();

        echo $list;
    }

    //修改状态
    public function changeStatus()
    {
       
        $res = D('user')->changeUserStatus();

        echo $res;
      
    }


}