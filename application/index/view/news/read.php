<div style=" border-top:1px solid #e1e1e1;"></div>

<div class="news_zhengwen">
    <div class="news_mianbaoxian">您的位置：<a href='{:url("index/index")}'>未来和讯</a> > <a
                href='{:url("news/index")}'>资讯中心</a> > <a
                href="{:url('news/index')}?cate={$row_news->getCateId($row_news->cate)}">{$row_news->cate}</a> &gt;
        {$row_news->name}
    </div>


    <!--标题-->
    <div class="news_title">
        <dl>
            <dt>{$row_news->name}</dt>
        </dl>
    </div>
    <!--标题-->


    <div class="anli_text">
        {$row_news->cont}
        <br/>
    </div>
    <div class="anli_anniu"><a href="javascript:window.history.back()">返回</a></div>
    <script>
    /*    $.ajax({
            url: "{:url('inc_click')}",
            data:{'id':{$row_news->id}},
            async: true,
            success: function (res) {
               alert(res.msg);
            }
        });*/
    </script>