<?php
namespace HMadmin\Model;

use Think\Model;

class TypeModel extends Model {

    //查出所有分类
    public function typeSelect()
    {
        return $this->order('concat(path, id)')->select();
    }

    //删除判断分类是否有子级
    public function beforeDelete($ids)
    {
        $res = $this->field('pid')->where("pid in ($ids)")->select();

        return $res;
    }

    //判断分类里是否有商品
    public function checkGoodsInOrNot($ids)
    {
        $res = M('Goods')->field('tid')->where("tid in ($ids)")->select();

        return $res;
    }


    //添加父级分类
    public function addParentType($name)
    {
       $data['name'] = $name;

       $data['pid'] = 0;

       $data['path'] = '0,';

       return $this->add($data);
    }

    //删除分类
    public function deleteType($id)
    {
        return $this->delete($id);

    }

    //添加子级分类
    public function addChildType($data)
    {
        return $this->add($data);
    }
}