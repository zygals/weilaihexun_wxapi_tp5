<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>未来和讯-国内领先的企业营销服务平台</title>
        <meta name="description"
              content="北京未来和讯信息科技有限公司专注于网络营销推广服务，业务涉及网站建设、APP开发、微信开发、网站托管、视频访谈、网络整合营销、新闻稿软文推广等。公司致力于为企业打造一体化网络营销服务。"/>
        <meta name="keywords"
              content="未来和讯,网管家,软文发布,企业品牌宣传,新闻发布,新闻营销,企业宣传片,微视频,视频推广,活动策划,营销活动,营销策划,市场营销活动,网站优化,网站推广,新媒体运营,APP运营,网站运营,网站品牌塑造"/>
        <meta name=“viewport” content=“width=device-width; initial-scale=1.0”>
        <link rel="stylesheet" href="__STATIC__/css/weilaihexun.css">
        <link type="text/css" rel="stylesheet" href="__STATIC__/css/slicebox.css">
        <script src="__STATIC__js/jquery.js"></script>
        <script type="text/javascript" src="__STATIC__/js/modernizr.custom.46884.js"></script>
        <script type="text/javascript" src="__STATIC__/js/jquery.slicebox.js"></script>
        <script src="__STATIC__/js/index.js"></script>
    </head>
<body>

{include file="layout/nav"}
{__CONTENT__}

<div class="index-footer">
    <div class="foot wrapper">
        <div class="left-foot">
            <ul class="company-info clearfix">
                <li><a href="{:url('about/index')}">公司简介</a></li>
                <li><a href="{:url('about/service')}">客户服务</a></li>
                <li><a href="{:url('about/law')}">法律声明</a></li>
                <li><a href="{:url('channel/index')}">商务合作</a></li>
                <li><a href="{:url('about/contact')}">联系我们</a></li>
                <li><a href="{:url('about/job')}">加入我们</a></li>
            </ul>
            <ul class="friend-link clearfix">
                <li>友情链接 :</li>
                <?php foreach ($list_friend as $k=>$row_friend){?>
                    <li><a href='{$row_friend->url}' target='_blank'>{$row_friend->name}</a></li>
                <?php }?>

                <li><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                        document.write(unescape("%3Cspan id='cnzz_stat_icon_1261193868'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1261193868%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
                </li>
            </ul>

            <p class="copyRight">版权所有：北京未来和讯信息科技有限公司　京ICP备16058967号-1</p>
            <div class="bottom-pic">
                <img src="__STATIC__/images/bt-pic1.png" alt="">
                <img src="__STATIC__/images/bt-pic2.png" alt="">
                <img src="__STATIC__/images/bt-pic3.png" alt="">
            </div>
        </div>
        <div class="right-foot">
            <div class="weibo">
                <img src="__STATIC__/images/weibo.png" alt="">
                <span>扫一扫关注微博</span>
            </div>
            <div class="wx">
                <img src="__STATIC__/images/wx.png" alt="">
                <span>扫一扫关注微信</span>
            </div>
        </div>
    </div>
</div>