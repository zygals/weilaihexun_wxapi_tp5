
<DIV class="yxzj_tuishou">
    <div class=""><a <?= \app\common\model\Ad::urlOpen($row_ad->url,$row_ad->new_window)?>><img src="__IMGURL__{$row_ad->img}" width="1200" height="275" /></a></div>

    <div class="about">
        <div class="about_left">
            <ul>
                <li><a href="{:url('about/index')}" class="<?= request()->action()=='index'?'hover':'';?>">关于未来</a></li>
                <li><a href="{:url('about/service')}" class="<?= request()->action()=='service'?'hover':'';?>">客户服务</a></li>
                <li><a href="{:url('about/law')}" class="<?= request()->action()=='law'?'hover':'';?>">法律声明</a></li>
                <li><a href="{:url('about/job')}" class="<?= request()->action()=='job'?'hover':'';?>">招贤纳士</a></li>
                <li><a href="{:url('about/contact')}" class="<?= request()->action()=='contact'?'hover':'';?>">联系我们</a></li>

            </ul>
        </div>