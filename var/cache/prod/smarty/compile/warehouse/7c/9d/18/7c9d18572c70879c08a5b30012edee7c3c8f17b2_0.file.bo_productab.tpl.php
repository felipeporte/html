<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:07:32
  from '/var/www/html/modules/iqitadditionaltabs/views/templates/admin/bo_productab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8b6487b005_02471852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c9d18572c70879c08a5b30012edee7c3c8f17b2' => 
    array (
      0 => '/var/www/html/modules/iqitadditionaltabs/views/templates/admin/bo_productab.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8b6487b005_02471852 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset class="form-group" style="margin-bottom: 5px;">
    <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hidden','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>
</label>
    <label for="iqitadditionaltabs_active"><input data-toggle="switch" id="iqitadditionaltabs_active"
            class="js-iqitadditionaltabs-field small" data-inverse="true" type="checkbox"
            name="iqitadditionaltabs[active]" checked>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Visible','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>
</label>
</fieldset>
<fieldset class="form-group">
    <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>
</label>

    <div class="input-group locale-input-group js-locale-input-group d-flex" id="iqitadditionaltabs_title" tabindex="1">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['language']->value['active']) {?>
                <div data-lang-id="<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
                    class="serp-default-title js-locale-input js-locale-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
 <?php if ($_smarty_tpl->tpl_vars['id_language']->value != $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?> d-none<?php }?> "
                    style="flex-grow: 1;">
                    <input type="text" id="iqitadditionaltabs_title_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
                        name="iqitadditionaltabs[title_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]" class="js-iqitadditionaltabs-field form-control">
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle js-locale-btn" type="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" id="iqitadditionaltabs_title_dropdown">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['id_language']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?> <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
 <?php break 1;
}?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </button>

            <div class="dropdown-menu dropdown-menu-right locale-dropdown-menu"
                aria-labelledby="iqitadditionaltabs_title_dropdown">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <span class="dropdown-item js-locale-item"
                        data-locale="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
</span>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</fieldset>




<fieldset class="form-group">
    <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Content','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>
</label>
    <div class="translations tabbable" id="iqitadditionaltabs_description">

        <ul class="translationsLocales nav nav-pills">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <li class="nav-item">
                    <a href="#" data-locale="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"
                        class="<?php if ($_smarty_tpl->tpl_vars['id_language']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?> active<?php }?> nav-link" data-toggle="tab"
                        data-target=".translationsFields-iqitadditionaltabs_description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

                    </a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <div class="translationsFields tab-content ">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['language']->value['active']) {?>
                    <div data-locale="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"
                        class="iqitadditionaltabs_description translationsFields-iqitadditionaltabs_description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 tab-pane panel panel-default <?php if ($_smarty_tpl->tpl_vars['id_language']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?> show active<?php }?> translation-field  translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"
                        style="border: 1px solid #bbcdd2;">
                        <textarea id="iqitadditionaltabs_description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
                            name="iqitadditionaltabs[description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]"
                            class="autoload_rte form-control js-iqitadditionaltabs-field"></textarea>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</fieldset>























<input type="hidden" id="iqitadditionaltabs_id_iqitadditionaltab" name="iqitadditionaltabs[id_iqitadditionaltab]"
    class="js-iqitadditionaltabs-field" value="" />

<div class="form-group clearfix">
    <div class="float-right">
        <button type="button" class="btn btn-primary" id="iqitadditionaltabs_add" data-product="<?php echo $_smarty_tpl->tpl_vars['idProduct']->value;?>
">
            <i class="material-icons">add</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>

        </button>

        <button type="button" class="btn btn-primary hide" id="iqitadditionaltabs_edit" data-product="<?php echo $_smarty_tpl->tpl_vars['idProduct']->value;?>
">
            <i class="material-icons">save</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save changes','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>

        </button>

        <button type="button" class="btn btn-danger-outline hide" id="iqitadditionaltabs_cancel">
            <i class="material-icons">cancel</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>

        </button>
    </div>
</div>

<div class="form-group">
    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tabs list','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>
</h2>

    <div class="list-group" id="iqitadditionaltab-list" data-product="<?php echo $_smarty_tpl->tpl_vars['idProduct']->value;?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
            <div class="list-group-item" id="iqitadditionaltabs_<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_iqitadditionaltab'];?>
">

                <div class="row">
                    <div class="col-12">
                        <div class="float-left">
                            <span><i class="material-icons">reorder</i></span>
                            #<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_iqitadditionaltab'];?>
 -
                            <div class="translations tabbable d-inline-block">
                                <div class="translationsFields tab-content">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['language']->value['active']) {?>
                                            <div data-locale="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"
                                                class="translationsFields-iqitadditionaltabs_title_p_<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_iqitadditionaltab'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 <?php if ($_smarty_tpl->tpl_vars['id_language']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?> show active<?php }?>   translation-field  translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['tab']->value['title'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
</div>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['tab']->value['is_shared']) {?>
                                <div>
                                    <span class="label color_field float-left"
                                        style="background-color:#108510;color:white;margin-top:5px;">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shared tab','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>

                                    </span>
                                </div>
                            <?php }?>
                        </div>
                        <div class="btn-group-action float-right">
                            <button type="button" class="js-iqitadditionaltabs-edit btn btn-default"
                                data-tab="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_iqitadditionaltab'];?>
">
                                <i class="material-icons">edit</i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>

                            </button>
                            <button type="button" class="js-iqitadditionaltabs-remove btn btn-danger"
                                data-tab="<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_iqitadditionaltab'];?>
">
                                <i class="material-icons">delete</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>

                            </button>
                        </div>
                    </div>
                </div>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<div id="tmpl-iqitadditionaltab-list-item" class="d-none">
    <div class="list-group-item" id="iqitadditionaltabs_::tabId::">

        <div class="row">
            <div class="col-12">
                <div class="float-left">
                    <span><i class="material-icons">reorder</i></span>
                    # ::tabId:: -
                    <div class="translations tabbable d-inline-block">
                        <div class="translationsFields tab-content">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['language']->value['active']) {?>
                                    <div data-locale="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"
                                        class="translationsFields-iqitadditionaltabs_title_p_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 <?php if ($_smarty_tpl->tpl_vars['id_language']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?> show active<?php }?>   translation-field  translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
">
                                        ::tabTitle<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
::</div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
                <div class="btn-group-action float-right">
                    <button type="button" class="js-iqitadditionaltabs-edit btn btn-default" data-tab="::tabId::">
                        <i class="material-icons">edit</i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>

                    </button>
                    <button type="button" class="js-iqitadditionaltabs-remove btn btn-danger" data-tab="::tabId::">
                        <i class="material-icons">delete</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqitadditionaltabs'),$_smarty_tpl ) );?>

                    </button>
                </div>
            </div>
        </div>

    </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
views/js/admin_tab.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var iqitadditionaltabs_languages = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value ));?>
;
<?php echo '</script'; ?>
><?php }
}
