

<!--banner大图-->
<div class="slide-wrap">
    <ul id="sb-slider" class="sb-slider">
<!--        <li>-->
<!--            <a href=""><img src="__STATIC__images/banner1.jpg" alt=""></a>-->
<!--            <div class="z-box">-->
<!--                <h2>轻应用联盟</h2>-->
<!--                <h4><span>轻轻的</span>改变世界</h4>-->
<!--                <img src="__STATIC__images/z-box.png" alt="">-->
<!--            </div>-->
<!--        </li>-->
        <?php foreach($list_ad as $row_){?>

            <li>
            <a <?= \app\common\model\Ad::urlOpen($row_->url,$row_->new_window)?>>
                <img src="__IMGURL__{$row_->img}" alt="" class="">
            </a>
        </li>

        <?php }?>
    </ul>
    <div>
    </div>
    <!--<div class="inner-indicator"></div>-->
    <span class="slider-ctrl prev" onclick="$slicebox.previous();">&lt;</span>
    <span class="slider-ctrl next" onclick="$slicebox.next();">&gt;</span>
</div>
<script type="text/javascript">
    var $slicebox; $(function() {
        $slicebox = $('#sb-slider').slicebox({
            interval:3500,
            orientation : "r", //表示幻灯片的切换方向，可取 (v)垂直方向, (h)水平方向 or (r)随机方向
            perspective : 800, //透视点距离，可以通过改变其值查看效果
            cuboidsCount : 10, //幻灯片横向或纵向被切割的块数，切割的每一块将会以3D的形式切换
            cuboidsRandom : true, //是否随机 cuboidsCount 参数的值
            maxCuboidsCount : 10, //设置一个值用来规定最大的 cuboidsCount 值
            colorHiddenSides : "#333", //隐藏的幻灯片的颜色
            sequentialFactor : 150, //幻灯片切换时间（毫秒数）
            speed : 600, //每一块3D立方体的速度
            autoplay : true, //是否自动开始切换
            onBeforeChange : function(position) { return false; },
            onAfterChange : function(position) { return false; }
        });
    });
</script>
<!--优势-->
<div class="index-super wrapper">
    <div class="index-title">
        <h4>轻应用联盟优势</h4>
        <p>Light  application  alliance  advantage</p>
    </div>
    <div class="super-wrap">
        <div class="super-col">
            <img src="__STATIC__images/nav-icon1.png" alt="">
            <h4>轻量</h4>
            <p>无需下载安装,用完即走,不占用手机内存</p>
        </div>
        <div class="super-col">
            <img src="__STATIC__images/nav-icon2.png" alt="">
            <h4>多元化场景</h4>
            <p>“场景”无处不在，多元化场景，引爆不同的消费市场。</p>
        </div>
        <div class="super-col">
            <img src="__STATIC__images/nav-icon3.png" alt="">
            <h4>亿级精准海量客户</h4>
            <p>优质资源、海量用户、资源位多、效果精准</p>
        </div>
        <div class="super-col">
            <img src="__STATIC__images/nav-icon4.png" alt="">
            <h4>微端营销生态闭环</h4>
            <p>营销工具，展示平台、推广渠道，闭环共享</p>
        </div>
        <div class="super-col">
            <img src="__STATIC__images/nav-icon5.png" alt="">
            <h4>数据挖掘工具</h4>
            <p>可视化数据分析,提升工作效率.随时随地获取分析结果
            </p>
        </div>
        <div class="super-col">
            <img src="__STATIC__images/nav-icon6.png" alt="">
            <h4>LBS精准引流</h4>
            <p>精准定位信息推送至用户，实现真正的精准营销</p>
        </div>
    </div>
</div>

<!--轻商圈-->
<div class="index-business">
    <div class="wrapper">
        <div class="index-title white-title">
            <h4>打造移动互联网“轻商圈”</h4>
            <p>Create mobile internet light shopping district"</p>
        </div>
        <div class="business-wrap">
            <ul class="bus-item">
                <li>
                    <img src="__STATIC__images/bus1.png" alt="">
                    <div class="mask">
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon1.png" alt="">
                            <h5>电商系统</h5>
                            <p>旺铺解决方案</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon2.png" alt="">
                            <h5>餐饮系统</h5>
                            <p>单店订餐、多店订餐</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon3.png" alt="">
                            <h5>资讯展示</h5>
                            <p>多维信息、图文展示</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon4.png" alt="">
                            <h5>专题互动</h5>
                            <p>用户交互、在线交流</p>
                        </div>
                    </div>
                    <h4>小程序</h4>
                </li>
                <li>
                    <div class="sport">
                        <img src="__STATIC__images/bus2.png" alt="">
                    </div>
                    <div class="mask">
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon5.png" alt="">
                            <h5>微场景</h5>
                            <p>多场景传递营销信息</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon6.png" alt="">
                            <h5>微自媒</h5>
                            <p>打造微端自媒体</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon7.png" alt="">
                            <h5>微商店</h5>
                            <p>基于微信的店家管理系统</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon8.png" alt="">
                            <h5>微分销</h5>
                            <p>全新分销加盟、三级返佣</p>
                        </div>
                    </div>
                    <h4>公众号</h4>
                </li>
                <li>
                    <img src="__STATIC__images/bus3.png" alt="">
                    <div class="mask">
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon9.png" alt="">
                            <h5>招聘主题</h5>
                            <p>让招聘不再无味</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon10.png" alt="">
                            <h5>会议主题</h5>
                            <p>开启专属的网络发布会</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon11.png" alt="">
                            <h5>活动主题</h5>
                            <p>让活动精彩纷呈</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon12.png" alt="">
                            <h5>联盟主题</h5>
                            <p>打造自己的产品联盟</p>
                        </div>
                    </div>
                    <h4>微应用</h4>
                </li>
                <li>
                    <img src="__STATIC__images/bus4.png" alt="">
                    <div class="mask">
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon13.png" alt="">
                            <h5>小程序入口</h5>
                            <p>品质级小程序推广渠道</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon14.png" alt="">
                            <h5>轻应用排名</h5>
                            <p>轻应用齐展示、一举多得</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon15.png" alt="">
                            <h5>轻应用测评</h5>
                            <p>口碑见分晓</p>
                        </div>
                        <div class="mask-item">
                            <img src="__STATIC__images/bus-icon16.png" alt="">
                            <h5>轻应用展现</h5>
                            <p>让自己成为明星</p>
                        </div>
                    </div>
                    <h4>轻应用商店</h4>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--轻应用联盟生态-->
<div class="index-ecology wrapper">
    <div class="index-title">
        <h4>轻应用联盟实现互联网生态互补</h4>
        <p>Light application alliance to achieve complementary Internet Ecology</p>
    </div>
    <div class="eco-cont">
        <div class="left-cont">
            <p>
                打破单个互联网产品难搜索的通病，实现互联网新生态环境<br>
                搭建人与服务的移动互联网新便捷通道<br>
                无需安装卸载，用完即走，无痕，无门槛，低成本<br>
                多元化场景、亿级精准海量客户<br>
            </p>
        </div>
        <img src="__STATIC__images/weilaihexun.png" alt="轻应用联盟" class="right-cont">
    </div>
</div>

<!--三维数据库-->
<div class="index-charts">
    <div class="index-title white-title">
        <h4>轻应用联盟与数十家权威新媒体强强联手共同构造三维数据库</h4>
        <p>Light application alliance and dozens of authoritative new media strong cooperation Co constructed 3D database</p>
        <img src="__STATIC__images/map.png" alt="轻应用联盟">
    </div>
</div>

<!--开发流程-->
<div class="index-dev wrapper">
    <div class="index-title">
        <h4>开发流程</h4>
        <p>Development process</p>
    </div>

    <div class="dev-flow clearfix">
        <ul class="top-flow">
            <li>
                <img src="__STATIC__images/line1.png" alt="">
                <span>需求沟通</span>
            </li>
            <li>
                <img src="__STATIC__images/line2.png" alt="">
                <span>视觉创意</span>
            </li>
            <li>
                <img src="__STATIC__images/line3.png" alt="">
                <span>技术开发</span>
            </li>
        </ul>
        <img src="__STATIC__images/line.jpg" alt="" class="flow-pic">
        <ul class="bottom-flow">
            <li>
                <img src="__STATIC__images/line4.png" alt="">
                <span>账号注册</span>
            </li>
            <li>
                <img src="__STATIC__images/line5.png" alt="">
                <span>交互设计</span>
            </li>
            <li>
                <img src="__STATIC__images/line6.png" alt="">
                <span>前端制作</span>
            </li>
            <li>
                <img src="__STATIC__images/line7.png" alt="">
                <span>产品交付</span>
            </li>
        </ul>
    </div>

</div>
<div class="dev-footer">
    <h4>联系我们为您私人订制吧</h4>
    <p>深度挖掘客户需求,定制属于自己的移动互联网生态！</p>
    <span>联系咨询 >></span>
</div>
