<?php  include $this->GetTemplate('header');  ?>
<div id="info">
<div id="left" class="fl">
<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
<?php  include $this->GetTemplate('post-single');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-page');  ?>
<?php } ?>
</div>
<div id="rigth">

<dl id="ss"><form name="search" method="post" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search"><input type="text" name="q" size="11" id="edtSearch" /><input type="submit" value="搜索"  class="search-submit"  id="btnPost"/></form><div class="clear"></div></dl> 

<?php  include $this->GetTemplate('sidebar2');  ?>
</div>
<div class="clear"></div></div>

<?php  include $this->GetTemplate('footer');  ?>