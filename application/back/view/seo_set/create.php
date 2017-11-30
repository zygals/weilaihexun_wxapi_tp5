{extend name='public:base' /}
{block name="title"}添加seo优化{/block}
{block name="content"}
<style>
    .control-label{
        padding-right:10px;
    }
</style>
	<!--弹出添加用户窗口--><form class="form-horizontal" action="{:url('save')}" method="post" enctype="multipart/form-data" >
		<div class="row" >
			<div class="col-xs-8">
				<div class="text-center">
					<!---->
					<h4 class="modal-title" id="gridSystemModalLabel">添加seo优化</h4>
				</div>
				<div class="">
					<div class="container-fluid">

                        <div class="form-group">
                            <label for="sKnot" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>导航名称：</label>
                            <div class="col-xs-8">
                                <select class=" form-control select-duiqi" name="nav_id">
                                    <?php foreach ($list_nav as $k=>$category){?>
                                        <option value="{$category->id}">{$category->name}</option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>seo标题：</label>
                            <div class="col-xs-8 ">
                                <input type="text" class="form-control input-sm" name='title' value="" >
                            </div>
                        </div>
                        <div class="form-group " id="values" style="display: block;">
                            <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>seo关键词：</label>
                            <div class="col-xs-8 ">
                                <textarea rows="4" cols="40" name="keywords"></textarea><br>
                                <span style="color:red">多个词请用英文逗号隔开</span>
                            </div>
                        </div>
                        <div class="form-group " id="values" style="display: block;">
                            <label for="sName" class="col-xs-3 control-label">seo描述：</label>
                            <div class="col-xs-8 ">
                                <textarea rows="5" cols="45"  name="description"></textarea><br>
<!--                                <span style="color:red">请用英文逗号隔开</span>-->
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
                title: {
                    validators:
                        {
                            notEmpty: {
                                message: '不能为空'
                            }
                        }

                },
                keywords: {
                    validators: {
                        notEmpty: {
                            message: '不能为空'
                        }


                    }
                },
        /*        description: {
                    validators: {
                        notEmpty: {
                            message: '不能为空'
                        }


                    }
                },*/
                nav_id: {
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
