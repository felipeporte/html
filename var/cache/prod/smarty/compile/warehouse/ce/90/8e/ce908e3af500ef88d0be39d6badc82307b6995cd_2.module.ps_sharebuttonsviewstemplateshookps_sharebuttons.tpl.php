<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:08
  from 'module:ps_sharebuttonsviewstemplateshookps_sharebuttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb417be67_51147966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce908e3af500ef88d0be39d6badc82307b6995cd' => 
    array (
      0 => 'module:ps_sharebuttonsviewstemplateshookps_sharebuttons.tpl',
      1 => 1704823163,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8cb417be67_51147966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1347474535659d8cb4165c03_01426941', 'social_sharing');
?>



<?php }
/* {block 'social_sharing'} */
class Block_1347474535659d8cb4165c03_01426941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'social_sharing' => 
  array (
    0 => 'Block_1347474535659d8cb4165c03_01426941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['social_share_links']->value) {?>
    <div class="social-sharing">
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_share_links']->value, 'social_share_link');
$_smarty_tpl->tpl_vars['social_share_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_share_link']->value) {
$_smarty_tpl->tpl_vars['social_share_link']->do_else = false;
?>
          <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['social_share_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
">
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['social_share_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['social_share_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="nofollow noopener noreferrer">
              <?php if ($_smarty_tpl->tpl_vars['social_share_link']->value['class'] == 'facebook') {?>
                <i class="fa fa-facebook" aria-hidden="true"></i>
              <?php } elseif ($_smarty_tpl->tpl_vars['social_share_link']->value['class'] == 'twitter') {?>
                <i class="fa fa-twitter" aria-hidden="true"></i>
              <?php } elseif ($_smarty_tpl->tpl_vars['social_share_link']->value['class'] == 'googleplus') {?>
                <i class="fa fa-google-plus" aria-hidden="true"></i>
              <?php } elseif ($_smarty_tpl->tpl_vars['social_share_link']->value['class'] == 'pinterest') {?>
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
              <?php }?>
            </a>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php }
}
}
/* {/block 'social_sharing'} */
}
