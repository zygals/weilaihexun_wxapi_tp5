<?php

namespace app\common\model;

use think\Model;

class Ad extends model {

    public function getStAttr($value) {
        $status = [0 => 'deleted', 1 => '正常', 2 => '不显示'];
        return $status[$value];
    }

    public function getNewWindowAttr($value) {
        $status = [0 => '否', 1 => '是'];
        return $status[$value];
    }

    public function getPositionAttr($value) {
        $status = [1 => '首页', 2 => '业务体系', 3 => '金牌托管', 4 => '品牌案例', 5 => '关于我们',6=>'轻应用联盟'
        ];
        return $status[$value];
    }

    public static function getAdByPosition($position) {
        $where = ['st' => ['=', 1], 'position' => $position];
        $row_ = self::where($where)->order('create_time desc')->find();
        if (!$row_) {
            return (object)[
                'img' => '',
                'url'=>'',
                'new_window'=>''
            ];
        }
        return $row_;
    }

    public static function getAdsByPosition($position) {
        $where = ['st' => ['=', 1], 'position' => $position];
        $list_ = self::where($where)->order('create_time desc')->select();
        return $list_;
    }

    public static function getList($data=[]) {
        $where = ['st' => ['<>', 0]];
        $order = 'create_time desc';
        if (!empty($data['position'])) {
            $where['position'] = $data['position'];
        }
        if (!empty($data['title'])) {
            $where['title'] = ['like', '%' . $data['title'] . '%'];
        }
        if (!empty($data['paixu'])) {
            $order = 'ad.' . $data['paixu'] . ' asc';
        }
        if (!empty($data['paixu']) && !empty($data['sort_type'])) {
            $order = 'ad.' . $data['paixu'] . ' desc';
        }
        $list_ = self::where($where)->order($order)->paginate();
        return $list_;
    }

    public static function getPositions() {
        $arr = [
            1 => (object)[
                'id' => 1,
                'name' => '首页',
                'width' => '1920',
                'height' => '670',
            ],
            2 => (object)[
                'id' => 2,
                'name' => '业务体系',
                'width' => '1920',
                'height' => '554',
            ],
            3 => (object)[
                'id' => 3,
                'name' => '金牌托管',
                'width' => '1920',
                'height' => '554',
            ],
            4 => (object)[
                'id' => 4,
                'name' => '品牌案例',
                'width' => '1920',
                'height' => '554',
            ],
            5 => (object)[
                'id' => 5,
                'name' => '关于我们',
                'width' => '1920',
                'height' => '223',
            ],
            6 => (object)[
                'id' => 6,
                'name' => '轻应用联盟',
                'width' => '1920',
                'height' => '223',
            ]

        ];
        return $arr;
    }




    public static function urlOpen($url, $new_window) {
        $str = '';
        if (!empty($url)) {
            $str .= "href='$url'";
            if ($new_window == '是') {
                $str .= " target='_blank'";
            }
        }


        return $str;
    }

}
