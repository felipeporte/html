<?php
/* Smarty version 4.3.4, created on 2024-01-09 18:33:17
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659dbb9d3970f1_29020327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ed55d34cbda82a5859e8f22ead58e474f21ea85' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/_product_partials/product-cover-column.tpl' => 1,
    'file:catalog/_partials/_product_partials/product-thumbnails.tpl' => 2,
    'file:catalog/_partials/_product_partials/product-cover.tpl' => 2,
  ),
),false)) {
function content_659dbb9d3970f1_29020327 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_image_layout'] == 'column' && !(isset($_smarty_tpl->tpl_vars['is_quickview']->value))) {?>
    <div class="images-container js-images-container">
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-cover-column.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php } else { ?>
    <div class="images-container js-images-container images-container-<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_thumbs'] == "left" || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_thumbs'] == "leftd") {?>left images-container-d-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_thumbs'], ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?>bottom<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_thumbs'] == "left" || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_thumbs'] == "leftd") {?>
            <div class="row no-gutters">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['images']) {?><div class="col-2 col-left-product-thumbs"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div><?php }?>
                <div class="<?php if ($_smarty_tpl->tpl_vars['product']->value['images']) {?>col-10<?php } else { ?>col-12<?php }?> col-left-product-cover"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-cover.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
            </div>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-cover.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
    </div>
<?php }?>




<?php }
}
