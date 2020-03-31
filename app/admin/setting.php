<?php

$db = ConnectMysqli::getIntance();

if ($_POST) {
	
	if ($_POST['wmj']) {
		
		$data = array(
			'appid'     => $_POST['appid'],
			'appsecret' => $_POST['appsecret'],
			'aeskey'    => $_POST['aeskey'],
		);
		
		$db->update('config', array('v' => json_encode($data)), 'k="wmj"');
		$db->update('config', array('content' => $_POST['content']), 'k="wmj"');
		msg('设置成功', 'admin.php');
	}
}

$wmj = $db->getRow('select * from config where k="wmj"');

if (!$wmj) {
	$db->insert('config', array('k' => 'wmj'));
}

$wmj_config = json_decode($wmj['v'], true);
$wmjcontent = $wmj['content'];
$smarty->assign("wmj", $wmj_config);
$smarty->assign("wmjcontent", $wmjcontent);
$smarty->assign('nav_setting', 'active');

$smarty->display('admin_setting.html');
