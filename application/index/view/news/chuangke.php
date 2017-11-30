<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>弘扬创业精神,展现企业家风采-追寻创客+</title>
    <meta name="description" content="向全世界讲出你的创业故事,让全世界为你鼓掌喝彩."/>
    <meta name="keywords" content="微视频,视频营销,企业宣传片,视频媒介"/>
    <link href="__STATIC__/css/css.css" rel="stylesheet" type="text/css"/>
    <link href="__STATIC__/css/style.css" rel="stylesheet" type="text/css">
    <script src="__STATIC__/js/jquery-1.js"></script>
    <script type="text/javascript" src="__STATIC__js/jquery.min.js"></script>
    <script type="text/javascript" src="__STATIC__js/jquery.roundabout-1.0.min.js"></script>
    <script type="text/javascript" src="__STATIC__js/jquery.easing.1.3.js"></script>
    <SCRIPT type="text/javascript" src="__STATIC__js/lrscroll_zxck.js"></SCRIPT>
    <script type="text/javascript" src="__STATIC__/js/tab.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#featured-area ul').roundabout({
                easing: 'easeOutInCirc',
                duration: 600
            });
        });
    </script>
</head>
<body>
<!--头部-->
{include file="layout/nav"}


<DIV class="yxzj_tuishou">
    <div style=" border-top:1px solid #e1e1e1;"></div>
    <div id="featured-area">
        <ul>
           <?php foreach($list_shipin_index_show as $row_){?>
            <li><a href="{:url('read_shipin')}?id={$row_->id}"><h1>{$row_->name}</h1><span>...</span><img
                            src='__IMGURL__{$row_->img_index}' border='0' width='660' height='380'
                            alt='{$row_->name}'></a></li>
            <?php }?>



        </ul>
    </div>

    <div class="zxck_title">《追寻》是国内《寻找中国创客+
        》之企业A计划唯一指定合作访谈栏目，通过主持人与中国企业家、独领风骚者、创客等人物深度对话，讲述他们创业与守业、创新与突破的非凡经历，分享他们与众不同的经营理念与管理理念，多维度平民化视角探索他们成功与人生的价值。结合全媒体互动，数据可视化等手段，传播品牌形象，传递创业正能量。
    </div>


    <div class="index_title">
        <dl>
            <dt>特约主持人</dt>
            <dd>Guest Host</dd>
        </dl>
    </div>


    <div id=Container_zxck>
        <div id=feature_zxck>
            <div id=block_zxck>

                <div id=scroll_zxck>
                    <UL class=featureUL_zxck>
                        <?php foreach ($list_host as $row_){?>
                        <li class=featureBox_zxck>
                            <div class=box><b>主持人 {$row_->name}</b><span>主持人{$row_->name}资料：{$row_->jianjie}</span><img
                                        src='__IMGURL__{$row_->img}' border='0' width='200'
                                        height='280' alt='暂无头像'></div>
                        </li><?php }?>


                    </UL>
                </div>

            </div>
            <A class=prev href="javascript:void();">Previous</A>
            <A class=next href="javascript:void();">Next</A>
        </div>
    </div>
</div>

<a name="list_"></a>
<div class="zxck_tab">
    <ul>
        <a href="{:url('chuangke')}#list_"> <li class="<?php if($cate_id==0){?>hover<?php }?>">全部视频</li></a>
<?php foreach ($list_cate as $row_){?>
        <a href="{:url('chuangke')}?cate_id={$row_->id}#list_"><li class="<?php if($cate_id==$row_->id){?>hover<?php }?>">{$row_->name}</li></a>
<?php }?>
    </ul>
</div>

<div class="zxck_list" id="con_one_1">
    <?php foreach ($list_shipin as $row_){?>
    <dl>
        <dt><a href="{:url('read_shipin')}?id={$row_->id}" title="{$row_->name}"><img
                        src='__IMGURL__{$row_->img}' border='0' width='200' height='100'
                        alt='没有图片'></a></dt>
        <dd><a href="{:url('read_shipin')}?id={$row_->id}" title="{$row_->name}">{$row_->name}</a></dd>
    </dl>
  <?php }?>

</div>




<!--底部-->
{include file="layout/foot"}