<div id="place">当前位置：<a href="<?php  echo $host;  ?>">网站首页</a> / <a href="<?php  echo $article->Category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a> / 正文</div>
<dl id="neir">
<dd id="title"><h1><?php  echo $article->Title;  ?></h1>
<p>时间：<?php  echo $article->Time('Y年m月d日');  ?>  |  作者 : <?php  echo $article->Author->Name;  ?>  |  分类 : <a href="<?php  echo $article->Category->Url;  ?>" title="查看<?php  echo $article->Category->Name;  ?>下的更多文章"><?php  echo $article->Category->Name;  ?></a>  |  浏览:  <?php  echo $article->ViewNums;  ?>次  |   评论 <a href="#comments" title="去对本文发表评论吧！"><?php  echo $article->CommNums;  ?></a> 人</p>
</dd>
<dd id="zi"><?php  echo $article->Content;  ?></dd>

<dd id="sx"><ul>
<li>上一篇：<?php if ($article->Prev) { ?>
<a  href="<?php  echo $article->Prev->Url;  ?>" title="<?php  echo $article->Prev->Title;  ?>"><?php  echo $article->Prev->Title;  ?></a>
<?php } ?> </li>
<li class="r">下一篇：<?php if ($article->Next) { ?>
<a  href="<?php  echo $article->Next->Url;  ?>" title="<?php  echo $article->Next->Title;  ?>"><?php  echo $article->Next->Title;  ?></a>
<?php } ?> </li>
<div class="clear"></div></ul>
</dd>

<?php  echo $zbp->Config('xiaonan')->PostFX;  ?>


<dd id="guan"><h3>猜你喜欢</h3>
<ul>
<?php  foreach ( GetList(10,null,null,null,null,null,array('is_related'=>$article->ID)) as $related) { ?>
<li><a href="<?php  echo $related->Url;  ?>"><?php  echo $related->Title;  ?></a><span><?php  echo $related->Time('Y-m-d');  ?></span></li>
<?php }   ?>
</ul></dd>

</dl>

<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>