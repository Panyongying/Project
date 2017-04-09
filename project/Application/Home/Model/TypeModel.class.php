<?php

    namespace Home\Model;

    use Think\Model;

    class TypeModel extends Model
    {

        public function typeList()
        {

            $typeList = $this->field('id,name')->where('pid=0')->select();

            return $typeList;
        }

    }
