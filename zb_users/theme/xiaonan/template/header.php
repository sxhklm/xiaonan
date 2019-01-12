<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width,initial-scale=1.33,minimum-scale=1.0,maximum-scale=1.0">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <meta http-equiv="Content-Language" content="{$language}" />
{if $type=='article'}
    <title>{$title}-{$article.Category.Name}-{$name}</title>
    <meta name="keywords" content="{foreach $article.Tags as $tag}{$tag.Name},{/foreach}" />
    <meta name="description" content="{$article.Title}是{$name}中一篇关于{foreach $article.Tags as $tag}{$tag.Name}{/foreach}的文章，欢迎您阅读和评论,{$name}" />
{elseif $type=='page'}
    <title>{$title}-{$name}</title>
    <meta name="keywords" content="{$title},{$name}"/>
    {php}$description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');{/php}
    <meta name="description" content="{$description}"/>
    <meta name="author" content="{$article.Author.StaticName}">
{elseif $type=='index'}
    <title>{$name}{if $page>'1'}-第{$pagebar.PageNow}页{/if}-{$subname}</title>
    <meta name="Keywords" content="{$zbp->Config('xiaonan')->PostGJC}">
    <meta name="description" content="{$zbp->Config('xiaonan')->PostMS}">
{elseif $type=='category'}
    <title>{$title}-{$name}-第{$pagebar.PageNow}页</title>
    <meta name="Keywords" content="{$title},{$name}">
    <meta name="description" content="{$category.Intro}">
{else}
    <title>{$title}-{$name}</title>
{/if}
     <meta name="generator" content="{$zblogphp}" />
     <link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/{$style}.css" type="text/css" media="all"/>
	<script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
	<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
       <script src="{$host}zb_users/theme/{$theme}/script/menu.js" type="text/javascript"></script>
{$header}
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" /> 
{/if}
<link rel="shortcut icon" href="{$host}favicon.ico">
<style type="text/css">
a:hover{color: #{$zbp->Config('xiaonan')->fs};}
a{color: #{$zbp->Config('xiaonan')->zs};}
#hamburgermenu li a:hover,#hamburgermenu li a.on,#ss #btnPost,.pagenav span.button a:hover,#frmSumbit .button{background-color: #{$zbp->Config('xiaonan')->zs};}
@media screen and (max-width: 600px){header,#hamburgermenu{background-color: #{$zbp->Config('xiaonan')->zs};}}
{if $zbp->Config('xiaonan')->clkg=='0'}
@media screen and (max-width: 600px){#info #rigth{display:none;}}
{/if}
</style>
</head>


<body>

<div id="head">
  <header>
    <div id="navbar"><span class="rss"><a href="{$host}">回到首页</a></span>
      <a href="#" class="menubtn">menu</a>
      <!-- use captain icon for toggle menu -->
      <div id="hamburgermenu">
        <ul>
{module:navbar}
       </ul>
      </div>
    </div>
    <div class="overlay"></div>
  </header>

<div id="logo"><a href="{$host}" title="{$name}"><img src="{$host}zb_users/theme/{$theme}/include/logo.png" width="300" height="60" alt="{$name}"/></a></div>
</div>
