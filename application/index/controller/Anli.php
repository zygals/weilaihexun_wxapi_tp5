<?php

namespace app\index\controller;

use app\common\model\Ad;
use app\common\model\Base;
use app\common\model\CateAnli;
use app\common\model\Func;
use app\common\model\SeoSet;
use think\Controller;
use think\Request;

class Anli extends Controller {
    public function __construct(Request $request = null) {
        parent::__construct($request);
        $row_ad = Ad::getAdByPosition(4);
        $this->assign(['row_ad' => $row_ad]);
    }

    public function index(Request $request) {
        $data = $request->param();
        $list_cate_anli = CateAnli::getList(['paixu' => 'sort']);
        if (!empty($data['cate_anli_id'])) {

            $cate_anli_id = $data['cate_anli_id'];
        } else {
            $cate_anli_id = 0;
        }
        $list_anli = \app\common\model\Anli::getList(['paixu' => 'sort', 'cate_anli_id' => $cate_anli_id]);

        if (count($list_anli) == 0) {
            $this->error('暂无数据');
        }
        foreach ($list_anli as $k => $row_) {
            $list_anli[$k]->func_ids = explode(',', $row_->func_ids);
        }

        $list_func = Func::getList();
        $seo = SeoSet::getSeoByNavId(3);

        $page_str = $list_anli->render();
        $page_str = Base::getPageStr($data,$page_str);

        //dump($list_anli);exit;
        return $this->fetch('', compact('list_anli', 'list_func','list_cate_anli','page_str','seo'));
    }

   public function read(Request $request){
        $data = $request->param();
        $row_anli = \app\common\model\Anli::getOne($data['anli_id']);
        if(!$row_anli){
            $this->error('暂无数据');
        }
       $seo = (object)[
           'title'=>$row_anli->name.'_'.$row_anli->cate_name.'_'.'品牌案例'.'_'.config('site_name'),
           'keywords'=>$row_anli->keywords,
           'description'=>$row_anli->description,
       ];
       return $this->fetch('', compact('row_anli','seo'));
   }


}
