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
   		return M('AuthGroup')->add($data);
   }

   //删除管理组
    public function deleteGroup($id)
    {
        return M("AuthGroup")->delete($id);

    }

}