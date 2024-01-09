<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:08
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb4479906_06901604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c6dfac690fa40cb3b6aadb6525e5c8423d6726c' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/product-images-modal.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8cb4479906_06901604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-product-images-modal" id="product-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tap to zoom','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php $_smarty_tpl->_assignInScope('imagesCount', smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']));?>
                <div class="easyzoom easyzoom-modal">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>   
                    <a href="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');
} elseif (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');
}?>" 
                        class="js-modal-product-cover-easyzoom" rel="nofollow">
                    <picture>
                        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                        <img class="js-modal-product-cover product-cover-modal img-fluid"
                             width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"  height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                             <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) && !empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {?>
                                alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                <?php } else { ?>
                                alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                             <?php }?>
                           >
                    </picture>
                    </a>
                    <?php } else { ?>
                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" class="js-modal-product-cover-easyzoom" rel="nofollow">
                        <picture>
                            <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                            <img class="js-modal-product-cover product-cover-modal img-fluid"
                            width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"   alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                        </picture>
                         </a>


                      <?php }?>
                </div>
                <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1009972752659d8cb4454415_40049910', 'product_images');
?>

                </aside>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }
/* {block 'product_images'} */
class Block_1009972752659d8cb4454415_40049910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_1009972752659d8cb4454415_40049910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

                        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>

                        <div class="js-modal-mask mask <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value <= 5) {?> nomargin <?php }?>">
                            <div id="modal-product-thumbs" class="product-images js-modal-product-images swiper-cls-fix desktop-swiper-cls-fix-10 swiper-cls-row-fix-1 tablet-swiper-cls-fix-6 mobile-swiper-cls-fix-6 swiper-container">
                                <div class="swiper-wrapper">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                                    <div class="swiper-slide">
                                        <div class="thumb-container">
                                            <picture>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                                            <img data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['large']['sources'])) {?>data-image-large-sources="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['large']['sources'] )), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="thumb js-modal-thumb img-fluid swiper-lazy"
                                                 src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['height'], ENT_QUOTES, 'UTF-8');?>
'%3E%3C/svg%3E"
                                                 data-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                                 <?php if ((isset($_smarty_tpl->tpl_vars['image']->value['legend'])) && !empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                                                    alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                                    title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                                  <?php } else { ?>
                                                    alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                                                  <?php }?>
                                                 width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                                                 height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['height'], ENT_QUOTES, 'UTF-8');?>
"

                                                 itemprop="image">
                                            </picture>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                <div class="swiper-button-prev swiper-button-inner-prev swiper-button-arrow"></div>
                                <div class="swiper-button-next swiper-button-inner-next swiper-button-arrow"></div>
                            </div>
                        </div>

                        <?php }?>
                    <?php
}
}
/* {/block 'product_images'} */
}
