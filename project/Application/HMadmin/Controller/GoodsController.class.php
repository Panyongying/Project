<?php

    namespace HMadmin\Controller;

    use Think\Controller;

    class GoodsController extends CommonController
    {
        //商品列表
        public function index()
        {
            if (IS_POST) {


            } else {

                $goodsList = D('goods')->selectAll();

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


    }

