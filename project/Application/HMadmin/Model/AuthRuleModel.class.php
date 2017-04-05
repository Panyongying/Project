<?php
namespace HMadmin\Model;

use Think\Model;

class AuthRuleModel extends Model {

   
   protected $_validate = array(

        array('name', 'require', '权限路径不能为空'),

        array('title', 'require', '功能名不能为空'),

   );

   //添加权限
   public function addAuthRule($data)
   {
   		return M('AuthRule')->add($data);
   }

}