<?php

namespace app\common\model;

use think\Model;
use app\common\model\GoodAttr;

class Article extends Base {

    public function getStAttr($value) {
        $status = [0 => 'deleted', 1 => '正常', 2 => '不显示'];
        return $status[$value];
    }

    public function getCateAttr($value) {
        $status = [1 => '媒体报道', 2 => '行业资讯', 3 => '企业动态'];
        return $status[$value];
    }

    public function getIndexShowAttr($value) {
        $status = [0 => '否', 1 => '是'];
        return $status[$value];
    }

    public static function getList($data = [],$where = ['article.st' => ['<>', 0]],$limit=0) {
        $filed = 'article.*';
       // $where = ['article.st' => ['<>', 0]];
        $order = "create_time desc";
        if (!empty($data['cate'])) {
            $where['cate'] = $data['cate'];
        }

        if (!empty($data['name'])) {
            $where['article.name'] = ['like', '%' . $data['name'] . '%'];
        }
        if (!empty($data['index_show'])) {
            $where['index_show'] = $data['index_show'];
        }
        if (!empty($data['paixu'])) {
            $order = 'article.' . $data['paixu'] . ' asc';
        }
        if (!empty($data['paixu']) && !empty($data['sort_type'])) {
            $order = 'article.' . $data['paixu'] . ' desc';
        }
        if($limit>0){
            $list_ = self::where($where)->field($filed)->limit($limit)->order($order)->select();
        }else{

            $list_ = self::where($where)->field($filed)->order($order)->paginate();
        }


        foreach ($list_ as $k => $value) {
            if (mb_strlen($value->charm, "UTF8") >129 ) {
                $list_[$k]->charm = mb_substr($value->charm, 0, 130, 'utf-8') . '......';
            }
        }
        return $list_;
    }
    public static function findOne($id){
        return self::where(['id'=>$id,'st'=>1])->find();
    }
  public function getCateId($cate_name){
      $status = ['媒体报道'=>1, '行业资讯'=>2, '企业动态'=>3];
      return $status[$cate_name];
  }
}
