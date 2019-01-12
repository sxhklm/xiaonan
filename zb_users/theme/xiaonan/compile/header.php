<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width,initial-scale=1.33,minimum-scale=1.0,maximum-scale=1.0">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <meta http-equiv="Content-Language" content="<?php  echo $language;  ?>" />
<?php if ($type=='article') { ?>
    <title><?php  echo $title;  ?>-<?php  echo $article->Category->Name;  ?>-<?php  echo $name;  ?></title>
    <meta name="keywords" content="<?php  foreach ( $article->Tags as $tag) { ?><?php  echo $tag->Name;  ?>,<?php }   ?>" />
    <meta name="description" content="<?php  echo $article->Title;  ?>是<?php  echo $name;  ?>中一篇关于<?php  foreach ( $article->Tags as $tag) { ?><?php  echo $tag->Name;  ?><?php }   ?>的文章，欢迎您阅读和评论,<?php  echo $name;  ?>" />
<?php }elseif($type=='page') {  ?>
    <title><?php  echo $title;  ?>-<?php  echo $name;  ?></title>
    <meta name="keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>"/>
    <?php $description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...'); ?>
    <meta name="description" content="<?php  echo $description;  ?>"/>
    <meta name="author" content="<?php  echo $article->Author->StaticName;  ?>">
<?php }elseif($type=='index') {  ?>
    <title><?php  echo $name;  ?><?php if ($page>'1') { ?>-第<?php  echo $pagebar->PageNow;  ?>页<?php } ?>-<?php  echo $subname;  ?></title>
    <meta name="Keywords" content="<?php  echo $zbp->Config('xiaonan')->PostGJC;  ?>">
    <meta name="description" content="<?php  echo $zbp->Config('xiaonan')->PostMS;  ?>">
<?php }elseif($type=='category') {  ?>
    <title><?php  echo $title;  ?>-<?php  echo $name;  ?>-第<?php  echo $pagebar->PageNow;  ?>页</title>
    <meta name="Keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>">
    <meta name="description" content="<?php  echo $category->Intro;  ?>">
<?php }else{  ?>
    <title><?php  echo $title;  ?>-<?php  echo $name;  ?></title>
<?php } ?>
     <meta name="generator" content="<?php  echo $zblogphp;  ?>" />
     <link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/<?php  echo $style;  ?>.css" type="text/css" media="all"/>
	<script src="<?php  echo $host;  ?>zb_system/script/common.js" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
       <script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/menu.js" type="text/javascript"></script>
<?php  echo $header;  ?>
<?php if ($type=='index'&&$page=='1') { ?>
	<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" /> 
<?php } ?>
<link rel="shortcut icon" href="<?php  echo $host;  ?>favicon.ico">
<style type="text/css">
a:hover{color: #<?php  echo $zbp->Config('xiaonan')->fs;  ?>;}
a{color: #<?php  echo $zbp->Config('xiaonan')->zs;  ?>;}
#hamburgermenu li a:hover,#hamburgermenu li a.on,#ss #btnPost,.pagenav span.button a:hover,#frmSumbit .button{background-color: #<?php  echo $zbp->Config('xiaonan')->zs;  ?>;}
@media screen and (max-width: 600px){header,#hamburgermenu{background-color: #<?php  echo $zbp->Config('xiaonan')->zs;  ?>;}}
<?php if ($zbp->Config('xiaonan')->clkg=='0') { ?>
@media screen and (max-width: 600px){#info #rigth{display:none;}}
<?php } ?>
</style>
</head>


<body>

<div id="head">
  <header>
    <div id="navbar"><span class="rss"><a href="<?php  echo $host;  ?>">回到首页</a></span>
      <a href="#" class="menubtn">menu</a>
      <!-- use captain icon for toggle menu -->
      <div id="hamburgermenu">
        <ul>
<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
       </ul>
      </div>
    </div>
    <div class="overlay"></div>
  </header>

<div id="logo"><a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/include/logo.png" width="300" height="60" alt="<?php  echo $name;  ?>"/></a></div>
</div>
