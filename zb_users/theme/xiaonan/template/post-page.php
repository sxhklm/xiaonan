<div id="place">当前位置：<a href="{$host}">网站首页</a> / {$article.Title}</div>
<dl id="neir">
<dd id="title"><h1>{$article.Title}</h1>
<p>时间：{$article.Time('Y年m月d日')}  |  作者 : {$article.Author.Name}  |  浏览:  {$article.ViewNums}次  |   评论 <a href="#comments" title="去对本文发表评论吧！">{$article.CommNums}</a> 人</p>
</dd>
<dd id="zi">{$article.Content}</dd>

{$zbp->Config('xiaonan')->PostFX}

</dl>

{if !$article.IsLock}
{template:comments}
{/if}
