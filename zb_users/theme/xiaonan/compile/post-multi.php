<?php 
              $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
              $content = $article->Content;
              preg_match_all($pattern,$content,$matchContent);
 ?>
            <?php if ( isset($matchContent[1][0])) { ?>
<dl id="post">
<dt><h2><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a></h2></dt>
<dd>
<i><?php 
$temp=$matchContent[1][0];
 ?><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><img src="<?php  echo $temp;  ?>"  alt="<?php  echo $article->Title;  ?>" /></a></i>

<?php $description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),150)).'...'); ?>
<p><?php  echo $description;  ?></p></dd>
<small><?php  echo $article->Time('Y年m月d日');  ?> | 分类：<a href="<?php  echo $article->Category->Url;  ?>" title="查看 <?php  echo $article->Category->Name;  ?> 分类下的更多文章"><?php  echo $article->Category->Name;  ?></a> | 浏览：<?php  echo $article->ViewNums;  ?> 次 | 评论：<?php  echo $article->CommNums;  ?> 人 | TAG：<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>"><?php  echo $tag->Name;  ?></a>,<?php }   ?></small>
<div class="clear"></div>
</dl>
              <?php }else{  ?>
<dl id="post">
<dt><h2><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a></h2></dt>
<dd><?php $description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),200)).'...'); ?>
<p><?php  echo $description;  ?></p></dd>
<small><?php  echo $article->Time('Y年m月d日');  ?> | 分类：<a href="<?php  echo $article->Category->Url;  ?>" title="查看 <?php  echo $article->Category->Name;  ?> 分类下的更多文章"><?php  echo $article->Category->Name;  ?></a> | 浏览：<?php  echo $article->ViewNums;  ?> 次 | 评论：<?php  echo $article->CommNums;  ?> 人 | TAG：<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>"><?php  echo $tag->Name;  ?></a>,<?php }   ?></small>
<div class="clear"></div>
</dl>
              <?php } ?>