<?php
/* Smarty version 4.3.4, created on 2024-01-09 18:33:17
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/_product_partials/product-tabs-h.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659dbb9d6fc7c0_39147783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5365eee1212da53ffdb37661b46773fc02404335' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/_product_partials/product-tabs-h.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_659dbb9d6fc7c0_39147783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1820111033659dbb9d68dfe8_93828500', 'product_tabs');
?>

<?php }
/* {block 'product_description'} */
class Block_1398021300659dbb9d6bf742_86334681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="product-description">
                        <div class="rte-content"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs_placement'] == 'footer') {?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'productElementorDescription');?>

                        <?php }?>
                    </div>
                <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_1869609405659dbb9d6c6d88_77351250 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_1252483333659dbb9d6c8f67_92900981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <div class="tab-pane in" id="attachments">
                        <section class="product-attachments">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
                                <div class="attachment">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>

                                        </a>
                                    <p> <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</a></p>
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                        <i class="fa fa-download" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                                        (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                                    </a>
                                    <hr />
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </section>
                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_miniature'} */
class Block_523244382659dbb9d6df047_98565385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'richData'=>true,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
                                        <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_tab'} */
class Block_1992536051659dbb9d6dbe21_01727493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="products row products-grid">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_523244382659dbb9d6df047_98565385', 'product_miniature', $this->tplIndex);
?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                        <?php
}
}
/* {/block 'product_accessories_tab'} */
/* {block 'product_tabs'} */
class Block_1820111033659dbb9d68dfe8_93828500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_tabs' => 
  array (
    0 => 'Block_1820111033659dbb9d68dfe8_93828500',
  ),
  'product_description' => 
  array (
    0 => 'Block_1398021300659dbb9d6bf742_86334681',
  ),
  'product_details' => 
  array (
    0 => 'Block_1869609405659dbb9d6c6d88_77351250',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_1252483333659dbb9d6c8f67_92900981',
  ),
  'product_accessories_tab' => 
  array (
    0 => 'Block_1992536051659dbb9d6dbe21_01727493',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_523244382659dbb9d6df047_98565385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="tabs product-tabs">
    <a name="products-tab-anchor" id="products-tab-anchor"> &nbsp;</a>
        <ul id="product-infos-tabs" class="nav nav-tabs">
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs_placement'] == 'footer') {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "productElementorDescription", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductElementor'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php }?>

                <?php $_smarty_tpl->_assignInScope('isDescriptionExist', false);?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['description'] || ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'productElementorDescription') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'productElementorDescription') != '')) {?>
                <?php $_smarty_tpl->_assignInScope('isDescriptionExist', true);?>

                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab"
                       href="#description">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                    </a>
                </li>
            <?php }?>
            <li class="nav-item  <?php if (!$_smarty_tpl->tpl_vars['product']->value['grouped_features']) {?>empty-product-details<?php }?>" id="product-details-tab-nav">
                <a class="nav-link<?php if (!$_smarty_tpl->tpl_vars['isDescriptionExist']->value) {?> active<?php }?>" data-toggle="tab"
                   href="#product-details-tab">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#attachments">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                    </a>
                </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'tab') {?>
                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#accessories-tab">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                        </a>
                    </li>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_desc']) {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value))) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "manufacturerElementorDescription", null, null);
if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs_placement'] == 'footer') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayManufacturerElementor','manufacturerId'=>$_smarty_tpl->tpl_vars['product_manufacturer']->value->id),$_smarty_tpl ) );
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'manufacturerElementorDescription') != '' || $_smarty_tpl->tpl_vars['product_manufacturer']->value->description != '') {?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#brand-tab">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'About','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php }?>
            <?php }?>
            <?php }?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                <li class="nav-item">
                    <a  data-toggle="tab"
                       href="#extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value == "class") {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="nav-link <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['val']->value != '') {?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    > <?php echo $_smarty_tpl->tpl_vars['extra']->value['title'];?>
</a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>


        <div id="product-infos-tabs-content"  class="tab-content">
            <?php if ($_smarty_tpl->tpl_vars['isDescriptionExist']->value) {?>
            <div class="tab-pane in active" id="description">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1398021300659dbb9d6bf742_86334681', 'product_description', $this->tplIndex);
?>

            </div>
            <?php }?>
            <div class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['isDescriptionExist']->value) {?> in active<?php }?>"
                 id="product-details-tab"
            >

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1869609405659dbb9d6c6d88_77351250', 'product_details', $this->tplIndex);
?>


            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1252483333659dbb9d6c8f67_92900981', 'product_attachments', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'tab') {?>
                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <div class="tab-pane in" id="accessories-tab">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1992536051659dbb9d6dbe21_01727493', 'product_accessories_tab', $this->tplIndex);
?>

                    </div>
                <?php }?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_desc']) {?>

            <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value))) {?>
                <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'manufacturerElementorDescription') != '' || $_smarty_tpl->tpl_vars['product_manufacturer']->value->description != '') {?>
                 <div class="tab-pane in" id="brand-tab">
                        <div class="rte-content">
                            <?php echo $_smarty_tpl->tpl_vars['product_manufacturer']->value->description;?>

                        </div>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'manufacturerElementorDescription');?>

                    </div>
            <?php }?>
            <?php }?>
            <?php }?>


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
            <div
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value == "class") {?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="tab-pane  in  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "id") {?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['val']->value != '') {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>




            >
            <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    </div>

    <div class="iqit-accordion" id="product-infos-accordion-mobile" role="tablist" aria-multiselectable="true"></div>
<?php
}
}
/* {/block 'product_tabs'} */
}
