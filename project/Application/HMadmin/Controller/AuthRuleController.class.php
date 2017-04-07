<?php

namespace HMadmin\Controller;


class AuthRuleController extends CommonController {
    //type首页显示
    public function index()
    {
       $authList = M('auth_rule')->select();

       $status = [null, '正常', '禁用'];

       $this->assign('status', $status);

       $this->assign('authList', $authList);

       $this->display('Backstage/authRule');
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

    //Auth批量删除
    public function deleteAuthAll()
    {

    	$ids = I('post.');

        if (empty($ids)) {
            $this->error('请先勾选要删除的分类');
            exit;
        }

    	$ids = join($ids['ids'], ',');

    	$res = D('AuthRule')->deleteAuth($ids);

    	if ($res) {
    		$this->success('删除成功', U('index'));
    	} else {
    		$this->error('删除失败', U('index'));
    	}
    }

    //编辑权限
    public function editAuth()
    {
        if(IS_POST) {

            $data = I('post.');

            // dump($data);
            // exit;

            $res = M('AuthRule')->data($data)->save();



            // exit;

            if ($res !== false) {
                $this->success('修改成功', U('index'));

            } else {
                $this->error('修改失败');
            }



        } elseif (IS_GET) {
            $id = I('get.id');

            $authRule = D('AuthRule')->fineAuth($id);

            $this->assign('authRule', $authRule);

            $this->display('Backstage/editAuth');
        }
    }

}
