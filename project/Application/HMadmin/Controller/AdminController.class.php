<?php

namespace HMadmin\Controller;


class AdminController extends CommonController {
    //管理组首页显示
    public function index()
    {
       $adminList = M('Admin')->select();

       $status = [null, '正常', '禁用'];

       $this->assign('status', $status);

       $this->assign('adminList', $adminList);

       $this->display('Backstage/admin');
    }

    //显示添加管理组页面
    public function showAddAdminPage()
    {
        //如果有post值就执行添加
        if(IS_POST) {

           $data = I('post.');


           $Admin = D('Admin');
          
           if (!$Admin->create()) {
                $this->error($Admin->getError());
                exit;
           } else {
           		$Admin->startTrans();
           		$res = false;


                $uid = $Admin->add();

                if (!$uid) {
                	$Admin->rollback();
                	$this->error('添加失败');
                	exit;
                }

                $data2 = array(
                	'uid'=>$uid,
                	'gid'=>$data['gid'],
                );

                if (!M('AuthGroupAccess')->add($data2)) {
                	$Admin->rollback();
                	$this->error('添加失败');
                	exit;
                }

                $Admin->commit();
                $res = true;

                if ($res) {
                    $this->success('添加成功', 'index');
                } else {
                    $this->error('添加失败');
                }
           }   
        //否则显示添加页面
        } else {
            $authGroup = M('AuthGroup')->field('id, title')->select();

            $this->assign('authGroup', $authGroup);

            $this->display('Backstage/addAdmin');

        }
    }

    //删除管理组方法
    public function deleteAdminOne()
    {
        $id = I('get.id');

        $res = M('Admin')->where("id={$id}")->delete();

        if ($res) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    //Auth批量删除
    public function deleteAdmin()
    {

    	$ids = I('post.');

        if (empty($ids)) {
            $this->error('请先勾选要删除的分类');
            exit;
        }

    	$ids = join($ids['ids'], ',');

    	$res = D('Admin')->deleteAdmin($ids);

    	if ($res) {
    		$this->success('删除成功', U('index'));
    	} else {
    		$this->error('删除失败', U('index'));
    	}
    }

    //ajax显示部门名
    public function showGroupName()
    {
       $id = I('get.id');
       $adminList = M('AuthGroupAccess')->where("uid={$id}")->join('hm_auth_group ON hm_auth_group_access.gid = hm_auth_group.id')->find();


       $this->ajaxReturn($adminList);

    }

    //修改admin
    public function editAdmin()
    {
        if (IS_POST) {

        } elseif (IS_GET) {
            $id = I('get.id');

            $adminData = D('Admin')->findAdmin($id);

            $authGroup = M('AuthGroup')->field('id, title')->select();

            $gid = D('Admin')->findAdminGroup($id)['gid'];

            $this->assign('gid', $gid);

            $this->assign('authGroup', $authGroup);

            $this->assign('adminData', $adminData);

            $this->display('Backstage/editAdmin');
        }
    }

}