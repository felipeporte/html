<?php
/* Smarty version 4.3.4, created on 2024-01-10 14:00:07
  from 'module:ps_shoppingcartps_shoppingcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659ecd17c03115_26364022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcartps_shoppingcart.tpl',
      1 => 1704823163,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-content.tpl' => 1,
  ),
),false)) {
function content_659ecd17c03115_26364022 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="blockcart" class="blockcart cart-preview"
         data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
        <a id="cart-toogle" class="cart-toogle header-btn header-cart-btn" data-toggle="dropdown" data-display="static">
            <i class="fa fa-shopping-bag fa-fw icon" aria-hidden="true"><span class="cart-products-count-btn <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] < 1) {?> d-none<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span></i>
            <span class="info-wrapper">
            <span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
            <span class="cart-toggle-details">
            <span class="text-faded cart-separator"> / </span>
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
            <span class="cart-products-count">(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</span>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['subtotal']->value['type'])) && $_smarty_tpl->tpl_vars['subtotal']->value['type'] == 'products') {?>
                        <span class="value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Empty','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

            <?php }?>
            </span>
            </span>
        </a>
        <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'dropdown'), 0, false);
?>
 </div>




<?php }
}
