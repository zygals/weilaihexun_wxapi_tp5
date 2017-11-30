<script type="text/javascript" src="__STATIC__/js/koala.min.1.5.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css"/>
<style>
    a{color:inherit}
</style>
<div style=" border-top:1px solid #e1e1e1;"></div>

<div class="news_liest">

    <!-- 代码 开始 -->
    <div id="fsD1" class="focus">
        <div id="D1pic1" class="fPic">
            <?php foreach ($list_new_index as $row_) { ?>
                <div class="fcon" style="display: none;">
                    <a href="{:url('read')}?id={$row_->id}"><img src="__IMGURL__{$row_->img}" border='0' width='552'
                                                                 height='320' alt='{$row_->name}'></a>
                    <span class="shadow"><a href="{:url('read')}?id={$row_->id}">{$row_->name}</a></span>
                </div>
            <?php } ?>
        </div>
        <div class="fbg">
            <div class="D1fBt" id="D1fBt">
                <?php foreach ($list_new_index as $k => $row_) { ?>
                    <a href="javascript:void(0)" hidefocus="true" target="_self"
                       class="<?= $k == 0 ? 'current' : '' ?>"><i>1</i></a>
                <?php } ?>
            </div>
        </div>
        <span class="prev"></span>
        <span class="next"></span>
    </div>
    <script type="text/javascript">
        Qfast.add('widgets', {path: "__STATIC__/js/terminator2.2.min.js", type: "js", requires: ['fx']});
        Qfast(false, 'widgets', function () {
            K.tabs({
                id: 'fsD1',   //焦点图包裹id
                conId: "D1pic1",  //** 大图域包裹id
                tabId: "D1fBt",
                tabTn: "a",
                conCn: '.fcon', //** 大图域配置class
                auto: 1,   //自动播放 1或0
                effect: 'fade',   //效果配置
                eType: 'click', //** 鼠标事件
                pageBt: true,//是否有按钮切换页码
                bns: ['.prev', '.next'],//** 前后按钮配置class
                interval: 3000  //** 停顿时间
            })
        })
    </script>
    <!-- 代码 结束 -->

    <div id="Tab1">
        <div class="Menubox">
            <ul>
                <li id="one1" onClick="setTab('one',1,3)" class="hover">媒体报道</li>
                <li id="one2" onClick="setTab('one',2,3)">行业资讯</li><!--鼠标悬浮在按钮上切换到当前内容-->
                <li id="one3" onClick="setTab('one',3,3)">企业动态</li><!--鼠标在按钮上点击切换到当前内容-->

            </ul>
        </div>
        <div class="Contentbox">
            <div id="con_one_1">
                <ul>
                    <?php foreach ($list_new_1 as $k => $row_) { ?>
                        <li><a href="{:url('read')}?id={$row_->id}" target=""><span>{$row_->name}</span> <i>{$row_->create_time}</i></a>
                        </li>
                    <?php } ?>

                    <div style=" text-align:right; clear:both;"><a href="{:url('get_list')}?cate=1">更多>></a></div>
                </ul>

            </div>
            <div id="con_one_2" style="display:none">
                <ul>
                    <?php foreach ($list_new_2 as $k => $row_) { ?>
                        <li><a href="{:url('read')}?id={$row_->id}" target=""><span>{$row_->name}</span> <i>{$row_->create_time}</i></a>
                        </li>
                    <?php } ?>


                    <div style=" text-align:right; clear:both;"><a href="{:url('get_list')}?cate=2">更多>></a></div>
                </ul>
            </div>

            <div id="con_one_3" style="display:none">
                <ul>
                    <?php foreach ($list_new_3 as $k => $row_) { ?>
                        <li><a href="{:url('read')}?id={$row_->id}" target=""><span>{$row_->name}</span> <i>{$row_->create_time}</i></a>
                        </li>
                    <?php } ?>


                    <div style=" text-align:right; clear:both;"><a href="{:url('get_list')}?cate=3">更多>></a></div>
                </ul>
            </div>

        </div>
    </div>


</div>

<div class="newslist">
    <?php foreach ($list_new as $row_) { ?>
        <dl>
            <dt><a href="{:url('read')}?id={$row_->id}" target=""><img
                            src='__IMGURL__{$row_->img}' border='0' width='150' height='105'
                            alt='{$row_->name}'></a></dt>
            <dd><a href="{:url('read')}?id={$row_->id}" target="">{$row_->name}</a></dd>
            <dd>{$row_->charm}<a
                        href="{:url('read')}?id={$row_->id}" target=""
                        style=" font:14px/24px '微软雅黑'; color:#097ec6; padding-left: 20px; ">详情>></a></dd>
        </dl>
    <?php } ?>

</div>
<div class="clearfix" style="text-align: center;margin-bottom:20px;">
    {$page_str}
</div>
