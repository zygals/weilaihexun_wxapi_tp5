
<div class="slide-main" id="touchMain">
    <a class="prev" href="javascript:;" stat="prev1001"><img src="__STATIC__images/l-btn.png"/></a>
    <div class="slide-box" id="">

<?php foreach($list_ad as $k=>$row_ad){?>
        <div class="slide" id="">
            <a  <?= \app\common\model\Ad::urlOpen($row_ad->url,$row_ad->new_window);?>>
                <div ><img src="__IMGURL__{$row_ad->img}"/></div>
            </a>
        </div>
<?php }?>


    </div>
    <a class="next" href="javascript:;" stat="next1002"><img src="__STATIC__images/r-btn.png"/></a>
    <div class="item">
        <?php foreach($list_ad as $k=>$row_ad){?>
        <a class="<?php if($k==0){?>cur<?php }?>" href="javascript:;"></a>
        <?php }?>
    </div>
</div>


<!--标题-->
<div class="index_title">
    <dl>
        <dt>未来“三宝”</dt>
        <dd>Product Service</dd>
    </dl>
</div>
<!--标题-->

<div class="index_cp">
    <div class="index_cpxq">
        <a href="/yewu/yingxiao/">
            <dl class="bg1">
                <dt><b>推手全案营销专家</b><br/>
                    一站式营销服务<br/>
                    <i>为你掘金未来保驾护航</i>
                </dt>
                <dd>立即查看</dd>
            </dl>
        </a>
        <span><a href="/yewu/yingxiao/">推手全案营销专家</a></span>
    </div>

    <div class="index_cpxq">
        <a href="/yewu/tuoguan/">
            <dl class="bg2">
                <dt><b>推手金牌托管管家</b><br/>
                    你的幼苗<br/>
                    <i>我们总能为你悉心照料</i>
                </dt>
                <dd>立即查看</dd>
            </dl>
        </a>
        <span><a href="/yewu/tuoguan/">推手金牌托管管家</a></span>
    </div>

    <div class="index_cpxq">
        <a href="/yewu/qyy/">
            <dl class="bg3">
                <dt><b>轻应用联盟</b><br/>
                    小程序  公众号  微应用<br/>
                    轻应用商店
                    <br/>
                    <i>打造移动互联网生态闭环</i>
                </dt>
                <dd>立即查看</dd>
            </dl>
        </a>
        <span><a href="/yewu/qyy/">轻应用联盟</a></span>
    </div>

</div>


<!--标题-->
<div class="index_title">
    <dl>
        <dt>一分钟了解更多解决方案</dt>
        <dd>Solution</dd>
    </dl>
</div>
<!--标题-->

<div class="service">
    <UL class="serQuery" id="service">
        <li class="serLi">
            <div class="serWrap fanganbg1">
                <a href="#">
                    <div class="serIco serIco1"></div>
                    <div class="serIntro">网站建设</div>
                </a>
            </div>
            <div class="ser_bg"><IMG src="__STATIC__images/bg_yy.png"></div>
        </li>

        <li class="serLi">
            <div class="serWrap fanganbg2">
                <a href="#">
                    <div class="serIco serIco2"></div>
                    <div class="serIntro">APP开发</div>
                </a>
            </div>
            <div class="ser_bg"><IMG src="__STATIC__images/bg_yy.png"></div>
        </li>

        <li class="serLi">
            <div class="serWrap  fanganbg3">
                <a href="#">
                    <div class="serIco serIco3"></div>
                    <div class="serIntro">微信开发</div>
                </a>
            </div>
            <div class="ser_bg"><IMG src="__STATIC__images/bg_yy.png"></div>
        </li>


        <li class="serLi">
            <div class="serWrap fanganbg4">
                <a href="#">
                    <div class="serIco serIco4"></div>
                    <div class="serIntro">商城开发</div>
                </a>
            </div>
            <div class="ser_bg"><IMG src="__STATIC__images/bg_yy.png"></div>
        </li>

        <li class="serLi">
            <div class="serWrap fanganbg3">
                <a href="#">
                    <div class="serIco serIco5"></div>
                    <div class="serIntro">新闻软文</div>
                </a>
            </div>
            <div class="ser_bg"><IMG src="__STATIC__images/bg_yy.png"></div>
        </li>

        <li class="serLi">
            <div class="serWrap fanganbg1">
                <a href="#">
                    <div class="serIco serIco6"></div>
                    <div class="serIntro">活动策划</div>
                </a>
            </div>
            <div class="ser_bg"><IMG src="__STATIC__images/bg_yy.png"></div>
        </li>

        <li class="serLi">
            <div class="serWrap fanganbg4">
                <a href="#">
                    <div class="serIco serIco7"></div>
                    <div class="serIntro">新媒体代运营</div>
                </a>
            </div>
            <div class="ser_bg"><IMG src="__STATIC__images/bg_yy.png"></div>
        </li>

        <li class="serLi">
            <div class="serWrap fanganbg2">
                <a href="#">
                    <div class="serIco serIco8"></div>
                    <div class="serIntro">品牌战略发布会</div>
                </a>
            </div>
            <div class="ser_bg"><IMG src="__STATIC__images/bg_yy.png"></div>
        </li>

    </UL>

</div>

<!--container-->

<!--标题-->
<div class="index_title">
    <dl>
        <dt>我们服务过</dt>
        <dd>Service</dd>
    </dl>
</div>
<!--标题-->

<a name="anli_index"></a>
<div class="index_anli">
    <div class="index_anli_tab">
        <ul>
        <?php foreach($list_cate_anli as $k=>$row_cate){?>
            <a href="{:url('index/index')}?cate_anli_id={$row_cate->id}#anli_index">
                <li class="">{$row_cate->name}</li>
            </a>
            <?php }?>
        </ul>
    </div>
    <DIV class="case_con">
        <UL class="case_conul">
<?php foreach($list_anli as $k=>$row_anli){?>
            <LI>
                <DIV class="plugthumb">
                    <DIV class="tp"><A href="{:url('anli/read')}?anli_id={$row_anli->id}">
                            <FIGURE class="effect-bubba"><img src='__IMGURL__{$row_anli->img}' border='0'
                                                              width='288' height='240' alt='{$row_anli->name}'>
                                <FIGCAPTION>
                                    <P><IMG src="__STATIC__images/ico6.png"></P></FIGCAPTION>
                            </FIGURE>
                        </A></DIV>
                    <DIV class="bm">
                        <dl>
                            <dt>名称：<a href="{:url('anli/read')}?anli_id={$row_anli->id}" target="">{$row_anli->name}</a></dt>
                            <dd><span>类型：</span><a href="{:url('anli/index')}?cate_anli_id={$row_anli->cate_anli_id}">{$row_anli->cate_name}</a></dd>
                            <dd><span>功能：</span>
                                <?php foreach($list_func as $k2=>$row_func){?>
<?php if(in_array($row_func->id,$row_anli->func_ids)){?>
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

    </DIV>

</div>


<!--标题-->
<div class="index_title">
    <dl>
        <dt>为什么选择未来和讯</dt>
        <dd>Why Choice</dd>
    </dl>
</div>
<!--标题-->
<div class="index_xuanze">
    <dl class="left" style="margin-right:430px;">
        <dt>热爱</dt>
        <dd>为这个行业而诞生，以我们的热爱 ，懂你的热爱</dd>
    </dl>
    <dl class="right">
        <dt>新突破</dt>
        <dd>强大的技术团队，总能带来产品功能新突破</dd>
    </dl>
    <dl class="left" style="margin-right:580px; width:310px;margin-bottom:7px;">
        <dt>匠心淬炼</dt>
        <dd>十年磨一剑，开创革命性的电商运营模式</dd>
    </dl>
    <dl class="right" style="width:310px;">
        <dt>天生偏执</dt>
        <dd>完善的服务流程，每一项工作都力求完美</dd>
    </dl>
    <dl class="left" style="margin-right:430px; ">
        <dt>专业坚守</dt>
        <dd>准确把握行业脉搏，始终坚守客户利益</dd>
    </dl>
    <dl class="right">
        <dt>就是与众不同</dt>
        <dd>有细节有策略可执行，运营就是与众不同</dd>
    </dl>
</div>


<div class="hezuo">
    <!--标题-->
    <div class="index_title">
        <dl>
            <dt>我们的战略合作</dt>
            <dd>Cooperation</dd>
        </dl>
    </div>
    <!--标题-->

    <div id=featureContainer>
        <div id=feature>
            <div id=block>

                <div id=botton-scroll>
                    <UL class=featureUL>
<?php foreach ($list_friend_hezuo as $k=>$row_friend){?>
                        <li class=featureBox>
                            <div class=box><img src='{$row_friend->logo}' border='0' width='150'
                                                height='100' alt='{$row_friend->name}'></div>
                        </li>

<?php }?>
                    </UL>
                </div>

            </div>
            <A class=prev href="javascript:void();">Previous</A>
            <a class=next href="javascript:void();">Next</a>
        </div>
    </div>
</div>
<div class="right-fixed">
    <span href="" class="close-a"></span>
    <div class="group-box" style="margin-top:20px" >
<?php foreach ($qqs as $k=>$qq){?>
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?= $qq?>&site=qq&menu=yes" class="kf-qq mar" style="margin-bottom:14px"><img src="__STATIC__images/qq-kf<?= ++$k;?>.png"><span></span></a>
<?php }?>


    </div>
    <a target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=3cb4bb2d4914086c8e6f8ee26d2773432baf80c73e7ec0adeac137b852619979" class="kf-qq mar">
        <img border="0" src="__STATIC__images/group.png" alt="轻应用代理交流群" title="轻应用代理交流群"> <span>代理交流群</span>
    </a>
    <p class="phone"><span class="icon"></span>010-8639-9210-811</p>
    <a href="" class="return-top"><span class="icon"></span>返回顶部</a>
</div>
<SCRIPT src="__STATIC__/js/lazyload.js" type="text/javascript"></SCRIPT>
<SCRIPT>
    $(function () {

        $(".list-pic img").lazyload({
            placeholder: "img/re.gif",
            effect: "fadeIn"
        });

        new WOW().init();

        $(window).scroll(function () {
            $t = $(window).scrollTop();

            if ($t > 50) {
                $('.header').addClass('header-fix');
            }
            else {

                $('.header').removeClass('header-fix');
            }
        });

    });

    $('.close-a').click(function () {
        $('.right-fixed').css('display','none');
    });
    $('.return-top').click(function (e) {
        e.preventDefault();
        $(document.body).animate({scrollTop: 0}, 300);
    });

</SCRIPT>