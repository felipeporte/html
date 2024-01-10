<?php
/* Smarty version 4.3.4, created on 2024-01-09 18:33:17
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659dbb9d5ec096_58463608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '728af1f6612756789eb4a641c2ec487cac4df0d4' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659dbb9d5ec096_58463608 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
