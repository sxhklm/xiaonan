{template:header}

<div id="info">
<div id="left" class="fl">
<div id="place">当前位置：{if $type=='index'}<a href="{$host}">网站首页</a>{else}<a href="{$host}">网站首页</a> / <a href="{$category.Url}">{$category.Name}</a>{/if}</div>	

{foreach $articles as $article}

{if $article.IsTop}
{template:post-istop}
{else}
{template:post-multi}
{/if}

{/foreach}
<div class="pagenav">{template:pagebar}</div>

</div>
<div id="rigth">
<dl id="ss"><form name="search" method="post" action="{$host}zb_system/cmd.php?act=search"><input type="text" name="q" size="11" id="edtSearch" /><input type="submit" value="搜索"  class="search-submit"  id="btnPost"/></form><div class="clear"></div></dl> 
{if $type=='index'}
{template:sidebar}
{else}
{template:sidebar2}
{/if}
</div>


<div class="clear"></div></div>
{template:footer}