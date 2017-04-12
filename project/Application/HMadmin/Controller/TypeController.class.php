<?php

namespace HMadmin\Controller;


class TypeController extends CommonController {
    //type首页显示
    public function index()
    {
       $typeList = D('Type')->typeSelect();


       $this->assign('typeList', $typeList);

       $this->display('Backstage/type');
    }

    //type添加分类页面
    public function showAddType()
    {
        //显示添加分类页面
    	if(IS_GET) {

            $id = I('get.id');
            $path = I('get.path');

            $this->assign('id', $id);
            $this->assign('path', $path);

            $this->display('Backstage/addType');
    		
    	//根据有没POST.id分辨子类
    	} elseif(IS_POST && $_POST['id']) {
            $name = I('post.name');
            $id = I('post.id');
            $path = I('post.path').$id.',';
            
            $data['name'] = $name;
            $data['pid'] = $id;
            $data['path'] = $path;

            $res = D('Type')->addChildType($data);

            if ($res) {
                $this->success('添加成功', U('index'));
            } else {
                $this->error('添加失败', U('index'));
            }

           //父类分类添加 
        } elseif (IS_POST) {

            $name = I('post.name');
            $res = D('Type')->addParentType($name);

            if ($res) {
                $this->success('添加成功', U('index'));
            } else {
                $this->error('添加失败', U('index'));
            }

        }
    }

    //type单条删除
    public function deleteTypeOne()
    {

    	$id = I('get.id');

        $bRes = D('Type')->beforeDelete($id);

        $gRes = D('Type')->checkGoodsInOrNot($id);
        
        if ($bRes) {
            $this->error('删除失败,请先删除子级分类', U('index'));
            exit;
        } elseif ($gRes) {
            $this->error('分类下还有商品，请先删除', U('index'));
            exit;
        }



    	$res = D('Type')->deleteType($id);

    	if ($res) {
    		$this->success('删除成功', U('index'));
    	} else {
    		$this->error('删除失败', U('index'));
    	}
    }

    //type批量删除
    public function deleteTypeAll()
    {

    	$ids = I('post.');

        if (empty($ids)) {
            $this->error('请先勾选要删除的分类');
            exit;
        }

    	$ids = join($ids['ids'], ',');

        $bRes = D('Type')->beforeDelete($ids);

        $gRes = D('Type')->checkGoodsInOrNot($ids);

        
        if ($bRes) {
            $this->error('删除失败,请先删除子级分类', U('index'));
            exit;
        } elseif ($gRes) {
            $this->error('分类下还有商品，请先删除', U('index'));
            exit;
        }

    	$res = D('Type')->deleteType($ids);

    	if ($res) {
    		$this->success('删除成功', U('index'));
    	} else {
    		$this->error('删除失败', U('index'));
    	}
    }
    //type修改name
    public function modifyTypeName()
    {
        $data = I('get.');

        M('Type')->name = $data['name'];

        $res = M('Type')->where("id={$data['id']}")->save();

        echo $res;
        exit;

    }
}