<?php
/* Smarty version 4.3.4, created on 2024-01-09 18:33:16
  from 'module:iqitreviewsviewstemplateshookproductreviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659dbb9c99cda9_72378700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e2c43225c6474cd13af44f54865472f0632719c' => 
    array (
      0 => 'module:iqitreviewsviewstemplateshookproductreviews.tpl',
      1 => 1704823163,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659dbb9c99cda9_72378700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
?>

<div id="iqit-reviews" class="mt-3">

    <div id="iqit-reviews-top">
        <div class="row justify-content-between align-items-center">

            <div class="col mb-3">
                <?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
                <div id="iqitreviews-snippet">


                <?php echo smarty_function_math(array('equation'=>"floor(x)",'x'=>$_smarty_tpl->tpl_vars['snippetData']->value['avarageRating'],'assign'=>'stars'),$_smarty_tpl);?>

                <span class="iqitreviews-rating">
            <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if (($_smarty_tpl->tpl_vars['stars']->value-(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) >= 1) {?>
                    <i class="fa fa-star iqit-review-star"></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['snippetData']->value['avarageRating']-(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null) > 0) {?>
                    <i class="fa fa-star-half-o iqit-review-star"></i>
                <?php } else { ?>
                    <i class="fa fa-star-o iqit-review-star"></i>
                <?php }?>
            <?php
}
}
?>
            </span>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snippetData']->value['reviewsNb'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>

            </div>
            <?php } else { ?>
            <div id="iqitreviews-snippet"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No reviews','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
</div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['allowGuests']->value || $_smarty_tpl->tpl_vars['isLogged']->value) {?>
            <div class="col col-auto mb-3">
                <button type="button" class="btn btn-primary " data-toggle="modal"
                        data-target="#iqit-reviews-modal">
                    <i class="fa fa-pencil-square-o"
                       aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write  review','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>

                </button>
            </div>
        <?php }?>

    </div> <!-- / .row -->
</div><!-- / #iqit-reviews-top -->


<div class="col-xs-12 alert alert-success hidden-xs-up"
     id="iqitreviews-productreview-form-success-alert">
</div>




<?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>

    <div id="iqitreviews-list">

        <?php echo '<script'; ?>
 type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "Product",
                    "id": "#product-snippet-id",
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( round((float) $_smarty_tpl->tpl_vars['snippetData']->value['avarageRating'], (int) 1, (int) 1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
                        "reviewCount": "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['snippetData']->value['reviewsNb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                  }
                }
            <?php echo '</script'; ?>
>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
?>

            <?php echo '<script'; ?>
 type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "Product",
                    "id": "#product-snippet-id",
                    "review": {
                        "@type": "Review",
                        "reviewBody": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['review']->value['comment'], ENT_QUOTES, 'UTF-8');?>
",
                        "name": "<?php $_prefixVariable1 = '';
$_tmp_array = isset($_smarty_tpl->tpl_vars['review']) ? $_smarty_tpl->tpl_vars['review']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = $_prefixVariable1;
$_smarty_tpl->_assignInScope('review', $_tmp_array);
if ($_prefixVariable1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['review']->value['title'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productName']->value, ENT_QUOTES, 'UTF-8');
}?>",
                        "reviewRating": {
                            "@type": "Rating",
                            "ratingValue": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['review']->value['rating'], ENT_QUOTES, 'UTF-8');?>
",
                            "worstRating": "1",
                            "bestRating": "5"
                        },
                        "datePublished": "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['review']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>
",
                        "author": {
                            "@type": "Person",
                            "name": "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['review']->value['customer_name'], ENT_QUOTES, 'UTF-8');?>
"
                        }
                    }
                }
            <?php echo '</script'; ?>
>

            

            <div class="iqitreviews-review">
                <hr />

                <div class="title"><strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['review']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong></div>

                <div class="rating">

                    <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= 5; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php if ($_smarty_tpl->tpl_vars['review']->value['rating'] <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
                            <i class="fa fa-star-o iqit-review-star"></i>
                        <?php } else { ?>
                            <i class="fa fa-star iqit-review-star"></i>
                        <?php }?>
                    <?php
}
}
?>
                </div>

                <div class="comment"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'nl2br' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['comment'] ));?>
</div>

                <div class="author">
                   <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
 <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['review']->value['customer_name'], ENT_QUOTES, 'UTF-8');?>
</span></span>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'on','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
 <span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['review']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>
</span>
                </div>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

</div>

<?php if ($_smarty_tpl->tpl_vars['allowGuests']->value || $_smarty_tpl->tpl_vars['isLogged']->value) {?>
    <div class="modal fade" id="iqit-reviews-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitreviews','controller'=>'actions','params'=>array('process'=>'addProductReview','ajax'=>1)),$_smarty_tpl ) );?>
"
                      method="post" id="iqitreviews-productreview-form">
                    <div class="modal-header">
                        <span class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write a review','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="col-xs-12 alert alert-success alert-warning hidden-xs-up"
                             id="iqitreviews-productreview-form-alert">
                        </div>


                        <div class="form-fields" id="iqitreviews-productreview-fields">

                            <input type="hidden" name="iqitreviews_id_product" id="iqitreviews_id_product"
                                   value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['idProduct']->value, ENT_QUOTES, 'UTF-8');?>
"/>

                            <?php if (!$_smarty_tpl->tpl_vars['isLogged']->value) {?>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="iqitreviews_customer_name"
                                               id="iqitreviews_customer_name" value=""
                                               placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'John','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
"/>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="iqitreviews_title"
                                           id="iqitreviews_title" value=""
                                           placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ex. Very good','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
</label>
                                <div class="col-md-6">
                                    <input class="rating " data-max="5" data-min="1" data-empty-value="0"
                                           value="5"
                                           id="iqitreviews_rating" name="iqitreviews_rating" type="number"
                                           data-icon-lib="fa"
                                           data-active-icon="fa-star iqit-review-star" data-inactive-icon="fa-star-o iqit-review-star"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
</label>
                                <div class="col-md-6">
                                         <textarea class="form-control" rows="3" name="iqitreviews_comment"
                                                   id="iqitreviews_comment"
                                                   placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your opinion about product','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
"></textarea>
                                </div>
                            </div>

                        </div>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" name="iqitreviews_submit"
                               id="iqitreviews_submit"
                               value=" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit review','d'=>'Modules.Iqitreviews.Shop'),$_smarty_tpl ) );?>
">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }
}
}
