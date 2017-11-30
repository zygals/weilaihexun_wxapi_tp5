<?php

namespace app\common\model;

use think\Model;

class Recruit extends model {
    protected $insert = ['st' => 1];

    public function getStAttr($value) {
        $status = [0 => 'deleted', 1 => '正常', 2 => '不显示'];
        return $status[$value];
    }

    public static function getList($data=[], $where = ['st' => ['<>',0]]) {

        if(!empty($data['name'])){
            $where['name']=['like','%'.$data['name'].'%'];
        }
        $list_ = self::where($where)->order('create_time desc')->paginate();

        return $list_;
    }
    public static function getHomeList(){
        $where = ['st' => ['=',1]];

        $list_ = self::where($where)->order('create_time desc')->select();

        return $list_;
    }


}
