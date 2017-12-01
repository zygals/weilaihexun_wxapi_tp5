<?php
namespace app\wx\model;
use think\Model;
class Anli extends Model{

    public static function getList(){
        $list_ = self::where(['anli.st'=>'1','anli.sort'=>'asc'])->field('anli.id,anli.name,img,func_ids,cate_anli.name cate_name')->join('cate_anli','anli.cate_anli_id=cate_anli.id')->paginate(8);
        if(empty($list_)){
            return ['code'=>__LINE__];
        }
        foreach ($list_ as $k=>$anli){
            $list_[$k]['funcs']=  Func::getNames($anli->func_ids);;
        }
        return ['code'=>0,'msg'=>'anli_list','data'=>$list_];
    }

    public static function findOne($id){
        $row  = self::where(['id'=>$id])->find();
        if(!$row){
            return ['code'=>__LINE__];
        }

        $row->cont= preg_replace('/<img src="\/editor/im', '<img src="http://www.weilaihexun.com/editor',$row->cont );
//        $row->funcs = Func::getNames($row->func_ids);

        return ['code'=>0,'msg'=>'anli detail','data'=>$row];
    }
}