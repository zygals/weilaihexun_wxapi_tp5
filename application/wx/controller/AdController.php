<?php
    namespace app\wx\controller;
    use app\wx\model\Ad;
    use think\Request;
    use app\common\model\Base;
class AdController {

    /**
     * 小程序广告图
     * @return \think\response\Json
     */
    public function index(){
        return json(Ad::getAd());
    }
}