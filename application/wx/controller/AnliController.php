<?php
namespace app\wx\controller;

use app\wx\model\Anli;
use think\Request;

class AnliController {

    /**
     * list
     * @return \think\response\Json
     */
    public function index() {
        return json(Anli::getList());
    }

    /*
     * read anli
     * */
    public function read(Request $request) {
        $data = $request->get();
        if (empty($data['anli_id'])) {
            return json(['code' => __LINE__, 'msg' => '参数anli_id不对']);
        }
        return json(Anli::findOne($data['anli_id']));
    }

}