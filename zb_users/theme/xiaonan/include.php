<?php

RegisterPlugin("xiaonan","ActivePlugin_xiaonan");


function xiaonan_get_linkall(){
global $zbp;
$num=5;
	foreach ($GLOBALS['xiaonan_Default_Data'] as $value) {
		xiaonan_Get_Link($value,$num);
	}
xiaonan_Get_Link2($num);
}


function ActivePlugin_xiaonan(){
Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','xiaonan_AddMenu');
}

function xiaonan_AddMenu(&$m){
global $zbp;
	array_unshift($m, MakeTopMenu("root",'小熙主题配置',$zbp->host . "zb_users/theme/xiaonan/main.php","","topmenu_xiaonan"));
}




function xiaonan_tags_set(&$template){
	global $zbp;
    $template->SetTags('xiaonan_MS',$zbp->Config('xiaonan')->PostMS);
    $template->SetTags('xiaonan_GJC',$zbp->Config('xiaonan')->PostGJC);
	$template->SetTags('xiaonan_FX',$zbp->Config('xiaonan')->PostFX); 
	$template->SetTags('xiaonan_zs',$zbp->Config('xiaonan')->zs); 
	$template->SetTags('xiaonan_fs',$zbp->Config('xiaonan')->fs); 
	$template->SetTags('xiaonan_clkg',$zbp->Config('xiaonan')->clkg); 
}

function InstallPlugin_xiaonan(){
	global $zbp;
	if(!$zbp->Config('xiaonan')->HasKey('Version')){
		$zbp->Config('xiaonan')->Version = '1.0';
		$zbp->Config('xiaonan')->PostMS = '网站描述';
		$zbp->Config('xiaonan')->PostGJC = '网站关键词';
		$zbp->Config('xiaonan')->PostFX = '请在这里放置你的在线分享代码';
		$zbp->Config('xiaonan')->zs = '00D0A4';
		$zbp->Config('xiaonan')->fs = 'ff6f3d';
		$zbp->Config('xiaonan')->clkg = '0';
		$zbp->SaveConfig('xiaonan');
	}
}

//卸载主题
function UninstallPlugin_xiaonan(){
	global $zbp;
}


?>