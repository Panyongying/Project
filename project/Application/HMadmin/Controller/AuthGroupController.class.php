<?php

namespace HMadmin\Controller;


class AuthGroupController extends CommonController {
    //管理组首页显示
    public function index()
    {
       $authGroupList = M('AuthGroup')->select();

       $status = [null, '正常', '禁用'];

       $this->assign('status', $status);

       $this->assign('authGroupList', $authGroupList);

       $this->display('Backstage/AuthGroup');
    }

    //显示添加管理组页面
    public function showAddAuthGroupPage()
    {
        //如果有post值就执行添加
        if(IS_POST) {

           $data = I('post.');

           $data['rules'] = join($data['rules'], ',');

           $AuthGroup = D('AuthGroup');
          
           if (!$AuthGroup->create()) {
                $this->error($AuthGroup->getError());
                exit;
           } else {


                $res = $AuthGroup->addAuthGroup($data);

                if ($res) {
                    $this->success('添加成功', 'index');
                } else {
                    $this->error('添加失败');
                }
           }   
        //否则显示添加页面
        } else {
            $auths = M('AuthRule')->field('id, title')->select();

            $this->assign('auths', $auths);

            $this->display('Backstage/addAuthGroup');

        }
    }

    //删除管理组方法
    public function deleteAuthGroupOne()
    {
        $id = I('get.id');

        $res = M('AuthGroup')->where("id={$id}")->delete();

        if ($res) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    //Auth批量删除
    public function deleteAuthGroup()
    {

    	$ids = I('post.');

        if (empty($ids)) {
            $this->error('请先勾选要删除的分类');
            exit;
        }

    	$ids = join($ids['ids'], ',');

    	$res = D('AuthGroup')->deleteGroup($ids);

    	if ($res) {
    		$this->success('删除成功', U('index'));
    	} else {
    		$this->error('删除失败', U('index'));
    	}
    }

}