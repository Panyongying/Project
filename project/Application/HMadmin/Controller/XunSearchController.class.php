<?php

    namespace HMadmin\Controller;

    import("XS.lib.XS");


class XunSearchController extends CommonController {
    //xunsearch首页显示
    public function index()
    {
       $this->display('Backstage/xunsearch');
       
    }

    //直接构建索引
    public function createIndex()
    {
    	$xs = new \XS('jhjy');
    	$index = $xs->index;
    	$search = $xs->search;
   		$doc = new \XSDocument;
    	$res = $index->clean();

    	//查数据库获取数据
        $res =  M('goods')->field('hm_goods.id,hm_goods.name,hm_goods.price,hm_goods.tid,hm_goods.status,hm_stock.aid')->join('hm_stock ON hm_goods.id = hm_stock.gid')->select();
	    foreach ($res as $v) {
	        $res2 = M('attr')->field('attrName')->where("id in ({$v['aid']})")->select();
	      	// var_dump($res2);
	      	foreach ($res2 as $vo) {
	      		@$v['attrName'] .= $vo['attrname'].',';
	      	}
	      	$v['attrName'] = rtrim($v['attrName'],',');
	      	$data[] = $v;
	    }

	    if (!$data) {
	    	echo 'false';
	    	exit;
	    }


	    // //创建索引
	    foreach ($data as $v) {
	    	$docs = $doc->setFields(array(
	   			'id'=>$v['id'],
	   			'name'=>$v['name'],
	   			'price'=>$v['price'],
	   			'tid'=>$v['tid'],
	   			'status'=>$v['status'],
	   			'attrname'=>$v['attrName'],
	   		));
	   		$res = $index->add($doc);
	    }

	    if (!$res) {
	    	echo 'false';
	    	exit;
	    } else {
	    	echo 'true';
	    	exit;
	    }
    }

    //清空索引
    public function cleanIndex()
    {
    	$xs = new \XS('jhjy');
    	$index = $xs->index;
    	$res = $index->clean();

    	if ($res) {
    		echo 'true';
    	} else {
    		echo 'false';
    	}
    }

    //平滑重构索引
    public function smoothReIndex()
    {
    	$xs = new \XS('jhjy');
    	$index = $xs->index;
    	$search = $xs->search;
   		$doc = new \XSDocument;
    	$res = $index->clean();
   		

    	//查数据库获取数据
        $res =  M('goods')->field('hm_goods.id,hm_goods.name,hm_goods.price,hm_goods.tid,hm_goods.status,hm_stock.aid')->join('hm_stock ON hm_goods.id = hm_stock.gid')->select();
	    foreach ($res as $v) {
	        $res2 = M('attr')->field('attrName')->where("id in ({$v['aid']})")->select();
	      	// var_dump($res2);
	      	foreach ($res2 as $vo) {
	      		@$v['attrName'] .= $vo['attrname'].',';
	      	}
	      	$v['attrName'] = rtrim($v['attrName'],',');
	      	$data[] = $v;
	    }

	    if (!$data) {
	    	echo 'false';
	    	exit;
	    }

	    //宣布开始重建索引
	    $index->beginRebuild();

	    // //创建索引
	    foreach ($data as $v) {
	    	$docs = $doc->setFields(array(
	   			'id'=>$v['id'],
	   			'name'=>$v['name'],
	   			'price'=>$v['price'],
	   			'tid'=>$v['tid'],
	   			'status'=>$v['status'],
	   			'attrname'=>$v['attrName'],
	   		));
	   		$res = $index->add($doc);
	    }

	    $res = $index->endRebuild();

	    if ($res) {
	    	echo 'true';
	    } else {
	    	echo 'false';
	    }

    }

    
}