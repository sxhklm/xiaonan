<?php  include $this->GetTemplate('header');  ?>

<div id="info">
<div id="left" class="fl">
<div id="place">当前位置：<?php if ($type=='index') { ?><a href="<?php  echo $host;  ?>">网站首页</a><?php }else{  ?><a href="<?php  echo $host;  ?>">网站首页</a> / <a href="<?php  echo $category->Url;  ?>"><?php  echo $category->Name;  ?></a><?php } ?></div>	

<?php  foreach ( $articles as $article) { ?>

<?php if ($article->IsTop) { ?>
<?php  include $this->GetTemplate('post-istop');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-multi');  ?>
<?php } ?>

<?php }   ?>
<div class="pagenav"><?php  include $this->GetTemplate('pagebar');  ?></div>

</div>
<div id="rigth">
<dl id="ss"><form name="search" method="post" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search"><input type="text" name="q" size="11" id="edtSearch" /><input type="submit" value="搜索"  class="search-submit"  id="btnPost"/></form><div class="clear"></div></dl> 
<?php if ($type=='index') { ?>
<?php  include $this->GetTemplate('sidebar');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('sidebar2');  ?>
<?php } ?>
</div>


<div class="clear"></div></div>
<?php  include $this->GetTemplate('footer');  ?>