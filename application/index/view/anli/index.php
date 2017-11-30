{include file="layout/anli_ad"}

<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css"/>
<style>
    a{color:inherit}
</style>
<div class="zxck_tab1">
    <ul>
        <a href="{:url('index')}?cate_anli_id=0">
            <li class="<?php if(request()->param('cate_anli_id')==0){?>hover<?php }?>">全部案例</li>
        </a>
        <?php foreach ($list_cate_anli as $k => $row_cate) { ?>

            <a href="{:url('index')}?cate_anli_id={$row_cate->id}">
                <li class="<?php if($row_cate->id==request()->param('cate_anli_id')){?>hover<?php }?>">{$row_cate->name}</li>
            </a>
        <?php } ?>
    </ul>
</div>

<DIV class="case_con">
    <UL class="case_conul">
<?php foreach($list_anli as $row_){?>
    <LI>
        <DIV class="plugthumb">
            <DIV class="tp"><A href="{:url('anli/read')}?anli_id={$row_->id}">
                    <FIGURE class="effect-bubba"><img src="__IMGURL__{$row_->img}" border='0'
                                                      width='288' height='240' alt='{$row_->name}'>
                        <FIGCAPTION>
                            <P><IMG src="__STATIC__/images/ico6.png"></P></FIGCAPTION>
                    </FIGURE>
                </A></DIV>
            <DIV class="bm">
                <dl>
                    <dt>名称：<a href="{:url('anli/read')}?anli_id={$row_->id}">{$row_->name}</a></dt>
                    <dd><span>类型：</span><a href='{:url("index")}?cate_anli_id={$row_->cate_anli_id}'>{$row_->cate_name}</a></dd>
                    <dd><span>功能：</span>
                        <?php foreach($list_func as $k2=>$row_func){?>
                            <?php if(in_array($row_func->id,$row_->func_ids)){?>
                                {$row_func->name}
                            <?php }?>
                        <?php }?>

                    </dd>
                </dl>
            </DIV>
        </DIV>
    </LI>
<?php }?>
    </UL>
</DIV>
<div class="" style="text-align: center;margin-bottom:20px;clear:both;">
    {$page_str}
</div>

