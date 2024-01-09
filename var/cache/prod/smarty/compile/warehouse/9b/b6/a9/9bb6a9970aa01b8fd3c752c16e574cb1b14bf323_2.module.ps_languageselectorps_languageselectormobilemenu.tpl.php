<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:07
  from 'module:ps_languageselectorps_languageselectormobilemenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb3d34671_18059206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb6a9970aa01b8fd3c752c16e574cb1b14bf323' => 
    array (
      0 => 'module:ps_languageselectorps_languageselectormobilemenu.tpl',
      1 => 1704823163,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8cb3d34671_18059206 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="mobile-menu__language-selector d-inline-block mr-4">
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>

    <div class="mobile-menu__language-currency-dropdown">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
             <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> 
                <li class="my-3">
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" rel="alternate" class="text-reset"
                        hreflang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div><?php }
}
