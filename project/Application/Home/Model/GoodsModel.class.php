<?php

namespace Home\Model;

use Think\Model;

class GoodsModel extends Model
{

    public function OneList()
    {
        $OneList = M('type')->field('id,name')->where('pid=0')->select();
        return $OneList;
    }

    public function twoGoodsList()
    {
        $tid = I('post.pid');

        $list = M('goods')->where('tid='.$tid)->select();

        return $list;
    }

}
