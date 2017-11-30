<?php
namespace app\index\controller;

use app\common\model\Ad;
use app\common\model\Anli;
use app\common\model\CateAnli;
use app\common\model\Friend;
use app\common\model\Func;
use app\common\model\SeoSet;
use app\common\model\Setting;
use think\Controller;
use think\Request;

class Index extends Controller {
    public function index(Request $request) {
        $data = $request->param();
        $list_ad = Ad::getAdsByPosition(1);

        $list_cate_anli = CateAnli::getList(['paixu' => 'sort']);
        if (empty($data['cate_anli_id'])) {
            $cate_anli_id = count($list_cate_anli)>0?$list_cate_anli[0]->id:1;
        } else {
            $cate_anli_id = $data['cate_anli_id'];

        }
        $list_anli = Anli::getList(['paixu' => 'sort', 'index_show' => 1, 'cate_anli_id' => $cate_anli_id]);
        if (!empty($data['cate_anli_id'])) {
            if (count($list_anli) == 0) {
                $this->error('暂无数据');
            }
        }
        foreach ($list_anli as $k => $row_) {
            $list_anli[$k]->func_ids = explode(',', $row_->func_ids);
        }

        $list_func = Func::getList();
        $list_friend_hezuo= Friend::getList(['type'=>2]);
        $seo = SeoSet::getSeoByNavId(1);
       //dump($list_friend_hezuo);
        $qqs = Setting::getSet()->qqs;
        $qqs = explode(',',$qqs);
        return $this->fetch('', compact('list_ad', 'list_cate_anli', 'list_anli', 'list_func','list_friend_hezuo','seo','qqs'));
    }
}
