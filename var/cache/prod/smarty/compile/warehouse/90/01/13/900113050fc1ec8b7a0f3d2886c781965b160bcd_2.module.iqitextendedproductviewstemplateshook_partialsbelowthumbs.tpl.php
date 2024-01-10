<?php
/* Smarty version 4.3.4, created on 2024-01-09 18:33:17
  from 'module:iqitextendedproductviewstemplateshook_partialsbelowthumbs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659dbb9d490007_34545706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '900113050fc1ec8b7a0f3d2886c781965b160bcd' => 
    array (
      0 => 'module:iqitextendedproductviewstemplateshook_partialsbelowthumbs.tpl',
      1 => 1704823162,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659dbb9d490007_34545706 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['productVideoContent']->value)) && $_smarty_tpl->tpl_vars['productVideoContent']->value) {?>
    <button class="btn btn-secondary mr-1 ml-1" data-button-action="open-iqitvideos" type="button" data-toggle="modal"
            data-target="#iqit-iqitvideos-modal">
        <i class="fa fa-play"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Play videos','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>

    </button>
    <div class="modal fade js-iqit-iqitvideos-modal" id="iqit-iqitvideos-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Videos','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="iqitvideos-block" class="iqitvideos-block">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productVideoContent']->value, 'video');
$_smarty_tpl->tpl_vars['video']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->do_else = false;
?>
                            <div class="iqitvideo">
                            <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'hosted') {?>
                                <video width="100%" height="300" controls class="video-hosted">
                                    <source src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['id'], ENT_QUOTES, 'UTF-8');?>
" type="video/mp4">
                                </video>
                                <?php } else { ?>
                                <iframe class="iframe" width="100%" height="300"
                                        <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'youtube') {?>src="//www.youtube-nocookie.com/embed/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['id'], ENT_QUOTES, 'UTF-8');?>
?rel=0&showinfo=0"<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'dailymotion') {?>src="//www.dailymotion.com/embed/video/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['video']->value['p'] == 'vimeo') {?>src="//player.vimeo.com/video/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['video']->value['id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                ></iframe>
                            <?php }?>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['isThreeSixtyContent']->value)) && $_smarty_tpl->tpl_vars['isThreeSixtyContent']->value) {?>
    <button class="btn btn-secondary mr-1 ml-1" data-button-action="open-iqitthreesixty" type="button" data-toggle="modal"
            data-target="#iqit-threesixty-modal">
        <i class="fa fa-arrows-h"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'360 image','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>

    </button>
    <div class="modal fade js-iqit-threesixty-modal" id="iqit-threesixty-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag or swipe on image','mod'=>'iqitextendedproduct'),$_smarty_tpl ) );?>
</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="iqit-threesixty" data-threesixty="<?php echo $_smarty_tpl->tpl_vars['threeSixtyContent']->value;?>
"><i class="fa fa-circle-o-notch fa-spin fa-2x icon-tidi-load"></i></div>
                </div>
            </div>
        </div>
    </div>
<?php }?>






<?php }
}
