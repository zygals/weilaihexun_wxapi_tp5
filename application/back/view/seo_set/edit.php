{extend name='public:base' /}
{block name="title"}编辑seo优化{/block}

{block name="content"}
<style>
    .control-label {
        padding-right: 10px;
    }
</style>
<!--弹出添加用户窗口-->
<form class="form-horizontal" action="{:url('update')}" method="post">
    <input type="hidden" name="id" value="{$row_->id}">
    <div class="row">
        <div class="col-xs-8">
            <div class="text-center">
                <h4 class="modal-title" id="gridSystemModalLabel">编辑seo优化</h4>
            </div>
            <div class="">
                <div class="container-fluid">

                    <div class="form-group">
                        <label for="sKnot" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>导航名称：</label>
                        <div class="col-xs-8">
                            <select class=" form-control select-duiqi" name="nav_id">
                                <?php foreach ($list_nav as $k=>$row_nav){?>
                                    <option <?php echo $row_nav->id==$row_->getData('nav_id')?'selected':''?> value="{$row_nav->id}">{$row_nav->name}</option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>seo标题：</label>
                        <div class="col-xs-8 ">
                            <input type="text" class="form-control input-sm" name='title' value="{$row_->title}" >
                        </div>
                    </div>
                    <div class="form-group " id="values" style="display: block;">
                        <label for="sName" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>seo关键词：</label>
                        <div class="col-xs-8 ">
                            <textarea rows="4" cols="40" name="keywords">{$row_->keywords}</textarea>
                        </div>
                    </div>
                    <div class="form-group " id="values" style="display: block;">
                        <label for="sName" class="col-xs-3 control-label">seo描述：</label>
                        <div class="col-xs-8 ">
                            <textarea rows="5" cols="45"  name="description">{$row_->description}</textarea>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{:url('index')}">
            <button type="button" class="btn btn-xs btn-white" data-dismiss="modal">返回列表</button>
        </a>
        <button type="submit" class="btn btn-xs btn-green">保 存</button>
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
