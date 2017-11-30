<div style=" border-top:1px solid #e1e1e1;"></div>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css"/>
<style>
    a{color:inherit}
</style>
<div class="news_mianbaoxian">您的位置：<a href='{:url("index/index")}'>未来和讯</a> > <a href='{:url("index")}'>资讯中心</a> &gt; {$list_new[0]->cate}
</div>

<div class="newslist">
<?php foreach($list_new as $row_){?>
    <dl>
        <dt><a href="{:url('read')}?id={$row_->id}" ><img src='__IMGURL__{$row_->img}'
                                                                          border='0' width='150' height='105'
                                                                          alt='{$row_->name}'></a></dt>
        <dd><a href="{:url('read')}?id={$row_->id}" >{$row_->name}</a></dd>
        <dd>{$row_->charm}<a
                    href="{:url('read')}?id={$row_->id}" target=""
                    style=" font:14px/24px '微软雅黑'; color:#097ec6;    padding-left: 20px; ">详情>></a></dd>
    </dl>

<?php }?>

</div>
<div class="clearfix" style="text-align: center;margin-bottom:20px;">
    {$page_str}
</div>
