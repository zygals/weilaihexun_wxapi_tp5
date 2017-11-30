<?php $list_friend = \app\common\model\Friend::getList(['type'=>1])?>
<div class="index_bottom">
    <div class="bottom_1200px">
        <div class="bottom_left">
            <div class="bottom_caidan">
                <dl>
                    <dt><a href="{:url('about/index')}">公司简介</a>|<a href="{:url('about/service')}">客户服务</a>|<a href="{:url('about/law')}">法律声明</a>|<a
                            href="{:url('channel/index')}">商务合作</a>|<a href="{:url('about/contact')}">联系我们</a>|<a
                            href="{:url('about/job')}">加入我们</a></dt>


                    <dd><span>友情链接：</span>
                        <?php foreach ($list_friend as $k=>$row_friend){?>
                        <li><a href='{$row_friend->url}' target='_blank'>{$row_friend->name}</a></li>
                        <?php }?>

                    </dd>
                </dl>
            </div>
            <div>
                <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                    document.write(unescape("%3Cspan id='cnzz_stat_icon_1261193868'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1261193868%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
            </div>
            <div class="bottom_banquan">
                <dl>
                    <dt>版权所有：北京未来和讯信息科技有限公司　京ICP备16058967号-1</dt>
                    <dd><img src="__STATIC__images/banquan_07.png" height="17"/><img
                            src="__STATIC__images/banquan_09.png" height="17"/><img
                            src="__STATIC__images/banquan_11.png" height="17"/></dd>
                </dl>
            </div>
        </div>
        <div class="bottom_right">
            <dl>
                <dt><img src="__STATIC__images/weixin_07.jpg" width="92" height="92"/></dt>
                <dd>扫一扫关注微信</dd>
            </dl>
            <dl>
                <dt><img src="__STATIC__images/weibo_07.jpg" width="92" height="92"/></dt>
                <dd>扫一扫关注微博</dd>
            </dl>
        </div>
    </div>
</div>
</body>
</html>