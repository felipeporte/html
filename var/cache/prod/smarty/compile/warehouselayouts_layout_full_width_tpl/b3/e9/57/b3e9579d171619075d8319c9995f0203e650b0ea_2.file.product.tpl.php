<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:07
  from '/var/www/html/themes/warehouse/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb382fcb4_63224898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e9579d171619075d8319c9995f0203e650b0ea' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/product.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 2,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/_product_partials/product-tabs-h.tpl' => 2,
    'file:catalog/_partials/_product_partials/product-tabs-sections.tpl' => 2,
    'file:catalog/_partials/_product_partials/product-tabs-accordion.tpl' => 2,
    'file:catalog/_partials/miniatures/product-small.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 2,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_659d8cb382fcb4_63224898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1402593436659d8cb372c989_87710419', 'head_og_tags');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1982445465659d8cb373a526_58665246', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_485460156659d8cb3758809_18004046', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98767556659d8cb375e433_14870996', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_og_tags'} */
class Block_1402593436659d8cb372c989_87710419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_tags' => 
  array (
    0 => 'Block_1402593436659d8cb372c989_87710419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:type" content="product">
    <meta property="og:url" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:title" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:description" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
        <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="og:image:width" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="og:image:height" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['height'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }
}
}
/* {/block 'head_og_tags'} */
/* {block 'head'} */
class Block_1982445465659d8cb373a526_58665246 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1982445465659d8cb373a526_58665246',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
        <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
        <meta property="product:weight:value" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:weight:units" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_bg_category']) {?>
        <?php $_smarty_tpl->_assignInScope('categoryImage', "img/c/".((string)$_smarty_tpl->tpl_vars['product']->value['id_category_default'])."-category_default.jpg");?>
        <?php if (file_exists($_smarty_tpl->tpl_vars['categoryImage']->value)) {?>
            <style> #wrapper .breadcrumb{  background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['product']->value['category'],$_smarty_tpl->tpl_vars['product']->value['id_category_default'],'category_default'), ENT_QUOTES, 'UTF-8');?>
'); }</style>
        <?php }?>
    <?php }?>

<?php
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_485460156659d8cb3758809_18004046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_485460156659d8cb3758809_18004046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_cover_thumbnails'} */
class Block_1202827062659d8cb37640e2_95250952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'after_cover_thumbnails'} */
class Block_1147905083659d8cb3767ae8_92630998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="after-cover-tumbnails text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div>
                            <?php
}
}
/* {/block 'after_cover_thumbnails'} */
/* {block 'after_cover_thumbnails2'} */
class Block_917057797659d8cb376a817_09353982 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="after-cover-tumbnails2 mt-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs2','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div>
                            <?php
}
}
/* {/block 'after_cover_thumbnails2'} */
/* {block 'page_content'} */
class Block_891461171659d8cb3763487_29748722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1202827062659d8cb37640e2_95250952', 'product_cover_thumbnails', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1147905083659d8cb3767ae8_92630998', 'after_cover_thumbnails', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_917057797659d8cb376a817_09353982', 'after_cover_thumbnails2', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1114399956659d8cb3762681_45300282 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_891461171659d8cb3763487_29748722', 'page_content', $this->tplIndex);
?>

                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_brand_below'} */
class Block_870673709659d8cb37713a9_74446752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'next-title') {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) && $_smarty_tpl->tpl_vars['product_manufacturer']->value->active) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?>
                                        <div class="product-manufacturer product-manufacturer-next float-right">
                                            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                     class="img-fluid  manufacturer-logo" loading="lazy" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" />
                                            </a>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_brand_below'} */
/* {block 'page_title'} */
class Block_2054569791659d8cb377fc94_28983522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_1335114246659d8cb377e542_24334550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h1 class="h1 page-title"><span><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2054569791659d8cb377fc94_28983522', 'page_title', $this->tplIndex);
?>
</span></h1>
                    <?php
}
}
/* {/block 'page_header'} */
/* {block 'product_brand_below'} */
class Block_607052600659d8cb37846c2_80545121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'title') {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) && $_smarty_tpl->tpl_vars['product_manufacturer']->value->active) {?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?>
                                            <div class="product-manufacturer mb-3">
                                            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                     class="img-fluid  manufacturer-logo" loading="lazy" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" />
                                            </a>
                                            </div>
                                        <?php } else { ?>
                                            <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
                                            <span>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
                                        <?php }?>

                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'next-title') {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) && $_smarty_tpl->tpl_vars['product_manufacturer']->value->active) {?>
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?>
                                        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
                                        <span>
                                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
                                        </span>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_brand_below'} */
/* {block 'hook_display_product_rating'} */
class Block_1855295339659d8cb37a4f24_17743602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductRating','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'hook_display_product_rating'} */
/* {block 'product_prices'} */
class Block_2080476877659d8cb37aa762_20396983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_prices'} */
/* {block 'page_header_container'} */
class Block_809324873659d8cb376fe70_58270605 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="product_header_container clearfix">

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_870673709659d8cb37713a9_74446752', 'product_brand_below', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1335114246659d8cb377e542_24334550', 'page_header', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_607052600659d8cb37846c2_80545121', 'product_brand_below', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1855295339659d8cb37a4f24_17743602', 'hook_display_product_rating', $this->tplIndex);
?>


                        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_price_position'] == 'below-title') {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2080476877659d8cb37aa762_20396983', 'product_prices', $this->tplIndex);
?>

                        <?php }?>
                    </div>
                <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_1793089482659d8cb37aed07_16707726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="product-description-short-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                              class="rte-content product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_1511222783659d8cb37b7994_17825394 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                        <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_714148639659d8cb37c2527_27972725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductVariants','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_2019518138659d8cb37ce9a6_44513623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
                                                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_334612106659d8cb37c6859_08764049 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                                        <section class="product-pack">
                                            <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2019518138659d8cb37ce9a6_44513623', 'product_miniature', $this->tplIndex);
?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </section>
                                    <?php }?>
                                <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_prices'} */
class Block_1764819826659d8cb37d6989_97943891 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_add_to_cart'} */
class Block_1154298350659d8cb37d9d75_28974736 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_discounts'} */
class Block_814990559659d8cb37dc864_17696391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_refresh'} */
class Block_739439041659d8cb37df631_38818435 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_additional_info'} */
class Block_1360336898659d8cb37e0fc5_28263544 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_buy'} */
class Block_1713584468659d8cb37bc5e5_75170223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="product_page_product_id">
                                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_714148639659d8cb37c2527_27972725', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_334612106659d8cb37c6859_08764049', 'product_pack', $this->tplIndex);
?>


                                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_price_position'] == 'above-button') {?>
                                    <div class="product_p_price_container">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1764819826659d8cb37d6989_97943891', 'product_prices', $this->tplIndex);
?>

                                    </div>
                                <?php }?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1154298350659d8cb37d9d75_28974736', 'product_add_to_cart', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_814990559659d8cb37dc864_17696391', 'product_discounts', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_739439041659d8cb37df631_38818435', 'product_refresh', $this->tplIndex);
?>

                            </form>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1360336898659d8cb37e0fc5_28263544', 'product_additional_info', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_998367173659d8cb37e4b06_82520191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_2036111079659d8cb3801015_89131289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <div class="swiper-slide"> <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true,'elementor'=>true,'richData'=>false,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?></div>
                                                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_sidebar'} */
class Block_1779387026659d8cb37f9a64_52673285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                            <section
                                    class="product-accessories product-accessories-sidebar block d-none d-md-block d-lg-block d-xl-block">
                                <p class="block-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                                </p>
                                    <div id="product-accessories-sidebar" class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2036111079659d8cb3801015_89131289', 'product_miniature', $this->tplIndex);
?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                        <div class="swiper-pagination swiper-pagination-product"></div>
                                    </div>
                            </section>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_accessories_sidebar'} */
/* {block 'product_accessories_footer'} */
class Block_62378107659d8cb3815a42_98331004 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <section class="product-accessories block block-section">
                        <p class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>

                        <div class="section-content swiper-container-wrapper">
                            <div class="products products-grid swiper-container swiper-default-carousel">
                                <div class="swiper-wrapper">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
                                        <div class="swiper-slide"> <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?></div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                <div class="swiper-pagination swiper-pagination-product"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </section>
                <?php }?>
            <?php
}
}
/* {/block 'product_accessories_footer'} */
/* {block 'product_accessories_sidebar_mobile'} */
class Block_1754532597659d8cb381e8e3_51000751 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <section class="product-accessories product-accessories-sidebar-mobile block block-section d-md-none">
                        <p class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>

                        <div class="section-content swiper-container-wrapper">
                            <div class="products products-grid swiper-container swiper-default-carousel">
                                <div class="swiper-wrapper">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
                                        <div class="swiper-slide"> <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?></div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                <div class="swiper-pagination swiper-pagination-product"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </section>
                <?php }?>
            <?php
}
}
/* {/block 'product_accessories_sidebar_mobile'} */
/* {block 'product_footer'} */
class Block_947244970659d8cb3826576_12935719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_1039253491659d8cb38291b1_27968058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_1907751311659d8cb382bca3_96051699 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Footer content -->
                <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_503510463659d8cb382b105_70725248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1907751311659d8cb382bca3_96051699', 'page_footer', $this->tplIndex);
?>

            </footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_98767556659d8cb375e433_14870996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_98767556659d8cb375e433_14870996',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1114399956659d8cb3762681_45300282',
  ),
  'page_content' => 
  array (
    0 => 'Block_891461171659d8cb3763487_29748722',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_1202827062659d8cb37640e2_95250952',
  ),
  'after_cover_thumbnails' => 
  array (
    0 => 'Block_1147905083659d8cb3767ae8_92630998',
  ),
  'after_cover_thumbnails2' => 
  array (
    0 => 'Block_917057797659d8cb376a817_09353982',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_809324873659d8cb376fe70_58270605',
  ),
  'product_brand_below' => 
  array (
    0 => 'Block_870673709659d8cb37713a9_74446752',
    1 => 'Block_607052600659d8cb37846c2_80545121',
  ),
  'page_header' => 
  array (
    0 => 'Block_1335114246659d8cb377e542_24334550',
  ),
  'page_title' => 
  array (
    0 => 'Block_2054569791659d8cb377fc94_28983522',
  ),
  'hook_display_product_rating' => 
  array (
    0 => 'Block_1855295339659d8cb37a4f24_17743602',
  ),
  'product_prices' => 
  array (
    0 => 'Block_2080476877659d8cb37aa762_20396983',
    1 => 'Block_1764819826659d8cb37d6989_97943891',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_1793089482659d8cb37aed07_16707726',
  ),
  'product_customization' => 
  array (
    0 => 'Block_1511222783659d8cb37b7994_17825394',
  ),
  'product_buy' => 
  array (
    0 => 'Block_1713584468659d8cb37bc5e5_75170223',
  ),
  'product_variants' => 
  array (
    0 => 'Block_714148639659d8cb37c2527_27972725',
  ),
  'product_pack' => 
  array (
    0 => 'Block_334612106659d8cb37c6859_08764049',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_2019518138659d8cb37ce9a6_44513623',
    1 => 'Block_2036111079659d8cb3801015_89131289',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_1154298350659d8cb37d9d75_28974736',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_814990559659d8cb37dc864_17696391',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_739439041659d8cb37df631_38818435',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_1360336898659d8cb37e0fc5_28263544',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_998367173659d8cb37e4b06_82520191',
  ),
  'product_accessories_sidebar' => 
  array (
    0 => 'Block_1779387026659d8cb37f9a64_52673285',
  ),
  'product_accessories_footer' => 
  array (
    0 => 'Block_62378107659d8cb3815a42_98331004',
  ),
  'product_accessories_sidebar_mobile' => 
  array (
    0 => 'Block_1754532597659d8cb381e8e3_51000751',
  ),
  'product_footer' => 
  array (
    0 => 'Block_947244970659d8cb3826576_12935719',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_1039253491659d8cb38291b1_27968058',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_503510463659d8cb382b105_70725248',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1907751311659d8cb382bca3_96051699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <div id="product-preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        <div id="main-product-wrapper" class="product-container js-product-container">
        <meta content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">


        <div class="row product-info-row">
            <div class="col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_img_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-image">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1114399956659d8cb3762681_45300282', 'page_content_container', $this->tplIndex);
?>

            </div>

            <div class="col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_content_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-info">
                <div id="col-product-info">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_809324873659d8cb376fe70_58270605', 'page_header_container', $this->tplIndex);
?>


                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1793089482659d8cb37aed07_16707726', 'product_description_short', $this->tplIndex);
?>


                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1511222783659d8cb37b7994_17825394', 'product_customization', $this->tplIndex);
?>

                    <?php }?>

                    <div class="product-actions js-product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1713584468659d8cb37bc5e5_75170223', 'product_buy', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_998367173659d8cb37e4b06_82520191', 'hook_display_reassurance', $this->tplIndex);
?>


                        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs_placement'] == 'rightcolumn') {?>
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabh' || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabha') {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-h.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'section') {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'accordion') {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-accordion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php }?>
                        <?php }?>

                    </div>
                </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar']) {?>
            <div class="col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar'], ENT_QUOTES, 'UTF-8');?>
 sidebar product-sidebar">

                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'sidebar') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1779387026659d8cb37f9a64_52673285', 'product_accessories_sidebar', $this->tplIndex);
?>

                <?php }?>


                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>


            </div>
            <?php }?>

        </div>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAboveProductsTabs'),$_smarty_tpl ) );?>


        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs_placement'] == 'footer') {?>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabh' || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabha') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-h.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'section') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'accordion') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-accordion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs_placement'] == 'rightcolumn') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductElementor'),$_smarty_tpl ) );?>

            <?php }?>


        </div>
        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'footer') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62378107659d8cb3815a42_98331004', 'product_accessories_footer', $this->tplIndex);
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'sidebar') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1754532597659d8cb381e8e3_51000751', 'product_accessories_sidebar_mobile', $this->tplIndex);
?>

        <?php }?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_947244970659d8cb3826576_12935719', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1039253491659d8cb38291b1_27968058', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_503510463659d8cb382b105_70725248', 'page_footer_container', $this->tplIndex);
?>


    </section>
<?php
}
}
/* {/block 'content'} */
}
