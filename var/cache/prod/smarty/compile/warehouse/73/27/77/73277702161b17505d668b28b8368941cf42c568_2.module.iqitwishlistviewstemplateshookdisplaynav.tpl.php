<?php
/* Smarty version 4.3.4, created on 2024-01-10 14:00:07
  from 'module:iqitwishlistviewstemplateshookdisplaynav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659ecd17ba7080_34919478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73277702161b17505d668b28b8368941cf42c568' => 
    array (
      0 => 'module:iqitwishlistviewstemplateshookdisplaynav.tpl',
      1 => 1704823162,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659ecd17ba7080_34919478 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-inline-block">
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitwishlist','controller'=>'view'),$_smarty_tpl ) );?>
">
        <i class="fa fa-heart-o fa-fw" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'iqitwishlist'),$_smarty_tpl ) );?>
 (<span
                id="iqitwishlist-nb"></span>)
    </a>
</div>
<?php }
}
