{extend name='public:base' /}
{block name="title"}{$title}{/block}
{block name="content"}
<style>
    .control-label{
        padding-right:10px;
    }
</style>
<script>
    KindEditor.ready(function (K) {
        // var editor = K.create('#desc_textarea');
        var editor = K.create('textarea[name="cont"]',{
            themeType: 'simple',
            resizeType: 1,
            uploadJson: '__EDITOR__/php/upload_json.php',
            fileManagerJson: '__EDITOR__/php/file_manager_json.php',
            allowFileManager: true,
            //下面这行代码就是关键的所在，当失去焦点时执行 this.sync();
            afterBlur: function(){this.sync();}
        });

    });

</script>
	<!--弹出添加用户窗口-->
<form id="addForm" class="form-horizontal" action="{:url($act)}" method="post" enctype="multipart/form-data" >
    <?php if($act=='update'){?>
        <input type="hidden" name="id" value="{$row_->id}">
        <input type="hidden" name="referer" value="{$referer}">
    <?php }?>

		<div class="row" >
			<div class="col-xs-8">
				<div class="text-center">
					<!---->
					<h4 class="modal-title" id="gridSystemModalLabel">{$title}</h4>
				</div>
				<div class="">
					<div class="container-fluid">

                        <div class="form-group">
                            <label for="sKnot" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>分类：</label>
                            <div class="col-xs-8">
                                <select class=" form-control select-duiqi" name="cate_anli_id" id="sel_cate"><?php if($act=='save'){?>
                                   <?php foreach($list_cate as $row_cate){?>
                                    <option value="{$row_cate->id}" >{$row_cate->name}</option>
                                    <?php }?>
<?php }else{?>
                                        <?php foreach($list_cate as $row_cate){?>
                                            <option <?php echo $row_->cate_anli_id==$row_cate->id?'selected':''?> value="{$row_cate->id}" >{$row_cate->name}</option>
                                        <?php }?>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
							<div class="form-group ">
                                <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>名称：</label>
								<div class="col-xs-8 ">
									<input type="text" class="form-control input-sm duiqi" name='name' value="{$row_->name|default=''}" id="" placeholder="">
								</div>
							</div>
                        <?php if($act=='update'){?>
                            <div class="form-group" id="diliver_fee_wrap" style=";">
                                <label for="situation" class="col-xs-3 control-label">排序：</label>
                                <div class="col-xs-8">
                                    <label class="control-label">
                                        <input type="number" name="sort" class="form-control input-sm duiqi" id=""
                                               value="{$row_->sort}"></label> &nbsp;

                                </div>
                            </div>
                        <?php }?>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>功能：</label>
                            <div class="col-xs-8 ">
                                <?php if($act=='save'){?>
<?php if(count($list_func)>0){?>
<?php foreach($list_func as $row_func){?>
                                <label> <input type="checkbox" class="" name='func_ids[]' value="{$row_func->id}" id="" placeholder="">{$row_func->name}</label>
<?php }?><?php }else{?>
    <label> <a href="{:url('func/create')}">先完善案例功能</a></label>

                                <?php }?>
                                <?php }else{?>
                                    <?php foreach($list_func as $row_func){?>
                                        <label> <input type="checkbox" class="" name='func_ids[]' value="{$row_func->id}" <?= in_array($row_func->id,$row_->func_ids)?'checked':'';?> placeholder="">{$row_func->name}</label>
                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sOrd" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>小图：</label>
                            <div class="col-xs-4 ">
<?php if($act=='update'){?>
    <img src="__IMGURL__{$row_->img}" alt="没有上传图片" width="188"/>
                                <?php }?>
                                <input type="file" title='' class="form-control  duiqi" id="sOrd" name="img" placeholder=""><span style="color:red">尺寸要求（636*580），大小不超过<?php echo floor(config('upload_size')/1024/1024);?>M。</span>

                            </div>

                        </div>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>内容：</label>
                            <div class="col-xs-8 ">
                                <textarea name="cont" id="desc_textarea" style="width:800px;height:400px;">{$row_->cont|default=''}</textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label">关键字：</label>
                            <div class="col-xs-8 ">
                                <input type="text" class="form-control input-sm " name='keywords' value="{$row_->keywords|default=''}" id="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label">描述：</label>
                            <div class="col-xs-8 ">
                                <textarea name="description" id="" cols="50" rows="5">{$row_->description|default=''}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="situation" class="col-xs-3 control-label">首页推荐：</label>
                            <?php if($act=='update'){?>
                            <div class="col-xs-8">
                                <label class="control-label" >
                                    <input type="radio" name="index_show" class="index_show yes" value="1" <?= $row_->index_show=='是'?'checked':'';?> >是</label> &nbsp;
                                <label class="control-label">
                                    <input type="radio" name="index_show" class="index_show no" value="0" <?= $row_->index_show=='否'?'checked':''?>> 否</label>
                                <?php }else{?>
                                    <label class="control-label" >
                                        <input type="radio" name="index_show" class="index_show yes" value="1" >是</label> &nbsp;
                                    <label class="control-label">
                                        <input type="radio" name="index_show" class="index_show no" value="0" checked> 否</label>
                                <?php }?>
                            </div>

                        </div>

                    </div>
				<div class="text-center">
                    <a href="javascript:history.back()">
                        <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">返回</button>
                    </a>
					<button type="submit" class="btn btn-xs btn-green">保 存</button>
				</div>
			</div>
		</div>
</form>

<script>
      $(function () {

        $('form').bootstrapValidator({
            fields: {
                name: {
                    validators:
                        {
                            notEmpty: {
                                message: '名称不能为空'
                            }
                        }

                },
                cate_anli_id: {
                    validators:
                        {
                            notEmpty: {
                                message: '不能为空'
                            }
                        }

                },
<?php if($act=='save'){?>
                img: {
                    validators: {
                        notEmpty: {
                            message: '不能为空'
                        }
                    }
                },
                <?php }?>
                cont: {
                    validators: {
                        notEmpty: {
                            message: '不能为空'
                        }
                    }
                },

            }
        });

    });

</script>

{/block}
