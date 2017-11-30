<div style=" border-top:1px solid #e1e1e1;"></div>
<div class="news_zhengwen">
    <div class="news_mianbaoxian">您的位置：<a href='{:url("index/index")}'>未来和讯</a> > <a href='{:url("news/index")}'>资讯中心</a> > <a href='{:url("news/chuangke")}'>运营客堂</a> > <a href='{:url("news/chuangke")}?cate_id='{$row_->cate_id}>{$row_->cate_name}</a>  &gt; {$row_->name}</div>
</div>

<div class="videoplayer_list">
    <div class="videoplayer_title">{$row_->name}</div>
    <div class="wGb">

        <div class="IDvideoBoxMian" id="mod_player"></div>
        <script type="text/javascript" src="http://imgcache.qq.com/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script>
        <script>
            var voUrl='{$row_->vid}';
            voUrl=voUrl.match(/[A-z0-9]+(?=&auto)/g)?voUrl.match(/[A-z0-9]+(?=&auto)/g)[0]:voUrl;
            var video = new tvp.VideoInfo();
            video.setVid(voUrl);
            var player =new tvp.Player();
            player.create({
                width:'100%',
                height:'100%',
                video:video,
                modId:"mod_player",
                autoplay:true,
                AppBanner: true
            });
        </script>
        <div class="IDvideoBoxList" id="scrollbar1">
            <h3>相关推荐</h3>
            <div class="IDscrollTop viewport">
                <ul class="picListBox overview">
                   <?php foreach($list_comment as $row_){?>
                    <li><a href="{:url('read_shipin')}?id={$row_->id}">
                            <div><img src='__IMGURL__{$row_->img}' border='0' width='200' height='110' alt='没有图片'><span>{$row_->create_time}</span></div>
                            <p><span>{$row_->name}</span><b><i></i>浏览量：{$row_->click}</b></p>
                        </a></li><?php }?>

                </ul>
            </div>
            <!-- 滚动条 -->
            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
        </div>

    </div>
    <script type="text/javascript" src="/templets/weilaihexun/js/jquery.tinyscrollbar.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#scrollbar1').tinyscrollbar();
            $('.IDvideoBoxList .thumb').mousedown(function(e){
                $(this).attr('unselectable','on').attr("onselectstart","return false;");
            }).mouseleave(function(e){
                $(this).removeAttr('unselectable').removeAttr("onselectstart");
            });
        })
    </script>


    <div class="bdsharebuttonbox" style="width:1170px; clear:both; margin:0 auto; padding:18px 0;"><span style="float:left; color:#fff; font:14px/20px '微软雅黑'; padding-top:3px;">分享到：</span><i style="float:left; margin-right:10px;"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></i></div>
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

</div>

<div class="video_jieshao">
    <dl>
        <dt><span>视频介绍</span></dt>
        <dd>
{$row_->name}
        </dd>
    </dl>
</div>
