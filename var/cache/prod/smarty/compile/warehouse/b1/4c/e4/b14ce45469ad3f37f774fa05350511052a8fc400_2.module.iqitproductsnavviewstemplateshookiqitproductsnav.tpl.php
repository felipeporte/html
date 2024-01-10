<?php
/* Smarty version 4.3.4, created on 2024-01-09 18:33:17
  from 'module:iqitproductsnavviewstemplateshookiqitproductsnav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659dbb9d35ad75_53508593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b14ce45469ad3f37f774fa05350511052a8fc400' => 
    array (
      0 => 'module:iqitproductsnavviewstemplateshookiqitproductsnav.tpl',
      1 => 1704823163,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659dbb9d35ad75_53508593 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="iqitproductsnav">
    <?php if ((isset($_smarty_tpl->tpl_vars['previous']->value))) {?>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['previous']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous product','mod'=>'iqitproductsnav'),$_smarty_tpl ) );?>
">
          <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['is_rtl'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?> <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i><?php } else { ?> <i class="fa fa-angle-left" aria-hidden="true"></i><?php }?>
        </a>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['next']->value))) {?>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next product','mod'=>'iqitproductsnav'),$_smarty_tpl ) );?>
">
            <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['is_rtl'], ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?><i class="fa fa-angle-left fa-fw" aria-hidden="true"></i> <?php } else { ?> <i class="fa fa-angle-right" aria-hidden="true"></i><?php }?>
        </a>
    <?php }?>
</div>


<?php }
}
