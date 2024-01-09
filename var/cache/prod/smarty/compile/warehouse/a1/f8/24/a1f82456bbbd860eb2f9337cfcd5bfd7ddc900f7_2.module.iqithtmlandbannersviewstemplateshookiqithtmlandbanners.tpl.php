<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:08
  from 'module:iqithtmlandbannersviewstemplateshookiqithtmlandbanners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb41e1524_59399098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f82456bbbd860eb2f9337cfcd5bfd7ddc900f7' => 
    array (
      0 => 'module:iqithtmlandbannersviewstemplateshookiqithtmlandbanners.tpl',
      1 => 1704823162,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:iqithtmlandbanners/views/templates/hook/_partials/html.tpl' => 1,
    'module:iqithtmlandbanners/views/templates/hook/_partials/banner.tpl' => 1,
  ),
),false)) {
function content_659d8cb41e1524_59399098 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>

  <?php if ($_smarty_tpl->tpl_vars['block']->value['type']) {?>
    <?php $_smarty_tpl->_subTemplateRender("module:iqithtmlandbanners/views/templates/hook/_partials/html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("module:iqithtmlandbanners/views/templates/hook/_partials/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  <?php }?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
