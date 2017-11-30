<?php
namespace app\back\validate;

use think\Validate;

class RecruitValidate extends Validate{
	protected $rule = [
		'name'  =>  'require',
		'department' =>  'require',
		//'num' =>  'number',
		'duty' =>  'require',

	];
	protected $message  =   [
		'name.require' => '名称必须',
		'department.require'   => '部门必须',
		//'num.require'   => '人数必须',
		'duty.require'   => '职责必须',
	];
	protected $scene = [
		//'goodnew'  =>  ['name','cate_id'],

	];

}