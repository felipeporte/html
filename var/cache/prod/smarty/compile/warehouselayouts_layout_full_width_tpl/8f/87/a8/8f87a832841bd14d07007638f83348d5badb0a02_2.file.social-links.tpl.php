<?php
/* Smarty version 4.3.4, created on 2024-01-10 14:00:08
  from '/var/www/html/themes/warehouse/templates/_elements/social-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659ecd1802c717_73382682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f87a832841bd14d07007638f83348d5badb0a02' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_elements/social-links.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659ecd1802c717_73382682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_931926497659ecd18000116_98824808', 'social_links');
?>

<?php }
/* {block 'social_links'} */
class Block_931926497659ecd18000116_98824808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'social_links' => 
  array (
    0 => 'Block_931926497659ecd18000116_98824808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<ul class="social-links <?php if ((isset($_smarty_tpl->tpl_vars['class']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>" itemscope itemtype="https://schema.org/Organization" itemid="#store-organization">
    <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_facebook'])) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_facebook'] != '') {?><li class="facebook"><a itemprop="sameAs" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_facebook'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_twitter'])) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_twitter'] != '') {?><li class="twitter"><a itemprop="sameAs" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_twitter'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_instagram'])) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_instagram'] != '') {?><li class="instagram"><a itemprop="sameAs" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_instagram'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_google'])) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_google'] != '') {?><li class="google"><a itemprop="sameAs" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_google'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-google-plus fa-fw" aria-hidden="true"></i></a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_pinterest'])) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_pinterest'] != '') {?><li class="pinterest"><a itemprop="sameAs" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_pinterest'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-pinterest-p fa-fw" aria-hidden="true"></i></a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_youtube'])) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_youtube'] != '') {?><li class="youtube"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_youtube'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-youtube fa-fw" aria-hidden="true"></i></a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_vimeo'])) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_vimeo'] != '') {?><li class="vimeo"><a itemprop="sameAs" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_vimeo'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-vimeo fa-fw" aria-hidden="true"></i></a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_linkedin'])) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_linkedin'] != '') {?><li class="linkedin"><a itemprop="sameAs" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_linkedin'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a></li><?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_tiktok'])) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_tiktok'] != '') {?><li class="tiktok"><a itemprop="sameAs" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_tiktok'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-tiktok fa-fw" aria-hidden="true"></i></a></li><?php }?>
</ul>
<?php
}
}
/* {/block 'social_links'} */
}
