<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:07
  from 'module:iqitextendedproductviewstemplateshookiqitextendedproduct_front.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb3f14905_17091902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8de7a1edffb29b98a98e217176d55db4fc884914' => 
    array (
      0 => 'module:iqitextendedproductviewstemplateshookiqitextendedproduct_front.tpl',
      1 => 1704823162,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:iqitextendedproduct/views/templates/hook/_partials/as-image.tpl' => 1,
    'module:iqitextendedproduct/views/templates/hook/_partials/as-thumb.tpl' => 1,
    'module:iqitextendedproduct/views/templates/hook/_partials/below-thumbs.tpl' => 1,
  ),
),false)) {
function content_659d8cb3f14905_17091902 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['hookName']->value == 'displayAsFirstProductImage' || $_smarty_tpl->tpl_vars['hookName']->value == 'displayAsLastProductImage') {?>
    <?php if ($_smarty_tpl->tpl_vars['imageCarusel']->value == 'large') {?>
        <?php $_smarty_tpl->_subTemplateRender("module:iqitextendedproduct/views/templates/hook/_partials/as-image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("module:iqitextendedproduct/views/templates/hook/_partials/as-thumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>      
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("module:iqitextendedproduct/views/templates/hook/_partials/below-thumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>


<?php }
}
