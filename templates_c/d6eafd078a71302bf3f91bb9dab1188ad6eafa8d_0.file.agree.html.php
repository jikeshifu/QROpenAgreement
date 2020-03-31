<?php
/* Smarty version 3.1.30, created on 2018-09-26 10:51:18
  from "/www/wwwroot/jhm.tellnet.cn/templates/agree.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5baaf426c92cd6_47751001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6eafd078a71302bf3f91bb9dab1188ad6eafa8d' => 
    array (
      0 => '/www/wwwroot/jhm.tellnet.cn/templates/agree.html',
      1 => 1537930270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baaf426c92cd6_47751001 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link type="text/css" rel="stylesheet" href="static/agree/css/base.css">
<link rel="stylesheet" type="text/css" href="static/agree/css/common.css">
<title>免责申明</title>
<?php echo '<script'; ?>
 type="text/javascript" src="static/agree/js/jquery-1.7.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="static/agree/js/common.js"><?php echo '</script'; ?>
>
</head>

<body>
<div class="wrap">
<form action="/index.php" method="get">
    <div class="bgfff form ov">
		<div class="fb">免责申明：</div>
        <p class="font_p pt15">请认真阅读以下协议，在提交信息之前，你必须接受此协议的条款。</p>
        <div class="xieyi" style="height:500px;">
            <?php echo $_smarty_tpl->tpl_vars['adata']->value['content'];?>

        </div>
         <ul>
             <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['adata']->value['lock_id'];?>
">
             <input type="hidden" name="agree" value="1">
               <li class="sex">
               	<div class="fl ml30"> <input type="radio" id="tongyi" name="radio" ><label for="radio">我接受</label></div>
               </li>
 		</ul> 
        
        <div class="cb pt20"><input type="submit" id="tijiao" value="开门" disabled  class="nobut"></div>
        
    </div>
</form> 

</div>
</body>
</html>
<?php }
}
