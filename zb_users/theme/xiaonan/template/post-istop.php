{php}
              $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
              $content = $article->Content;
              preg_match_all($pattern,$content,$matchContent);
{/php}
            {if  isset($matchContent[1][0])}
<dl id="post">
<dt><h2><a href="{$article.Url}" title="{$article.Title}">[置顶] {$article.Title}</a></h2></dt>
<dd>
<i>{php}
$temp=$matchContent[1][0];
{/php}<a href="{$article.Url}" title="{$article.Title}"><img src="{$temp}"  alt="{$article.Title}" /></a></i>

{php}$description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),150)).'...');{/php}
<p>{$description}</p></dd>
<small>{$article.Time('Y年m月d日')} | 分类：<a href="{$article.Category.Url}" title="查看 {$article.Category.Name} 分类下的更多文章">{$article.Category.Name}</a> | 浏览：{$article.ViewNums} 次 | 评论：{$article.CommNums} 人 | TAG：{foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>,{/foreach}</small>
<div class="clear"></div>
</dl>
              {else}
<dl id="post">
<dt><h2><a href="{$article.Url}" title="{$article.Title}">[置顶] {$article.Title}</a></h2></dt>
<dd>{php}$description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),200)).'...');{/php}
<p>{$description}</p></dd>
<small>{$article.Time('Y年m月d日')} | 分类：<a href="{$article.Category.Url}" title="查看 {$article.Category.Name} 分类下的更多文章">{$article.Category.Name}</a> | 浏览：{$article.ViewNums} 次 | 评论：{$article.CommNums} 人 | TAG：{foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>,{/foreach}</small>
<div class="clear"></div>
</dl>
              {/if}