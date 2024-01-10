<?php
/* Smarty version 4.3.4, created on 2024-01-10 14:00:08
  from 'module:iqitcompareviewstemplateshookdisplaymodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659ecd182cdbc6_75075190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4a200912ea9e133f46cf39b7eadc37ea7dd3d2f' => 
    array (
      0 => 'module:iqitcompareviewstemplateshookdisplaymodal.tpl',
      1 => 1704823162,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659ecd182cdbc6_75075190 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['update']->value) {?>
<div id="iqitcompare-notification" class="ns-box ns-effect-thumbslider ns-text-only">
    <div class="ns-box-inner">
        <div class="ns-content">
            <span class="ns-title"><i class="fa fa-check" aria-hidden="true"></i> <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product added to compare.','mod'=>'iqitcompare'),$_smarty_tpl ) );?>
</strong></span>
        </div>
    </div>
</div>
<?php }?>


<?php if (!$_smarty_tpl->tpl_vars['comparePage']->value) {?>
<div id="iqitcompare-floating-wrapper">
<?php if ($_smarty_tpl->tpl_vars['compareProductsNb']->value) {?>
<div id="iqitcompare-floating" class="">
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitcompare','controller'=>'comparator'),$_smarty_tpl ) );?>
">
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'iqitcompare'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['compareProductsNb']->value, ENT_QUOTES, 'UTF-8');?>
) </span>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['covers']->value, 'cover', false, 'myId', 'compareCovers', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['cover']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['cover']->value) {
$_smarty_tpl->tpl_vars['cover']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_compareCovers']->value['index']++;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_compareCovers']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_compareCovers']->value['index'] : null) < 6) {?>
                <?php if ($_smarty_tpl->tpl_vars['cover']->value) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value;?>
" class="img-fluid" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['myId']->value, ENT_QUOTES, 'UTF-8');?>
"  loading="lazy" />
                <?php } else { ?>
                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid"  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['myId']->value, ENT_QUOTES, 'UTF-8');?>
" loading="lazy" />
                <?php }?>
            <?php } else { ?>
                <span>...</span>
                <?php break 1;?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </a>
</div>
<?php }?>
</div>
<?php }?>


<?php }
}
