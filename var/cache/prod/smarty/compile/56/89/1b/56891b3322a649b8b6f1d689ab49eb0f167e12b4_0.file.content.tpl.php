<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:09:02
  from '/var/www/html/bo/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8bbe2aec99_34037658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56891b3322a649b8b6f1d689ab49eb0f167e12b4' => 
    array (
      0 => '/var/www/html/bo/themes/default/template/content.tpl',
      1 => 1704822865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8bbe2aec99_34037658 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
