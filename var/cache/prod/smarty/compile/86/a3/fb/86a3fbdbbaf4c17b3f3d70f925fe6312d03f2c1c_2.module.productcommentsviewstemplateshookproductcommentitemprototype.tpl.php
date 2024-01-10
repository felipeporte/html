<?php
/* Smarty version 4.3.4, created on 2024-01-09 18:33:17
  from 'module:productcommentsviewstemplateshookproductcommentitemprototype.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659dbb9d7b1fb4_96264736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a3fbdbbaf4c17b3f3d70f925fe6312d03f2c1c' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductcommentitemprototype.tpl',
      1 => 1704823163,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659dbb9d7b1fb4_96264736 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-comment-list-item row" data-product-comment-id="@COMMENT_ID@" data-product-id="@PRODUCT_ID@">
  <div class="col-md-3 col-sm-3 comment-infos">
    <div class="grade-stars" data-grade="@COMMENT_GRADE@"></div>
    <div class="comment-date">
      @COMMENT_DATE@
    </div>
    <div class="comment-author">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By %1$s','sprintf'=>array('@CUSTOMER_NAME@'),'d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </div>
  </div>

  <div class="col-md-9 col-sm-9 comment-content">
    <h4>@COMMENT_TITLE@</h4>
    <p>@COMMENT_COMMENT@</p>
    <div class="comment-buttons btn-group">
      <?php if ($_smarty_tpl->tpl_vars['usefulness_enabled']->value) {?>
        <a class="useful-review">
          <i class="fa fa-thumbs-up thumb_up" aria-hidden="true"></i>
          <span class="useful-review-value">@COMMENT_USEFUL_ADVICES@</span>
        </a>
        <a class="not-useful-review">
        <i class="fa fa-thumbs-down thumb_down" aria-hidden="true"></i>
     
          <span class="not-useful-review-value">@COMMENT_NOT_USEFUL_ADVICES@</span>
        </a>
      <?php }?>
      <a class="report-abuse" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
      <i class="fa fa-flag" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</div>
<?php }
}
