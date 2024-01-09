<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:04:54
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8ac66edb37_26029762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8aa734fb6792c7cb49abb8fce5f149a8e636334' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-btn.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8ac66edb37_26029762 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-add-cart js-product-add-cart-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" >

    <?php if (!(isset($_smarty_tpl->tpl_vars['max_quantity']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('max_quantity', $_smarty_tpl->tpl_vars['product']->value['quantity']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] && ($_smarty_tpl->tpl_vars['max_quantity']->value > 0 || $_smarty_tpl->tpl_vars['product']->value['allow_oosp']) && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">

            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">

           
                <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product_attribute" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="input-group-add-cart">
                <input
                        type="number"
                        name="qty"
                        value="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])) && $_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'] != '') {
if ($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }
} else {
if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }
}?>"
                        class="form-control input-qty"
                        min="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])) && $_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'] != '') {
if ($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }
} else {
if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }
}?>"
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>max="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['max_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                >

                <button
                        class="btn btn-product-list add-to-cart"
                        data-button-action="add-to-cart"
                        type="submit"
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
                            disabled
                        <?php }?>
                ><i class="fa fa-shopping-bag fa-fw bag-icon"
                    aria-hidden="true"></i> <i class="fa fa-circle-o-notch fa-spin fa-fw spinner-icon" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </button>
            </div>
        </form>
    <?php } else { ?>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
           class="btn btn-product-list"
        > <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </a>
    <?php }?>
</div><?php }
}
