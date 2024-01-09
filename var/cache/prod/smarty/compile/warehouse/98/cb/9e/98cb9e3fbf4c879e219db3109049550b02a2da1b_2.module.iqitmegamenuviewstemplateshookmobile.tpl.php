<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:07
  from 'module:iqitmegamenuviewstemplateshookmobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb3d1d8b5_08998310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98cb9e3fbf4c879e219db3109049550b02a2da1b' => 
    array (
      0 => 'module:iqitmegamenuviewstemplateshookmobile.tpl',
      1 => 1704823163,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:iqitmegamenu/views/templates/hook/_partials/mobile_menu.tpl' => 1,
    'module:iqitmegamenu/views/templates/hook/_partials/mobile_menu_panel.tpl' => 1,
    'module:iqitmegamenu/views/templates/hook/_partials/submenu_content_mobile.tpl' => 2,
    'module:ps_languageselector/ps_languageselector-mobile-menu.tpl' => 1,
    'module:ps_currencyselector/ps_currencyselector-mobile-menu.tpl' => 1,
    'module:ps_customersignin/ps_customersignin-mobile-menu.tpl' => 1,
  ),
),false)) {
function content_659d8cb3d1d8b5_08998310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
	<div id="_desktop_iqitmegamenu-mobile">
		<div id="iqitmegamenu-mobile"
			class="mobile-menu js-mobile-menu <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['mm_type'] == 'push') {?> h-100 <?php }?> d-flex flex-column">

			<div class="mm-panel__header  mobile-menu__header-wrapper px-2 py-2">
				<div class="mobile-menu__header js-mobile-menu__header">

					<button type="button" class="mobile-menu__back-btn js-mobile-menu__back-btn btn">
						<span aria-hidden="true" class="fa fa-angle-left  align-middle mr-4"></span>
						<span class="mobile-menu__title js-mobile-menu__title paragraph-p1 align-middle"></span>
					</button>
					
				</div>
				<button type="button" class="btn btn-icon mobile-menu__close js-mobile-menu__close" aria-label="Close"
					data-toggle="dropdown">
					<span aria-hidden="true" class="fa fa-times"></span>
				</button>
			</div>

			<div class="position-relative mobile-menu__content flex-grow-1 mx-c16 my-c24 ">
				<ul
					class="<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['mm_type'] == 'push') {?>position-absolute h-100 <?php }?> w-100  m-0 mm-panel__scroller mobile-menu__scroller px-4 py-4">
					<li class="mobile-menu__above-content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAboveMobileMenu'),$_smarty_tpl ) );?>
</li>
						<?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['mm_content'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['mm_content'] == 'accordion') {?>
							<?php $_smarty_tpl->_subTemplateRender("module:iqitmegamenu/views/templates/hook/_partials/mobile_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>$_smarty_tpl->tpl_vars['mobile_menu']->value), 0, false);
?>
						<?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['mm_content'] == 'panel') {?>
							<?php $_smarty_tpl->_subTemplateRender("module:iqitmegamenu/views/templates/hook/_partials/mobile_menu_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>$_smarty_tpl->tpl_vars['mobile_menu']->value), 0, false);
?>
						<?php } else { ?>

		
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mobile_menu']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
									<li
										class="d-flex align-items-center mobile-menu__tab mobile-menu__tab--id-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['id_tab'], ENT_QUOTES, 'UTF-8');?>
 <?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['submenu_content'])) {?> mobile-menu__tab--has-submenu js-mobile-menu__tab--has-submenu<?php }?> js-mobile-menu__tab">
										<a class="flex-fill mobile-menu__link 
										<?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['mm_expand_trigger'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['mm_expand_trigger'] == 'entire-link') {?>		
											<?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['submenu_content'])) {?>js-mobile-menu__link--has-submenu<?php }?> 
										<?php }?>
										" <?php if (($_smarty_tpl->tpl_vars['tab']->value['url'])) {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['url'], ENT_QUOTES, 'UTF-8');?>
" <?php }?> <?php if ($_smarty_tpl->tpl_vars['tab']->value['new_window']) {?>target="_blank" rel="noopener noreferrer" <?php }?>>
											<?php if ($_smarty_tpl->tpl_vars['tab']->value['icon_type'] && !empty($_smarty_tpl->tpl_vars['tab']->value['icon_class'])) {?> 
												<i class="icon fa <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
 mobile-menu__tab-icon"></i>
											<?php }?>
											
											<?php if (!$_smarty_tpl->tpl_vars['tab']->value['icon_type'] && !empty($_smarty_tpl->tpl_vars['tab']->value['icon'])) {?>
												<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="mobile-menu__tab-icon mobile-menu__tab-icon--img" />
											<?php }?>

											<span class="js-mobile-menu__tab-title"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tab']->value['title'],'/n','<br />');?>
</span>

											<?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['label'])) {?>
												<span class="mobile-menu__legend mobile-menu__legend--id-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['id_tab'], ENT_QUOTES, 'UTF-8');?>
 ">
												<?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['legend_icon'])) {?> 
													<i class="icon fa <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['legend_icon'], ENT_QUOTES, 'UTF-8');?>
"></i>
												<?php }?> 
												<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['label'], ENT_QUOTES, 'UTF-8');?>

												</span>
											<?php }?>
										</a>
										<?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['submenu_content'])) {?>
											<span class="mobile-menu__arrow js-mobile-menu__link--has-submenu">
												<i class="fa fa-angle-right expand-icon" aria-hidden="true"></i>
											</span>
										<?php }?>

										<?php if ((isset($_smarty_tpl->tpl_vars['tab']->value['submenu_content_tabs']))) {?>
											<div class="mobile-menu__submenu mobile-menu__submenu--panel px-4 py-4 js-mobile-menu__submenu">
												<ul>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['submenu_content_tabs'], 'innertab', false, NULL, 'innertabscontent', array (
));
$_smarty_tpl->tpl_vars['innertab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['innertab']->value) {
$_smarty_tpl->tpl_vars['innertab']->do_else = false;
?>

														<li
															class="d-flex align-items-center mobile-menu__tab mobile-menu__tab--id-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['innertab']->value->id_tab, ENT_QUOTES, 'UTF-8');?>
 <?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->submenu_content)) {?> mobile-menu__tab--has-submenu js-mobile-menu__tab--has-submenu<?php }?> js-mobile-menu__tab">
															<a class="flex-fill mobile-menu__link <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['mm_expand_trigger'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['mm_expand_trigger'] == 'entire-link') {
if (!empty($_smarty_tpl->tpl_vars['innertab']->value->submenu_content)) {?>js-mobile-menu__link--has-submenu<?php }
}?> "
																<?php if (($_smarty_tpl->tpl_vars['innertab']->value->url)) {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['innertab']->value->url, ENT_QUOTES, 'UTF-8');?>
" <?php }?>
																<?php if ($_smarty_tpl->tpl_vars['innertab']->value->new_window) {?>target="_blank" rel="noopener noreferrer" <?php }?>>

																	<?php if ($_smarty_tpl->tpl_vars['innertab']->value->icon_type && !empty($_smarty_tpl->tpl_vars['innertab']->value->icon_class)) {?> 
																		<i class="icon fa <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['innertab']->value->icon_class, ENT_QUOTES, 'UTF-8');?>
 mobile-menu__tab-icon"></i>
																	<?php }?>
																	
																	<?php if (!$_smarty_tpl->tpl_vars['innertab']->value->icon_type && !empty($_smarty_tpl->tpl_vars['innertab']->value->icon)) {?>
																		<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['innertab']->value->icon, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['innertab']->value->title, ENT_QUOTES, 'UTF-8');?>
" class="mobile-menu__tab-icon mobile-menu__tab-icon--img" />
																	<?php }?>
																
																	<span class="js-mobile-menu__tab-title"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['innertab']->value->title,'/n','<br />');?>
</span>

																<?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->label)) {?>
																	<span
																		class="mobile-menu__legend mobile-menu__legend--id-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['innertab']->value->id_tab, ENT_QUOTES, 'UTF-8');?>
"> <?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->legend_icon)) {?> <i
																		class="icon fa <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['innertab']->value->legend_icon, ENT_QUOTES, 'UTF-8');?>
"></i><?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['innertab']->value->label, ENT_QUOTES, 'UTF-8');?>
</span>
																<?php }?>
															</a>
															<?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->submenu_content)) {?>
																<span class="mobile-menu__arrow js-mobile-menu__link--has-submenu">
																	<i class="fa fa-angle-right expand-icon" aria-hidden="true"></i>
																</span>
															<?php }?>

															<?php if (!empty($_smarty_tpl->tpl_vars['innertab']->value->submenu_content)) {?>
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['innertab']->value->submenu_content, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
																	<div class="mobile-menu__submenu mobile-menu__submenu--panel px-4 py-4 js-mobile-menu__submenu">
																		<?php $_smarty_tpl->_subTemplateRender("module:iqitmegamenu/views/templates/hook/_partials/submenu_content_mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['element']->value), 0, true);
?>
																	</div>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															<?php }?>

														</li>

													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													<ul>
											</div>
										<?php } else { ?>

											<?php if (!empty($_smarty_tpl->tpl_vars['tab']->value['submenu_content'])) {?>
												<div class="mobile-menu__submenu mobile-menu__submenu--panel px-4 py-4 js-mobile-menu__submenu">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab']->value['submenu_content'], 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
														<?php $_smarty_tpl->_subTemplateRender("module:iqitmegamenu/views/templates/hook/_partials/submenu_content_mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['element']->value), 0, true);
?>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</div>
											<?php }?>
										<?php }?>
									</li>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
					<li class="mobile-menu__below-content"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBelowMobileMenu'),$_smarty_tpl ) );?>
</li>
				</ul>
			</div>

			<div class="js-top-menu-bottom mobile-menu__footer justify-content-between px-4 py-4">
				

			<div class="d-flex align-items-start mobile-menu__language-currency js-mobile-menu__language-currency">

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiBegin",'m'=>"ps_languageselector",'field'=>"widget_block",'tpl'=>"module:ps_languageselector/ps_languageselector-mobile-menu.tpl"),$_smarty_tpl ) );?>

				<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_languageselector"));
$_block_repeat=true;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"ps_languageselector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->_subTemplateRender('module:ps_languageselector/ps_languageselector-mobile-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php $_block_repeat=false;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"ps_languageselector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiEnd"),$_smarty_tpl ) );?>


			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiBegin",'m'=>"ps_currencyselector",'field'=>"widget_block",'tpl'=>"module:ps_currencyselector/ps_currencyselector-mobile-menu.tpl"),$_smarty_tpl ) );?>

				<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_currencyselector"));
$_block_repeat=true;
echo $_block_plugin3->smartyWidgetBlock(array('name'=>"ps_currencyselector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->_subTemplateRender('module:ps_currencyselector/ps_currencyselector-mobile-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php $_block_repeat=false;
echo $_block_plugin3->smartyWidgetBlock(array('name'=>"ps_currencyselector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiEnd"),$_smarty_tpl ) );?>


			</div>


			<div class="mobile-menu__user">
			<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="text-reset"><i class="fa fa-user" aria-hidden="true"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiBegin",'m'=>"ps_customersignin",'field'=>"widget_block",'tpl'=>"module:ps_customersignin/ps_customersignin-mobile-menu.tpl"),$_smarty_tpl ) );?>

				<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_customersignin"));
$_block_repeat=true;
echo $_block_plugin4->smartyWidgetBlock(array('name'=>"ps_customersignin"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->_subTemplateRender('module:ps_customersignin/ps_customersignin-mobile-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php $_block_repeat=false;
echo $_block_plugin4->smartyWidgetBlock(array('name'=>"ps_customersignin"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiEnd"),$_smarty_tpl ) );?>

			</a>
			</div>


			</div>
		</div>
	</div><?php }
}
