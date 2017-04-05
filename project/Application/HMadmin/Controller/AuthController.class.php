<?php

namespace HMadmin\Controller;


class AuthController extends CommonController {
    //type首页显示
    public function index()
    {
       $authList = M('auth_rule')->select();

       $this->assign('authList', $authList);

       $this->display('Backstage/auth');
    }

    //显示添加权限页面
    public function showAddAuthPage()
    {
        //如果有post值就执行添加
        if(IS_POST) {

           $data = I('post.');

           $AuthRule = D('AuthRule');
          
           if (!$AuthRule->create()) {
                $this->error($AuthRule->getError());
                exit;
           } else {
                $res = $AuthRule->addAuthRule($data);

                if ($res) {
                    $this->success('添加成功', 'index');
                } else {
                    $this->error('添加失败');
                }
           }   
        //否则显示添加页面
        } else {

            $this->display('Backstage/addAuth');

        }
    }

    //删除权限方法
    public function deleteAuth()
    {
        $id = I('get.id');

        $res = M('AuthRule')->where("id={$id}")->delete();

        if ($res) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

}