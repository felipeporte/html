<?php
/* Smarty version 4.3.4, created on 2024-01-10 14:00:06
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659ecd16dd87a6_09325174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b24111a6dfbcc3e457e14e2b1b55ea2988c9e49' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/_partials/product-miniature-1.tpl' => 1,
    'file:catalog/_partials/miniatures/_partials/product-miniature-2.tpl' => 1,
    'file:catalog/_partials/miniatures/_partials/product-miniature-3.tpl' => 1,
  ),
),false)) {
function content_659ecd16dd87a6_09325174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1763914564659ecd16d938d0_52091543', 'product_miniature_item');
?>

<?php }
/* {block 'product_miniature_item'} */
class Block_1763914564659ecd16d938d0_52091543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_1763914564659ecd16d938d0_52091543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="js-product-miniature-wrapper js-product-miniature-wrapper-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
 <?php if ((isset($_smarty_tpl->tpl_vars['carousel']->value)) && $_smarty_tpl->tpl_vars['carousel']->value) {?>product-carousel<?php } else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['elementor']->value)) && $_smarty_tpl->tpl_vars['elementor']->value) {?>
    col-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nbMobile']->value, ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nbTablet']->value, ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nbDesktop']->value, ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nbDesktop']->value, ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>
    col-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_p'], ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_t'], ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_d'], ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_ld'], ENT_QUOTES, 'UTF-8');
}?>
    <?php }?> ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout'], ENT_QUOTES, 'UTF-8');?>
 js-product-miniature"
                data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"

        >

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout'] == 1) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout'] == 2) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout'] == 3) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>


            <?php if ((isset($_smarty_tpl->tpl_vars['richData']->value)) && $_smarty_tpl->tpl_vars['richData']->value) {?>
                <span itemprop="isRelatedTo"  itemscope itemtype="https://schema.org/Product" >
            <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                <meta itemprop="image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
">
            <?php } else { ?>
                <meta itemprop="image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>

                    <meta itemprop="name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
            <meta itemprop="url" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"/>
            <meta itemprop="description" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...' )), ENT_QUOTES, 'UTF-8');?>
"/>

            <span itemprop="offers" itemscope itemtype="https://schema.org/Offer" >
                <?php if ((isset($_smarty_tpl->tpl_vars['currency']->value['iso_code']))) {?>
                    <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
                <meta itemprop="price" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"/>
            </span>
            </span>
            <?php }?>

        </article>
    </div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
