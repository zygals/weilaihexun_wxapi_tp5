<?php

namespace app\index\controller;

use app\common\model\Article;
use app\common\model\Base;
use app\common\model\CateShipin;
use app\common\model\Host;
use app\common\model\SeoSet;
use app\common\model\Shipin;
use think\Cache;
use think\Controller;
use think\Db;
//use think\db\Query;
use think\Request;

class News extends Controller {
    public function index(Request $request) {
        $data = $request->param();

        $list_new_index = Article::getList(['index_show' => 1], ['st' => 1], 4);
        $list_new_1 = Article::getList(['cate' => 1], ['st' => 1], 6);
        $list_new_2 = Article::getList(['cate' => 2], ['st' => 1], 6);
        $list_new_3 = Article::getList(['cate' => 3], ['st' => 1], 6);
        $list_new = Article::getList([], ['st' => 1]);
        $seo = SeoSet::getSeoByNavId(4);
        $page_str = $list_new->render();
        $page_str = Base::getPageStr($data, $page_str);
        return $this->fetch('', compact('list_new_index', 'list_new_1', 'list_new_2', 'list_new_3', 'list_new', 'seo', 'page_str'));
    }

    public function get_list(Request $request) {
        $data = $request->param();
        $list_new = Article::getList(['cate' => $data['cate']], ['st' => 1]);
        $page_str = $list_new->render();
        $page_str = Base::getPageStr($data, $page_str);
        return $this->fetch('list', ['list_new' => $list_new, 'page_str' => $page_str]);

    }

    public function read(Request $request) {
        $data = $request->param();
        $row_ = Article::findOne($data['id']);
        if (!$row_) {
            $this->error('暂无数据');
        }
        $row_->setInc('click');
        $seo = (object)[
            'title' => $row_->name . '_' . $row_->cate . '_' . config('site_name'),
            'keywords' => $row_->keywords,
            'description' => $row_->description,
        ];
        // dump($row_->cate);exit;
        return $this->fetch('', ['row_news' => $row_, 'seo' => $seo]);

    }


    public function chuangke(Request $request) {
        $data = $request->param();
        $cate_id = 0;
        if (isset($data['cate_id']) && !empty($data['cate_id'])) {
            $cate_id = $data['cate_id'];
        }

        $this->view->engine->layout(false);
        $list_shipin_index_show = Shipin::getList(['index_show' => 1, 'paixu' => 'sort'],['shipin.st' => ['=', 1]]);
        $list_shipin = Shipin::getList(['paixu' => 'sort', 'cate_id' => $cate_id], ['shipin.st' => ['=', 1]]);
        $list_cate = CateShipin::getList(['paixu' => 'sort']);
        $list_host = Host::getList();
//        dump($list_host);
        return $this->fetch('', compact('list_shipin_index_show', 'list_shipin', 'list_cate','cate_id','list_host'));
    }
    public function read_shipin(Request $request){
        $data = $request->param();
        $row_ = Shipin::getOne($data['id']);
        if(!$row_){
            $this->error('暂无数据');
        }
        $row_->setInc('click');
        $list_comment = Shipin::getList(['paixu' => 'sort', 'cate_id' => $row_->cate_id]);
        $seo = (object)[
            'title' => $row_->name . '_' . $row_->cate_name . '_' .'运营客堂_'. config('site_name'),
            'keywords' => $row_->keywords,
            'description' => $row_->description,
        ];
        return $this->fetch('',['row_'=>$row_,'list_comment'=>$list_comment,'seo'=>$seo]);
    }


}
