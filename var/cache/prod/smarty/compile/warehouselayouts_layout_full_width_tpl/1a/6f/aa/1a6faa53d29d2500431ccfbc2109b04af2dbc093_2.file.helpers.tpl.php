<?php
/* Smarty version 4.3.4, created on 2024-01-10 14:00:07
  from '/var/www/html/themes/warehouse/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659ecd179ccad5_72468781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a6faa53d29d2500431ccfbc2109b04af2dbc093' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_partials/helpers.tpl',
      1 => 1704835331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659ecd179ccad5_72468781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/warehouselayouts_layout_full_width_tpl/1a/6f/aa/1a6faa53d29d2500431ccfbc2109b04af2dbc093_2.file.helpers.tpl.php',
    'uid' => '1a6faa53d29d2500431ccfbc2109b04af2dbc093',
    'call_name' => 'smarty_template_function_renderLogo_511940107659ecd179c0912_75628402',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_511940107659ecd179c0912_75628402 */
if (!function_exists('smarty_template_function_renderLogo_511940107659ecd179c0912_75628402')) {
function smarty_template_function_renderLogo_511940107659ecd179c0912_75628402(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img class="logo img-fluid"
         src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
"
         <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'] != '') {?> srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'], ENT_QUOTES, 'UTF-8');?>
 2x"<?php }?>
         alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
         width="180px"
         height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
"
    >
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_511940107659ecd179c0912_75628402 */
}
