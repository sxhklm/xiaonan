
<div class="pagenav">
    <?php if ($page>'1') { ?>
    <span class="button">
        <a class="r-small" href="<?php  echo $pagebar->prevbutton;  ?>" title="上一页"><i class="fa fa-hand-o-left"></i> 上一页</a>
    </span>
    <?php } ?>
    <span class="button pageid r-small">
        第<?php  echo $pagebar->PageNow;  ?>/<?php  echo $pagebar->PageAll;  ?>页
    </span>
    <?php if ($pagebar->PageNow==$pagebar->PageAll) { ?>
    <?php }elseif($pagebar->PageAll>'1') {  ?>
    <span class="button">
        <a class="r-small" href="<?php  echo $pagebar->nextbutton;  ?>" title="下一页">下一页 <i class="fa fa-hand-o-right"></i></a>
    </span>
    <?php } ?>
</div>