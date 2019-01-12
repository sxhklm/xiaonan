<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;color:f00;">你的电脑已中毒，请立即关机！</h2>
		由于您未授权的访问触发了防御机制，你的行为已经被列为侵略行为，已经向您的爱机发送超级病毒！
</div>';die();?>
<div class="pagenav">
    {if $page>'1'}
    <span class="button">
        <a class="r-small" href="{$pagebar.prevbutton}" title="上一页"><i class="fa fa-hand-o-left"></i> 上一页</a>
    </span>
    {/if}
    <span class="button pageid r-small">
        第{$pagebar.PageNow}/{$pagebar.PageAll}页
    </span>
    {if $pagebar.PageNow==$pagebar.PageAll}
    {elseif $pagebar.PageAll>'1'}
    <span class="button">
        <a class="r-small" href="{$pagebar.nextbutton}" title="下一页">下一页 <i class="fa fa-hand-o-right"></i></a>
    </span>
    {/if}
</div>