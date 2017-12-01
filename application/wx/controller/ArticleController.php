<?php

    namespace app\wx\controller;
    use app\wx\model\Article;
    use think\Controller;
    use think\Request;

    class ArticleController extends Controller{

        /**
         * 资讯列表页
         * @return \think\response\Json
         */
        public function index(){
            return json(Article::getNew());
        }

        public function getInfo(Request $request){
            $data = $request->param();
            $rules = ['id'=>'require|number'];
            $res = $this -> validate($data,$rules);
            if($res !== true){
                return json(['code' => __LINE__, 'msg' => 'id错误']);
            }
            return json(Article::getList($data));
        }
    }