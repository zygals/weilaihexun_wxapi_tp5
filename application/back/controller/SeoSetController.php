<?php

namespace app\back\controller;

use app\common\model\SeoSet;
use app\common\model\Setting;
use think\Request;


class SeoSetController extends BaseController {
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request) {
       // $data = $request->param();
        $m_ = new SeoSet();
        $list_ = $m_->getList();
        return $this->fetch('index', ['list_' => $list_]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create() {
        $list_nav = SeoSet::getNavs();
        return $this->fetch('',['list_nav'=>$list_nav]);

    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request) {
       // dump($request->param());exit;
        $data = $request->param();
        $res = $this->validate($data,'SeoSetValidate');
        if ($res !== true) {
            $this->error($res);
        }
        $SeoSet = new SeoSet();
        $SeoSet->save($data);
        $this->success('添加成功', 'index', '', 1);
    }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit(Request $request) {
//       return 23;
        $data = $request->param();
        $row_ = $this->findById($data['id'],new SeoSet());

        //$row_= (new SeoSet)->where(['id'=>$data['id']])->getData();
        $list_nav = SeoSet::getNavs();
       // dump($row_->getData('nav_id'));
        return $this->fetch('',['row_'=>$row_,'list_nav'=>$list_nav]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update(Request $request) {
        $data = $request->param();
       // dump($data);exit;
        $res = $this->validate($data,'SeoSetValidate');
        if ($res !== true) {
            $this->error($res);
        }

        if($this->saveById($data['id'],new SeoSet(),$data)){

            $this->success('编辑成功', 'index' ,'', 1);
        }else{
            $this->error('编辑失败', 'index', '', 3);
        }
    }

    /**
     * soft-delete 指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete(Request $request) {
        $data = $request->param();
        if( $this->deleteById($data['id'],new SeoSet())){
            $this->success('删除成功', 'index', '', 1);
        }else{
            $this->error('删除失败', 'index', '', 3);
        }
    }


}
