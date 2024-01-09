<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:07:32
  from '/var/www/html/modules/iqitsizecharts/views/templates/admin/bo_productab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8b648c8a32_50643370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '787fb46dca767fbac4a7b271f8214f39d5ce3c96' => 
    array (
      0 => '/var/www/html/modules/iqitsizecharts/views/templates/admin/bo_productab.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8b648c8a32_50643370 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset class="form-group">
    <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select from created guides','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</label>

    <div class="row">
        <div class="col-md-6">
            <select  name="iqitsizecharts[chart]" id="iqitsizecharts_chart"  data-toggle="select2">
                <option value="-1" <?php if (!(isset($_smarty_tpl->tpl_vars['selectedChart']->value)) || (isset($_smarty_tpl->tpl_vars['selectedChart']->value)) && ($_smarty_tpl->tpl_vars['selectedChart']->value == -1)) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Inherit from category associations','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</option>
                <option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['selectedChart']->value)) && ($_smarty_tpl->tpl_vars['selectedChart']->value == 0)) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</option>
                <option value="-2" disabled>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose (it will override category associations)','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
 - </option>
                <?php if ((isset($_smarty_tpl->tpl_vars['charts']->value))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['charts']->value, 'chart');
$_smarty_tpl->tpl_vars['chart']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chart']->value) {
$_smarty_tpl->tpl_vars['chart']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['chart']->value['id_iqitsizechart'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['selectedChart']->value)) && ($_smarty_tpl->tpl_vars['chart']->value['id_iqitsizechart'] == $_smarty_tpl->tpl_vars['selectedChart']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['chart']->value['title'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </select>
        </div>
    </div>
    <hr>
    <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</div>
 <a href="<?php echo $_smarty_tpl->tpl_vars['moduleLink']->value;?>
" target="_blank"><i class="material-icons">open_in_new</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create new guide','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</a>
</fieldset>


<?php }
}
