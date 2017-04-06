<?php
namespace HMadmin\Model;

use Think\Model;

class AuthGroupModel extends Model {

   
   protected $_validate = array(

        array('title', 'require', '部门名不能为空'),

   );

   //添加权限
   public function addAuthGroup($data)
   {
   		return $this->add($data);
   }

   //删除管理组
    public function deleteGroup($id)
    {
        return $this->delete($id);

    }

    //查出组名
    public function findGroupName($id)
    {
        return $this->field('title')->where("id=$id")->find();
    }

    //查出部门所属组员
    public function selectGroupAdmin($group_id)
    {
        return M('AuthGroupAccess')->where("group_id=$group_id")->join('hm_admin ON hm_auth_group_access.uid = hm_admin.id')->select();
    }

    //删除前判定有没管理员在此部门
    public function beforeDelete($group_id)
    {
        return M('AuthGroupAccess')->where("group_id in ($group_id)")->join('hm_admin ON hm_auth_group_access.uid = hm_admin.id')->select();
    }

}