<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:02:20
  from '/var/www/html/bo/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8a2c4eba56_66405358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8abba11b3e86e4fe0d4a7f4612cccce9ffea062f' => 
    array (
      0 => '/var/www/html/bo/themes/new-theme/template/content.tpl',
      1 => 1704822866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8a2c4eba56_66405358 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
