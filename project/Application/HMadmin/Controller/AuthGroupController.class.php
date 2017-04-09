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

       $this->display('Backstage/authGroup');
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

        $res = D('AuthGroup')->beforeDelete($id);
      	//判断是否有管理员
        if ( $res ) {
        	$this->error('请先删除管理组里的成员');
        	exit;
        }

        $res = M('AuthGroup')->where("id={$id}")->delete();

        if ($res) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    //AuthGroup批量删除
    public function deleteAuthGroup()
    {

    	$ids = I('post.');

        if (empty($ids)) {
            $this->error('请先勾选要删除的分类');
            exit;
        }

    	$ids = join($ids['ids'], ',');

    	$res = D('AuthGroup')->beforeDelete($ids);
      	//判断是否有管理员
        if ( $res ) {
        	$this->error('请先删除管理组里的成员');
        	exit;
        }

    	$res = D('AuthGroup')->deleteGroup($ids);

    	if ($res) {
    		$this->success('删除成功', U('index'));
    	} else {
    		$this->error('删除失败', U('index'));
    	}
    }

    //AuthGroup编辑
    public function editAuthGroup()
    {	//如果受到post提交数据就修改
    	if (IS_POST) {

    		$datas = I('post.');

    		if ($datas['rules']) {
    			$datas['rules'] = join($datas['rules'], ',');
    		} else {
    			$datas['rules'] = '';
    		}

    		$res = M('AuthGroup')->where("id={$datas['id']}")->save($datas);



    		if ($res !== false) {
    			$this->success('修改完成', U('index'));
    		} else {
    			$this->error('修改失败');
    		}
    		//GET数据显示页面
    	} elseif (IS_GET) {
    		$id = I('get.id');
    		$data = M('AuthGroup')->where("id=$id")->find();
    		$auths = M('AuthRule')->select();
    		$this->assign('auths', $auths);
    		$this->assign('data', $data);
    		$this->display('Backstage/editAuthGroup');
    	}
    }

    //管理组详情页面
    public function authGroupDetail()
    {
    	$id = I('get.id');
    	$title = D('AuthGroup')->findGroupName($id);
    	$adminList = D('AuthGroup')->selectGroupAdmin($id);
    	$status = [null, '正常', '禁用'];
    	$this->assign('status', $status);
    	$this->assign('adminList', $adminList);
		$this->assign('title', $title['title']);
    	$this->display('Backstage/authGroupDetail');
    }

}
