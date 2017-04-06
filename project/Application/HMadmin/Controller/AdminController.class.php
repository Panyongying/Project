<?php

namespace HMadmin\Controller;


class AdminController extends CommonController {
    //管理员首页显示
    public function index()
    {
       $adminList = M('Admin')->select();

       $status = [null, '正常', '禁用'];

       $this->assign('status', $status);

       $this->assign('adminList', $adminList);

       $this->display('Backstage/admin');
    }

    //显示添加管理员页面
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
                	'group_id'=>$data['group_id'],
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

    //删除管理员方法
    public function deleteAdminOne()
    {
        $id = I('get.id');

        $res = M('Admin')->where("id={$id}")->delete();

        $AGAres = M("AuthGroupAccess")->where("uid = {$id}")->delete();

        if ( $res && $AGAres ) {
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

        $AGAres = M('AuthGroupAccess')->where("uid in ({$ids})")->delete();

    	if ( $res && $AGAres ) {
    		$this->success('删除成功', U('index'));
    	} else {
    		$this->error('删除失败', U('index'));
    	}
    }

    //ajax显示部门名
    public function showGroupName()
    {
       $id = I('get.id');
       $adminList = M('AuthGroupAccess')->where("uid={$id}")->join('hm_auth_group ON hm_auth_group_access.group_id = hm_auth_group.id')->find();


       $this->ajaxReturn($adminList);

    }

    //修改admin
    public function editAdmin()
    {   //提交修改
        if (IS_POST) {

            $data = I('post.');

            $admin = D('Admin');

            $AuthGroupAccess = M('AuthGroupAccess');

            //不修改密码
            if ($data['password'] == '') {
                unset($data['password']);
                unset($data['repassword']);

                $admin->id = $data['id'];

                $admin->name = $data['name'];

                $admin->status = $data['status'];

                $res = $admin->save();

                $AuthGroupAccess->group_id = $data['group_id'];

                $AGAres = $AuthGroupAccess->where("uid={$data['id']}")->save();

                if ( $res !== false && $AGAres !== false ) {
                    $this->success('修改成功', U('Admin/index'));
                    exit;
                } else {
                    $this->error('修改失败');
                    exit;
                }
                //修改密码
            } else {


                if( !$admin->create() ) {
                    $this->error($admin->getError());
                    exit;
                } else {

                    $admin->startTrans();

                    $res = $admin->save();

                    $AuthGroupAccess->group_id = $data['group_id'];

                    $AGAres = $AuthGroupAccess->where("uid={$data['id']}")->save();

                    if ( $res !== false && $AGAres !== false ) {
                        $admin->commit();
                        $this->success('修改成功', U('Admin/index'));

                    } else {
                        $admin->rollback();
                        $this->error('修改失败');
                    }

                }


            }

            




            //get显示修改页面
        } elseif (IS_GET) {
            $id = I('get.id');

            $adminData = D('Admin')->findAdmin($id);

            $authGroup = M('AuthGroup')->field('id, title')->select();

            $group_id = D('Admin')->findAdminGroup($id)['group_id'];

            $this->assign('group_id', $group_id);

            $this->assign('authGroup', $authGroup);

            $this->assign('adminData', $adminData);

            $this->display('Backstage/editAdmin');
        }
    }

}