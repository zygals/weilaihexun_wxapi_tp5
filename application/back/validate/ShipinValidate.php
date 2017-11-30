<?php
namespace app\back\validate;

use think\Validate;

class ShipinValidate extends Validate{
	protected $rule = [
		'name'  =>  'require',
		'cate_id' =>  'require|number',
		'vid' =>  'require',
		'sort' =>  'number',
		'index_show' =>  'boolean',


	];
	protected $message  =   [
		'name.require' => '名称必须',
		'cate_id.require'   => '分类必须',
		'vid.require'   => 'vid必须',


	];
	protected $scene = [
		//'goodnew'  =>  ['name','cate_id'],

	];

}