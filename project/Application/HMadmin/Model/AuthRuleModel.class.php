<?php
namespace HMadmin\Model;

use Think\Model;

class AuthRuleModel extends Model {

   
   protected $_validate = array(

        array('name', 'require', '权限路径不能为空'),

        array('name','','权限路径名称已经存在！',0,'unique',1), 

        array('title', 'require', '功能名不能为空'),

   );

   //添加权限
   public function addAuthRule($data)
   {
   		return $this->add($data);
   }

   //删除权限
    public function deleteAuth($id)
    {
        return $this->delete($id);

    }

   //查询一个权限
   public function fineAuth($id)
   {
   		return $this->where("id = $id")->find();
   }

}