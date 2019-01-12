{template:header}
<div id="info">
<div id="left" class="fl">
{if $article.Type==ZC_POST_TYPE_ARTICLE}
{template:post-single}
{else}
{template:post-page}
{/if}
</div>
<div id="rigth">

<dl id="ss"><form name="search" method="post" action="{$host}zb_system/cmd.php?act=search"><input type="text" name="q" size="11" id="edtSearch" /><input type="submit" value="搜索"  class="search-submit"  id="btnPost"/></form><div class="clear"></div></dl> 

{template:sidebar2}
</div>
<div class="clear"></div></div>

{template:footer}