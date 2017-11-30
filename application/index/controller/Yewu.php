<?php
namespace app\index\controller;

use app\common\model\Ad;
use app\common\model\SeoSet;
use think\Controller;

class Yewu extends Controller
{
    public function index()
    {

        $row_ad  = Ad::getAdByPosition(2);
        $seo = SeoSet::getSeoByNavId(2);
        return $this->fetch('',compact('row_ad','seo'));
    }
  public function yingxiao(){

      return $this->fetch('index');
  }
  public function tuoguan(){
      $row_ad  = Ad::getAdByPosition(3);
      return $this->fetch('',compact('row_ad'));
  }
  public function qyy(){
      $this->view->engine->layout('layout/qyy');
      $list_ad = Ad::getAdsByPosition(6);
      $list_friend = \app\common\model\Friend::getList(['type'=>1]);
      return $this->fetch('',compact('list_ad','list_friend'));
  }

}
