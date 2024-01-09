<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:07
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/_product_partials/product-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb3efb361_52204289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1811e748d97771631343426a626c7075877117c' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/_product_partials/product-thumbnails.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8cb3efb361_52204289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1819697309659d8cb3ed0ad4_33194070', 'product_images');
?>

<?php }
/* {block 'product_images'} */
class Block_1819697309659d8cb3ed0ad4_33194070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_1819697309659d8cb3ed0ad4_33194070',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['images']) {?>
    <div class="js-qv-mask mask">
        <div id="product-images-thumbs" class="product-images js-qv-product-images swiper-container swiper-cls-fix desktop-swiper-cls-fix-5 swiper-cls-row-fix-1 tablet-swiper-cls-fix-5 mobile-swiper-cls-fix-5 ">
            <div class="swiper-wrapper">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAsFirstProductImage','product'=>$_smarty_tpl->tpl_vars['product']->value,'imageCarusel'=>'thumb'),$_smarty_tpl ) );?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'thumbs', array (
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
               <div class="swiper-slide"> <div class="thumb-container js-thumb-container">
                    <picture>
                    <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                    <img
                            class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> selected js-thumb-selected<?php }?>  img-fluid swiper-lazy"
                            data-image-medium-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                            data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['large']['sources'])) {?>data-image-large-sources="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['large']['sources'] )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                            src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['height'], ENT_QUOTES, 'UTF-8');?>
'%3E%3C/svg%3E"
                            data-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                                alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php } else { ?>
                                alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                            width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                            height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                    </picture>
                </div> </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAsLastProductImage','product'=>$_smarty_tpl->tpl_vars['product']->value,'imageCarusel'=>'thumb'),$_smarty_tpl ) );?>

            </div>
            <div class="swiper-button-prev swiper-button-inner-prev swiper-button-arrow"></div>
            <div class="swiper-button-next swiper-button-inner-next swiper-button-arrow"></div>
        </div>
    </div>
    <?php }
}
}
/* {/block 'product_images'} */
}
