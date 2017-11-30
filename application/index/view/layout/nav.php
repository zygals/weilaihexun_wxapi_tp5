<?php $navs = \app\common\model\Base::getNavs();?>
<div class="header" id="head">
    <div class="navi_body">
        <div style="width:1200px; margin:0 auto;">
            <div class="navi_logo"><a href="{:url('index/index')}" class="logo"><img src="__STATIC__images/logo_03.png"
                                                                 alt="未来和讯" title="未来和讯"> </a></div>
            <div class="navi_head">
                <div>
<?php foreach($navs as $k=>$nav){?>
				       <span>
						<p class="navi_title"><a href="{:url($nav['link'])}" style="<?= strtolower(request()->controller())==$nav['controller']?'color:#097ec6':''?>">{$nav['name']}</a></p>
                           <?php foreach($nav['childs'] as $nav2){?>
						<p ><a  <?php if(empty($nav2['out'])){?>href="{:url($nav2['link'],$nav2['param'])}"<?php }else{?>href="{$nav2['link']}" target="_blank" <?php }?>>{$nav2['name']}</a></p>
<?php }?>
					</span>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</div>
<style>

</style>
<!--导航上浮-->
<script src="__STATIC__js/ch.js" type="text/javascript" charset="utf-8"></script>
