<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{$seo->title|default=''}</title>
    <meta name="keywords" content="{$seo->keywords|default=''}" />
    <meta name="description" content="{$seo->description|default=''}" />

    <link href="__STATIC__css/css.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__css/style.css" rel="stylesheet" type="text/css">

    <script src="__STATIC__js/jquery-1.js"></script>
</head>
<script type="text/javascript" src="__STATIC__js/jquery.js"></script>
<script type="text/javascript" src="__STATIC__js/lrtk.js"></script>
<SCRIPT src="__STATIC__js/jquery-1.8.0.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="__STATIC__js/index.js" type="text/javascript"></SCRIPT>
<SCRIPT src="__STATIC__js/TweenMax.min.js" type="text/javascript"></SCRIPT>
<SCRIPT type="text/javascript" src="__STATIC__js/lrscroll.js"></SCRIPT>
<script type="text/javascript" src="__STATIC__js/tab.js"></script>
<body>
{include file="layout/nav"}

{__CONTENT__}

{include file="layout/foot"}