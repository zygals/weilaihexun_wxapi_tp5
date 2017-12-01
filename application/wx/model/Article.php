<?php
    namespace app\wx\model;
    use app\common\model\Base;
    use think\model;

    class Article extends Base{
        public function getStAttr($value) {
            $status = [0 => 'deleted', 1 => '正常', 2 => '不显示'];
            return $status[$value];
        }
        public function getIndexShowAttr($value) {
            $status = [0 => '否', 1 => '是'];
            return $status[$value];
        }

        public static  function  getNew(){
            $where = ['article.st' => ['<>', 0]];
            $order = "create_time desc";
            $list = self::where($where)->order($order)->paginate(4);
            if(!count($list)>0){
                return ['code'=>__LINE__,'msg'=>'暂无资讯'];
            }
            return ['code'=>0,'msg'=>'article/index','data'=>$list];
        }

        public static  function getList($data){
            $id = $data['id'];
            $list = self::where(['id'=>$id,'st'=>1])->find();
            if(!count($list)>0){
                return ['code'=>__LINE__,'msg'=>'暂无资讯'];
            }
            $list->cont= preg_replace("/\"editor/im", '"http://www.weilaihexun.com/editor',$list->cont );
            return ['code'=>0,'msg'=>'article/getInfo','data'=>$list];
        }
    }