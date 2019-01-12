<div id="place">当前位置：<a href="{$host}">网站首页</a> / <a href="{$article.Category.Url}">{$article.Category.Name}</a> / 正文</div>
<dl id="neir">
<dd id="title"><h1>{$article.Title}</h1>
<p>时间：{$article.Time('Y年m月d日')}  |  作者 : {$article.Author.Name}  |  分类 : <a href="{$article.Category.Url}" title="查看{$article.Category.Name}下的更多文章">{$article.Category.Name}</a>  |  浏览:  {$article.ViewNums}次  |   评论 <a href="#comments" title="去对本文发表评论吧！">{$article.CommNums}</a> 人</p>
</dd>
<dd id="zi">{$article.Content}
</dd>

<dd id="sx"><ul>
<li>上一篇：{if $article.Prev}
<a  href="{$article.Prev.Url}" title="{$article.Prev.Title}">{$article.Prev.Title}</a>
{/if} </li>
<li class="r">下一篇：{if $article.Next}
<a  href="{$article.Next.Url}" title="{$article.Next.Title}">{$article.Next.Title}</a>
{/if} </li>
<div class="clear"></div></ul>
</dd>

{$zbp->Config('xiaonan')->PostFX}


<dd id="guan"><h3>猜你喜欢</h3>
<ul>
{foreach GetList(10,null,null,null,null,null,array('is_related'=>$article.ID)) as $related}
<li><a href="{$related.Url}">{$related.Title}</a><span>{$related.Time('Y-m-d')}</span></li>
{/foreach}
</ul></dd>

</dl>

{if !$article.IsLock}
{template:comments}
{/if}