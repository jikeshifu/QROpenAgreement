<?php
/* Smarty version 3.1.30, created on 2017-10-26 22:39:02
  from "/www/wwwroot/wmj1.tellnet.cn/templates/admin_setting.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1f386afd973_94732107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b4174aafe1ab79572cf51baf2a2a6505eeb8133' => 
    array (
      0 => '/www/wwwroot/wmj1.tellnet.cn/templates/admin_setting.html',
      1 => 1509028186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_header.html' => 1,
    'file:admin_footer.html' => 1,
  ),
),false)) {
function content_59f1f386afd973_94732107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">微门禁API接入设置</h3>
						</div>
						<div class="panel-body">
							<form class="form-auth-small" action="admin.php?ac=setting" method="post">
								<input type="hidden" name="wmj" value="wmj"/>
								<input type="text" name="appid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['wmj']->value['appid'];?>
" placeholder="请输入微门禁提供的APPID">
								<br>
								<input type="text" name="appsecret" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['wmj']->value['appsecret'];?>
" placeholder="请输入微门禁提供的APPSECRET">
								<br>
								<input type="text" name="aeskey" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['wmj']->value['aeskey'];?>
" placeholder="如果需要加密的话，请输入微门禁提供的AES加密密钥">
								<br>
								<button type="submit" class="btn btn-primary">保 存</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<?php $_smarty_tpl->_subTemplateRender("file:admin_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
