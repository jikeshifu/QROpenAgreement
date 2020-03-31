


<?php

require './class/function.php';
require './class/db.class.php';

require './lib/Smarty.class.php';

$smarty = new Smarty;
$db = ConnectMysqli::getIntance();

$wmj = $db->getRow('select * from config where k="wmj"');
$wmjcontent = $wmj['content'];	

$config = json_decode($wmj['v'], true);
$lock_id = $_GET['id']*1 ;
$lock = $db->getRow('select * from locks where id='.$lock_id);
//$lock = ['sn'=>'WMJ16881234'];
if (!$lock) {
	$data = array(
		'state' => 0,
		'msg'   => '非法访问',
	);
} else {
    
    if( empty($_GET['agree']) )
    {
      //echo $wmjcontent;
        $adata = array(
            'lock_id'=>$lock_id ,
            'content'=>$wmjcontent ,
       );
        $smarty->assign('adata', $adata);
        return $smarty->display('agree.html');
    }
	if ($config['aeskey']) {
		$lock['sn'] = aesEncrypt($lock['sn'], $config['aeskey']);
	}
	
	$result = httpPost('https://www.wmj.com.cn/api/openlock.html?appid='.$config['appid'].'&appsecret='.$config['appsecret'], $lock['sn']);
 
	$result = json_decode(trim($result, "\xEF\xBB\xBF"), true);
	
	if ($result['state']) {
		$data = array(
			'state' => 1,
			'msg'   => '开门成功',
		);
	} else {
		$data = array(
			'state' => 0,
			'msg'   => '开门失败',
		);
	}
	
}

$smarty->assign('data', $data);

$smarty->display('index.html');

?>