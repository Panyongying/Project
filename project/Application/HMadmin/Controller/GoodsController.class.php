<?php

    namespace HMadmin\Controller;

    use Think\Controller;

    class GoodsController extends CommonController
    {
        //商品列表+搜索分页
        public function index()
        {
            if (IS_POST) {


            } else {

                $goodsList = D('goods')->selectAll();

                $show = array_pop($goodsList);

                $this->assign('show', $show);
                $this->assign('goodsList', $goodsList);
                $this->display('Backstage/goods');
            }
        }

        //ajax删除
        public function ajaxDelete()
        {
            if (IS_AJAX) {

                $res = D('goods')->deleteOne();

                if ($res) {

                    $this->ajaxReturn(1);
                }
            }

        }

        //批量删除
        public function deleteAll()
        {
            // dump(I('post.checkson'));exit;
            $res = D('goods')->deleteAll();

            if ($res) {

                $this->success('下手有点狠', U('Goods/index'));
            } else {

                $this->error('删除失败,请重试', U('Goods/index'));
            }

        }

        //添加goods
        public function addGood()
        {

            if (IS_POST) {

                $res = D('goods')->addGood();

                if ($res) {

                    $this->success('添加成功', U('Goods/index'));
                } else {

                    $this->error('添加失败', U('Goods/addGood'));
                }

            } else {

                $type = D('goods')->selectType();
                $attr = D('goods')->selectAttr();

                $this->assign('attr', $attr);
                $this->assign('type', $type);
                $this->display('Backstage/addGood');
            }
        }

        //删除目录中的图片
        public function deletePic()
        {

            $fileObj = (I('post.'));

            dump($fileObj['path']);

            $fileObj['path'] = ltrim($fileObj['path']);

            $filePath = "./Public/".$fileObj['path'];

            if ( unlink($filePath) ) {

                echo 1;
            } else {

                echo 0;
            }
        }

        //文件上传
        public function upload()
        {

            // 实例化上传类
            $upload = new \Think\Upload();

            // 设置附件上传大小
            $upload->maxSize   =     314572800;//300M

            // 设置附件上传类型
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
            // $upload->exts      =     array('wmv','mp4');

            $upload->rootPath   = './Public/';

            // 设置附件上传目录
            $upload->savePath  =      './Upload/';


            //返回上传信息
            $info   =   $upload->uploadOne($_FILES['pic']);

            if( !$info ) {
                // 上传错误提示错误信息

                $data['status'] = 404;

                //错误信息
                $data['msg']    = $upload->getError();

                echo  json_encode($data);

            } else {

                // 上传成功 (图片路径、图片名字)

                $data['status']  = 200;
                $data['msg']     = 'UPLOAD SUCCESS';

                //图片原始名字
                $data['details']['originName'] = $info['name'];
                $data['details']['savename'] = $info['savename'];
                $data['details']['savepath'] = $info['savepath'];

                echo json_encode($data);
            }
        }

        //显示图片详情
        public function goodsDetail()
        {
            if (IS_POST) {

            } else {

                $pic = D('goods')->goodsDetail();

                $this->assign('pic', $pic);
                $this->display('Backstage/goodsDetail');
            }
        }

        //编辑商品
        public function goodsEdit()
        {
            if (IS_POST) {

                $res = D('goods')->editOneGood();

                if ($res) {

                    $this->success('修改成功', U('Goods/index'));
                } else {

                    $this->error('修改失败', U('Goods/index'));
                }

            } else {

                $goodData = D('goods')->goodsEdit();

                // dump($goodData);exit;
                $type = D('goods')->selectType();

                $this->assign('goodData', $goodData);
                $this->assign('type', $type);
                $this->display('Backstage/goodsEdit');
            }
        }

        //编辑时ajax删除图片
        public function editDelPic()
        {

            if (IS_AJAX) {

                $res = D('goods')->editDelPic();

                if ($res) {

                    $this->ajaxReturn(1);
                }
            }
        }

        //ajax修改状态
        public function editStatus()
        {

            if (IS_AJAX) {

                $res = D('goods')->editStatus();

                $this->ajaxReturn($res);

            }
        }

        //库存详情
        public function stockDeatil()
        {
            if (IS_POST) {


            } else {

                $gid = I('get.gid');
                $stockNums = D('goods')->stockDetail();

                $this->assign('stockDetail', $stockNums);
                $this->assign('gid', $gid);
                $this->display('Backstage/stockDetail');
            }
        }

        //库存/颜色/尺码修改
        public function stockEdit()
        {

            if (IS_POST) {

                $res = D('goods')->stockEditOne();

                if ($res !== false) {

                    $this->success('更新成功', 'Index/index');
                } else {

                    $this->error('更新失败', 'Index/index');

                }

            } else {

                $res = D('goods')->stockFind();
                $attrColor = M('attr')->field('id,attrName')->where('id<4')->select();
                $attrSize = M('attr')->field('id,attrName')->where('id>3')->select();

                $this->assign('attrColor', $attrColor);
                $this->assign('attrSize', $attrSize);
                $this->assign('stockOne', $res);
                $this->display('Backstage/stockEdit');
            }
        }

        //addstock添加库存/颜色/尺码
        public function addStock()
        {

            if (IS_POST) {

                $res = D('goods')->addStock();

                if ($res != false) {

                    $this->success('添加成功', 'Index/index');
                }

            } else {

                $gid = I('get.gid');
                $attrColor = M('attr')->field('id,attrName')->where('id<4')->select();
                $attrSize = M('attr')->field('id,attrName')->where('id>3')->select();

                $this->assign('attrColor', $attrColor);
                $this->assign('attrSize', $attrSize);
                $this->assign('gid', $gid);
                $this->display('Backstage/addstock');
            }
        }

        //删除商品属性
        public function stockDel()
        {

            if (IS_AJAX) {

                $res = D('goods')->stockDel();

                $this->ajaxReturn($res);
            }
        }

        //商品图片颜色列表
        public function showGoodsPic()
        {
            if (IS_POST) {

            } else {

                $data = D('goods')->GoodsDetailPic();
                $show = array_pop($data);

                $this->assign('show', $show);
                $this->assign('data', $data);
                $this->display('GoodsDetailPic/showGoodsPic');
            }

        }

        //根据aid和gid查找对应图片
        public function seePics()
        {
            if (IS_POST) {

            } else {

                $data = D('goods')->seePics();
                $g_a_id = array_pop($data);

                $this->assign('data', $data);
                $this->assign('g_a_id', $g_a_id);
                $this->display('GoodsDetailPic/seePics');
            }
        }

        //加载页面
        public function GoodsColorPic()
        {
            if (IS_POST) {

            } else {

                $id = I('get.');

                $this->assign('id', $id);
                $this->display('GoodsDetailPic/GoodsColorPic');

            }
        }

        //添加商品的颜色对应图片
        public function addColorPic()
        {

            if (IS_POST) {

                $gid = I('post.gid');
                $aid = I('post.aid');

                $res = D('goods')->addColorPic();

                if ($res) {

                    $this->success('添加成功', U('Goods/showGoodsPic'));
                }

            } else {

                $gid = I('get.gid');
                $attrColor = D('goods')->findAttrColor();

                $this->assign('gid', $gid);
                $this->assign('attrColor', $attrColor);
                $this->display('GoodsDetailPic/addColorPic');
            }

        }
    }

