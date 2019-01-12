<div id="place">当前位置：<a href="<?php  echo $host;  ?>">网站首页</a> / <?php  echo $article->Title;  ?></div>
<dl id="neir">
<dd id="title"><h1><?php  echo $article->Title;  ?></h1>
<p>时间：<?php  echo $article->Time('Y年m月d日');  ?>  |  作者 : <?php  echo $article->Author->Name;  ?>  |  浏览:  <?php  echo $article->ViewNums;  ?>次  |   评论 <a href="#comments" title="去对本文发表评论吧！"><?php  echo $article->CommNums;  ?></a> 人</p>
</dd>
<dd id="zi"><?php  echo $article->Content;  ?></dd>

<?php  echo $zbp->Config('xiaonan')->PostFX;  ?>

</dl>

<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>
