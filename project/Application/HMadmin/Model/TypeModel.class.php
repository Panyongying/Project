<?php
namespace HMadmin\Model;

use Think\Model;

class TypeModel extends Model {

    //查出所有分类
    public function typeSelect()
    {
        return $this->order('concat(path, id)')->select();
    }

    //删除判断分类是否有父级
    public function beforeDelete($ids)
    {
        $res = $this->field('pid')->where("pid in ($ids)")->select();

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