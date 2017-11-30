<?php

namespace app\common\model;

use think\Model;

class Shipin extends Base {

    public function getStAttr($value) {
        $status = [0 => 'deleted', 1 => '正常', 2 => '不显示'];
        return $status[$value];
    }
    public function getIndexShowAttr($value) {
        $status = [0 => '否', 1 => '是'];
        return $status[$value];
    }

    public static function getListByCateId($cate_id) {
        $list_ = self::where(['cate_id'=>$cate_id])->select();
        return $list_;
    }

    public static function getList($data = [],  $where = ['shipin.st' => ['<>', 0]]) {
        $filed = 'shipin.*,cs.name cate_name';
        $order = "create_time desc";
        if (!empty($data['cate_id'])) {
            $where['cate_id'] = $data['cate_id'];
        }

        if (!empty($data['name'])) {
            $where['shipin.name'] = ['like', '%' . $data['name'] . '%'];
        }
        if (!empty($data['index_show'])) {
            $where['index_show'] = $data['index_show'];
        }
        if (!empty($data['paixu'])) {
            $order = 'shipin.' . $data['paixu'] . ' asc';
        }
        if (!empty($data['paixu']) && !empty($data['sort_type'])) {
            $order = 'shipin.' . $data['paixu'] . ' desc';
        }

        $list_ = self::where($where)->join('cate_shipin cs','cs.id=shipin.cate_id')->field($filed)->order($order)->paginate();
//funcs

        return $list_;
    }
    public static function getOne($id){
        return self::where(['shipin.id'=>$id,'shipin.st'=>1])->field('shipin.*,cs.name cate_name')->join('cate_shipin cs','cs.id=shipin.cate_id')->find();
    }


}
