<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:07
  from 'module:ps_currencyselectorps_currencyselectormobilemenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb3d4f916_42208285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd6522dbacb2ead7139cef7a64e59ac80e0726fc' => 
    array (
      0 => 'module:ps_currencyselectorps_currencyselectormobilemenu.tpl',
      1 => 1704823163,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8cb3d4f916_42208285 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="mobile-menu__currency-selector d-inline-block">
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['currency']->value['sign'] !== $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');
}?>
    <div class="mobile-menu__language-currency-dropdown">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                <?php if (!$_smarty_tpl->tpl_vars['currency']->value['current']) {?> 
                <li class="my-3"> 
                    <a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="text-reset">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['currency']->value['sign'] !== $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');
}?>
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
