<div style=" border-top:1px solid #e1e1e1;"></div>

<div class="news_zhengwen">
    <div class="news_mianbaoxian">您的位置：<a href='{:url("index/index")}'>未来和讯</a> > <a href='{:url("anli/index")}'>品牌案例</a> > <a href="{:url('anli/index')}?cate_anli_id={$row_anli->cate_anli_id}">{$row_anli->cate_name}</a> &gt; {$row_anli->name}</div>

    <!--标题-->
    <div class="news_title">
        <dl>
            <dt>{$row_anli->name}</dt>
        </dl>
    </div>
    <!--标题-->


    <div class="anli_text">
        {$row_anli->cont}
    <br />
</div>
<div class="anli_anniu"><a href="javascript:window.history.back()">返回</a></div>
