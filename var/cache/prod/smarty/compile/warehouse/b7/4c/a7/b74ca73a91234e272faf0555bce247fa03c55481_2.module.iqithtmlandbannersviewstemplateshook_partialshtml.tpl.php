<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:08
  from 'module:iqithtmlandbannersviewstemplateshook_partialshtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb420dd94_39639004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b74ca73a91234e272faf0555bce247fa03c55481' => 
    array (
      0 => 'module:iqithtmlandbannersviewstemplateshook_partialshtml.tpl',
      1 => 1704823162,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8cb420dd94_39639004 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['block']->value['content']) {
if ($_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayNav1' || $_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayNav2' || $_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayNavCenter') {?>
    <div id="iqithtmlandbanners-block-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id'], ENT_QUOTES, 'UTF-8');?>
"  class="d-inline-block">
        <div class="rte-content d-inline-block">
            <?php echo $_smarty_tpl->tpl_vars['block']->value['content'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayProductAdditionalInfo' || $_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayWrapperTopInContainer' || $_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayWrapperTop') {?>
    <div id="iqithtmlandbanners-block-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="rte-content">
            <?php echo $_smarty_tpl->tpl_vars['block']->value['content'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayHeaderButtons' || $_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayHeaderButtonsMobile') {?>
    <?php echo $_smarty_tpl->tpl_vars['block']->value['content'];?>

<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayLeftColumn' || $_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayRightColumn') {?>
    <div id="iqithtmlandbanners-block-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id'], ENT_QUOTES, 'UTF-8');?>
"  class="block block-toggle block-iqithtmlandbanners-html js-block-toggle">
        <h5 class="block-title"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></h5>
        <div class="block-content rte-content">
            <?php echo $_smarty_tpl->tpl_vars['block']->value['content'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['hook'] == 'displayMyAccountDashboard') {?>
    <div id="iqithtmlandbanners-block-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id'], ENT_QUOTES, 'UTF-8');?>
"  class="col <?php if ($_smarty_tpl->tpl_vars['block']->value['width'] == 0) {?>col-md<?php } else { ?>col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['width'], ENT_QUOTES, 'UTF-8');
}?> block block-toggle block-iqithtmlandbanners-html mt-4 js-block-toggle">
        <h5 class="block-title"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></h5>
        <div class="block-content rte-content">
            <?php echo $_smarty_tpl->tpl_vars['block']->value['content'];?>

        </div>
    </div>
<?php } else { ?>
    <div id="iqithtmlandbanners-block-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['id'], ENT_QUOTES, 'UTF-8');?>
"  class="col <?php if ($_smarty_tpl->tpl_vars['block']->value['width'] == 0) {?>col-md<?php } else { ?>col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['width'], ENT_QUOTES, 'UTF-8');
}?> block block-toggle block-iqithtmlandbanners-html js-block-toggle">
        <h5 class="block-title"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></h5>
        <div class="block-content rte-content">
            <?php echo $_smarty_tpl->tpl_vars['block']->value['content'];?>

        </div>
    </div>
<?php }
}?>


<?php }
}
