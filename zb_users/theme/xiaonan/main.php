<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('xiaonan')) {$zbp->ShowError(48);die();}
$blogtitle='小熙博客主题配置';

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';

if(isset($_POST['PostMS'])){
  $zbp->Config('xiaonan')->PostMS = $_POST['PostMS'];
  $zbp->Config('xiaonan')->PostGJC = $_POST['PostGJC'];
  $zbp->Config('xiaonan')->PostFX = $_POST['PostFX'];
  $zbp->Config('xiaonan')->zs = $_POST['zs'];
  $zbp->Config('xiaonan')->fs = $_POST['fs'];
  $zbp->Config('xiaonan')->clkg = $_POST['clkg'];
  $zbp->SaveConfig('xiaonan');
  $zbp->ShowHint('good');
}
?>

<script src="source/jscolor.js" type="text/javascript"></script>

<div id="divMain">
  <div class="divHeader"><?php echo $blogtitle;?></div>
  <div id="divMain2">
  
    <br>
 <p><strong style="color:#c00;">使用说明</strong>：首页调用的默认侧栏，列表页和内容页调用的侧栏2。</p> 
  <br>
    <form enctype="multipart/form-data" method="post" action="save.php?type=logo">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <td width="15%"><label for="logo.png"><p align="center">上传LOGO(大小为300*60)</p></label></td>
    <td width="50%"><p align="center"><input name="logo.png" type="file"/></p></td>
  <td width="25%"><p align="center"><input name="" type="Submit" class="button" value="保存"/></p></td>
  </tr>
</table>
    </form>
	
	    <form enctype="multipart/form-data" method="post" action="save.php?type=wybg">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <td width="15%"><label for="wybg.png"><p align="center">上传网页背景</p></label></td>
    <td width="50%"><p align="center"><input name="wybg.png" type="file"/></p></td>
  <td width="25%"><p align="center"><input name="" type="Submit" class="button" value="保存"/></p></td>
  </tr>
</table>
    </form>
	
  <form id="form1" name="form1" method="post">
  
  
   <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">

    

  <tr>

    <th colspan="4"><p align="center">网站配色</p></th>

    </tr>
  <tr>
    <td width="25%">网站主色（初始颜色00D0A4）</td>
    <td width="25%"><input name="zs" type="text" class="color"  style="width:50%" value="#<?php echo $zbp->Config('xiaonan')->zs;?>" /></input></td>
    <td width="25%">网站辅色（初始颜色ff6f3d）</td>
    <td width="25%"><input name="fs" type="text" class="color"  style="width:50%" value="#<?php echo $zbp->Config('xiaonan')->fs;?>" /></input></td>
  </tr>
</table>



 

<br>
  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <th width="15%"><p align="center">配置名称</p></th>
    <th width="50%"><p align="center">配置内容</p></th>
  <th width="25%"><p align="center">配置说明</p></th>
  </tr>

        <tr>
    <td><label for="PostMS"><p align="center">网站描述</p></label></td>
    <td><p align="left"><textarea name="PostMS" type="text" id="PostMS" style="width:98%;"><?php echo $zbp->Config('xiaonan')->PostMS;?></textarea></p></td>
  <td><p align="left">首页网站描述</p></td>
  </tr>
  
          <tr>
    <td><label for="PostGJC"><p align="center">网站关键词</p></label></td>
    <td><p align="left"><textarea name="PostGJC" type="text" id="PostGJC" style="width:98%;"><?php echo $zbp->Config('xiaonan')->PostGJC;?></textarea></p></td>
  <td><p align="left">首页网站关键词</p></td>
  </tr>


<tr>
    <td><label for="PostFX"><p align="center">在线分享</p></label></td>
    <td><p align="left"><textarea name="PostFX" type="text" id="PostFX" style="width:98%;"><?php echo $zbp->Config('xiaonan')->PostFX;?></textarea></p></td>
    <td><p align="left">请在这里放置你的在线分享代码，百度分享或者其他都可以。</p></td>
</tr> 
<tr>      
    <td><p align="center">右侧栏手机端开关</p></td>
	<td><input name="clkg" type="text" value="<?php echo $zbp->Config('xiaonan')->clkg; ?>" class="checkbox" style="display:none;" /></td>    <td>关闭后手机端将不显示侧栏的内容</td>
</tr>
</table>
 <br />
   <input name="" type="Submit" class="button" value="保存"/>
    </form>
<br />
  </div>
</div>
<script type="text/javascript">ActiveTopMenu("topmenu_xiaonan");</script> 
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>
