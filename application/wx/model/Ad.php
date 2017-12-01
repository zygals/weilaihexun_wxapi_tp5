<?php
namespace app\wx\model;
use think\Model;
class Ad extends Model{
    public static function getAd(){
        $data = self::where(['position'=>'7','st'=>1])->select();
        if(empty($data)){
            return ['code'=>__LINE__,'msg'=>'暂无banner'];
        }
        return ['code'=>0,'msg'=>'ad/index','data'=>$data];
    }
}