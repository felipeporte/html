<?php
/* Smarty version 4.3.4, created on 2024-01-09 18:33:17
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/product-variants.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659dbb9d599ea7_21797790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0835a7ddb11d9e7371af90cc4985b01030f07805' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/product-variants.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659dbb9d599ea7_21797790 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-variants js-product-variants">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'id_attribute_group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['group']->value['attributes'])) {?>
        <div class="clearfix product-variants-item product-variants-item-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
            <span class="form-control-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'select') {?>
                <div class="custom-select2">
                <select
                        id="group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
                        aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                        data-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
                        name="group[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]"
                        class="form-control form-control-select">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"
                                title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?> <?php if ($_smarty_tpl->tpl_vars['group']->value['attributes_quantity'][$_smarty_tpl->tpl_vars['id_attribute']->value] <= 0) {?> class="attribute-not-in-stock"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>


                      </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'color') {?>
                <ul id="group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                        <li class="float-left input-container <?php if ($_smarty_tpl->tpl_vars['group']->value['attributes_quantity'][$_smarty_tpl->tpl_vars['id_attribute']->value] <= 0) {?> attribute-not-in-stock<?php }?>" data-toggle="tooltip" data-animation="false" data-placement="top"  data-container= ".product-variants" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                            <input class="input-color" type="radio" data-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   name="group[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                            <span
                                    <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?>
                                        class="color texture" style="background-image: url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)"
                                    <?php } elseif ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']) {?>
                                        class="color" style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
"
                                    <?php }?>
                            ><span class="attribute-name sr-only"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'radio') {?>
                <ul id="group_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
                        <li class="input-container float-left <?php if ($_smarty_tpl->tpl_vars['group']->value['attributes_quantity'][$_smarty_tpl->tpl_vars['id_attribute']->value] <= 0) {?> attribute-not-in-stock<?php }?>">
                            <input class="input-radio" type="radio" data-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   name="group[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]"
                                   title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                            <span class="radio-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
        </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>




<?php }
}
