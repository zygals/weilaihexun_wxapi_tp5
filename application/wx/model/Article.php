<?php
    namespace app\wx\model;
    use think\Model;
    class Article extends Model {
       /* public function getStAttr($value) {
            $status = [0 => 'deleted', 1 => '正常', 2 => '不显示'];
            return $status[$value];
        }
        public function getIndexShowAttr($value) {
            $status = [0 => '否', 1 => '是'];
            return $status[$value];
        }*/

        public static  function  getNew(){
            $where = ['article.st' => ['<>', 0]];
            $order = "create_time desc";
            $list = self::where($where)->order($order)->paginate(4);
            if(!count($list)>0){
                return ['code'=>__LINE__,'msg'=>'暂无资讯'];
            }
            foreach ($list as $k => $value) {
                if (mb_strlen($value->charm, "UTF8") >39 ) {
                    $list[$k]->charm = mb_substr($value->charm, 0, 40, 'utf-8') . '......';
                }
            }
//            dump($list);exit;
            return ['code'=>0,'msg'=>'article/index','data'=>$list];
        }

        public static  function getList($data){
            $id = $data['id'];
            $list = self::where(['id'=>$id,'st'=>1])->find();
            if(!count($list)>0){
                return ['code'=>__LINE__,'msg'=>'暂无资讯'];
            }
            //图片加上域名
            $list->cont= preg_replace('/<img src="\/editor/im', '<img src="http://www.weilaihexun.com/editor',$list->cont );
            return ['code'=>0,'msg'=>'article/getInfo','data'=>$list];
        }
        public static function getRecent(){
            $list_ = self::where(['st'=>1])->field('id,name,create_time')->limit(2)->order('create_time desc')->select();
            if(empty($list_)){
                return ['code'=>__LINE__];
            }
            return ['code'=>0,'data'=>$list_];
        }
    }