<?php
/* Smarty version 4.3.4, created on 2024-01-10 14:00:07
  from 'module:iqitsearchviewstemplateshooksearchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659ecd17be2e53_14542886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4629dbb3c4efa13c090c633dc2e46e5f2b42bed3' => 
    array (
      0 => 'module:iqitsearchviewstemplateshooksearchbar.tpl',
      1 => 1704823163,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659ecd17be2e53_14542886 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Block search module TOP -->
<div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <form method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="input-group">
            <input type="text" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" data-all-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all results','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
"
                   data-blog-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog post','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
"
                   data-product-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
"
                   data-brands-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
"
                   autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"
                   placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
" class="form-control form-search-control" />
            <button type="submit" class="search-btn">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
</div>
<!-- /Block search module TOP -->

<?php }
}
