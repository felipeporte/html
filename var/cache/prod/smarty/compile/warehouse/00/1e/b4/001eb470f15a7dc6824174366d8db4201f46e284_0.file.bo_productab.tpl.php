<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:07:32
  from '/var/www/html/modules/iqitextendedproduct/views/templates/admin/bo_productab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8b64908c65_89536093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '001eb470f15a7dc6824174366d8db4201f46e284' => 
    array (
      0 => '/var/www/html/modules/iqitextendedproduct/views/templates/admin/bo_productab.tpl',
      1 => 1704823162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8b64908c65_89536093 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info" role="alert">
    <p class="alert-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You need to save product to changes took effect','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</p>
</div>

<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products videos:','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</h2>

<div id="iqitvideos-container" class="clearfix mb-2">
    <div class="form-inline mb-2">
        <fieldset class="form-group mr-3">
            <label class="mb-2 text-left mr-3"
                style="justify-content: left;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'YouTube/Vimeo/Dailymotion link','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</label>
            <input type="text" class="form-control" id="iqitthreesixty-videourl"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ex.: https://www.youtube.com/watch?v=GQxGetpe1ws','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
"></input>
        </fieldset>
        <button type="button" class="btn btn-primary"
            id="iqitthreesixty-addvideo"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add video','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</button>
    </div>

    <div class="form-inline mb-2">
        <fieldset class="form-group mr-3">
            <label class="mb-2 text-left mr-3"
                style="justify-content: left;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Self-hosted mp4 video','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</label>


            <div class="input-group">
                <input type="text" id="iqitthreesixty-hosted-videourl"
                    placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'path to .mp4 file','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
" class="form-control"
                    name="iqitthreesixty-hosted-videourl" />

                <div class="input-group-append">
                    <span class="input-group-text"><a
                            href="<?php echo $_smarty_tpl->tpl_vars['bAdminUrl']->value;?>
filemanager/dialog.php?type=2&field_id=iqitthreesixty-hosted-videourl"
                            class="js-iframe-upload-video" data-input-name="iqitthreesixty-hosted-videourl"
                            type="button">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select video','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
 
                            <i class="icon-external-link"></i>
                            </a> 
                    </span>
                </div>
            </div>
        </fieldset>
        <button type="button" class="btn btn-primary"
            id="iqitthreesixty-addvideo-hosted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add video','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</button>
    </div>

    <div id="iqitvideos-list" class="iqitvideos-list row">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productVideoContent']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
            <div class="iqitvideo-preview js-iqitvideo-preview col-3" data-video-url="<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
"
                data-video-provider="<?php echo $_smarty_tpl->tpl_vars['video']->value['p'];?>
">
                <div class="vcontent">
                    <div class="info clearfix">
                        <span><i class="material-icons">drag_handle</i></span>
                        <button type="button" class="btn btn-danger-outline btn-sm float-right js-delete-video"><i
                                class="material-icons">delete_forever</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>

                        </button>
                    </div>
                    <div class="video">
                        <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'hosted') {?>
                            <video width="200" height="150" controls class="js-video-hosted video-hosted">
                            <source src="<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" type="video/mp4" class="js-video-hosted-source">
                         </video>
                            <?php } else { ?>
                                <iframe class="iframe js-video-iframe" width="200" height="150"
                            <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'youtube') {?>src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'dailymotion') {?>src="//www.dailymotion.com/embed/video/<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'vimeo') {?>src="//player.vimeo.com/video/<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" <?php }?>></iframe>
                            <?php }?>

     
              
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
    <input name="iqitextendedproduct[videos]" id="iqitextendedproduct_videos" type="hidden" value="" />
</div>


<div id="iqitvideo-previewsample">
    <div class="iqitvideo-preview js-iqitvideo-preview col-3" data-video-url="" data-video-provider="">
        <div class="vcontent">
            <div class="info clearfix">
                <span><i class="material-icons">drag_handle</i></span>
                <button type="button" class="btn btn-danger-outline btn-sm float-right js-delete-video"><i
                        class="material-icons">delete_forever</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>

                </button>
            </div>
            <div class="video">
                <iframe class="iframe js-video-iframe" width="200" height="150"
                    src=""></iframe>

                <video width="200" height="150" controls class="js-video-hosted video-hosted">
                     <source src="movie.mp4" type="video/mp4" class="js-video-hosted-source">
                </video>
            </div>
        </div>
    </div>
</div>

<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'360 product view','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</h2>

<div id="iqitthreesixty-images-container" class="m-b-2">
    <div id="iqitthreesixty-images-dropzone" class="panel dropzone ui-sortable col-md-12"
        url-upload="<?php echo $_smarty_tpl->tpl_vars['threeSixtyActionUrl']->value;?>
&step=1" url-delete="<?php echo $_smarty_tpl->tpl_vars['threeSixtyActionUrl']->value;?>
&step=2">
        <div id="iqitthreesixty-images-dropzone-error" class="text-danger"></div>
        <div class="dz-default dz-message threesixty-openfilemanager">
            <i class="material-icons">add_a_photo</i><br />
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drop images here','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
<br />
            <a><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or select files','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</a><br />
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threeSixtyContent']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
            <div class="dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle" data-name="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
">
                <div class="dz-image bg" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
');"></div>
                <div class="dz-details">
                    <div class="dz-size"><span data-dz-size=""></span></div>
                    <div class="dz-filename"><span data-dz-name=""></span></div>
                </div>
                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress="" style="width: 100%;"></span>
                </div>
                <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                <div class="dz-success-mark"></div>
                <div class="dz-error-mark"></div>
                <a class="dz-remove-custom" href="javascript:undefined;"
                    data-dz-remove=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="fallback">
            <input name="threesixty-file-upload" type="file" multiple />
        </div>


    </div>
    <input name="iqitextendedproduct[threesixty]" id="iqitextendedproduct_threesixty" type="hidden" value="" />
    <div class="form-group">
        <button type="button" class="btn btn-danger btn-lg btn-block" id="iqitthreesixty-removeall"><i
                class="material-icons">delete_forever</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove all','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>

        </button>
    </div>

</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
views/js/admin_tab.js"><?php echo '</script'; ?>
><?php }
}
