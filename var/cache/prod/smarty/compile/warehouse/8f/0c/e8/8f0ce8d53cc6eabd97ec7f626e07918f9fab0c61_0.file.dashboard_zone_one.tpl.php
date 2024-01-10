<?php
/* Smarty version 4.3.4, created on 2024-01-10 12:41:20
  from '/var/www/html/modules/iqitdashboardnews/views/templates/hook/dashboard_zone_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659ebaa0680d46_18486936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f0ce8d53cc6eabd97ec7f626e07918f9fab0c61' => 
    array (
      0 => '/var/www/html/modules/iqitdashboardnews/views/templates/hook/dashboard_zone_one.tpl',
      1 => 1704823162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659ebaa0680d46_18486936 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="dashiqitnews" class="panel widget">
	<div class="panel-heading">
		 <img src="../modules/iqitdashboardnews/views/img/logo.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IQIT-COMMERCE updates','mod'=>'iqitdashboardnews'),$_smarty_tpl ) );?>
" /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'updates','mod'=>'iqitdashboardnews'),$_smarty_tpl ) );?>

	</div>
	<section id="iqit_iframe">
		<iframe width="100%" height="180px"
				src="//iqit-commerce.com/iframe/lastnews/news17.php?product=warehouse&psversion=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ps_version']->value,'html','UTF-8' ));?>
&version=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_version']->value,'html','UTF-8' ));?>
"
				style="border: none; overflow: hidden;"></iframe>
	</section>
</section>
<?php }
}
