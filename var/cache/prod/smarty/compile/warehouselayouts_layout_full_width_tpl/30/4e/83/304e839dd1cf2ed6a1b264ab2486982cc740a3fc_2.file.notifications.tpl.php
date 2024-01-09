<?php
/* Smarty version 4.3.4, created on 2024-01-09 15:13:07
  from '/var/www/html/themes/warehouse/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_659d8cb3e11cb7_55860927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '304e839dd1cf2ed6a1b264ab2486982cc740a3fc' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_partials/notifications.tpl',
      1 => 1704823163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659d8cb3e11cb7_55860927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

 <?php if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?>
  <aside id="notifications">
      <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2033394308659d8cb3dfa9c8_23703212', 'notifications_error');
?>

      <?php }?>
  
      <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1496074882659d8cb3e00c79_82142643', 'notifications_warning');
?>

      <?php }?>
  
      <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1892093237659d8cb3e06b38_86091310', 'notifications_success');
?>

      <?php }?>
  
      <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1212965163659d8cb3e0c975_44508941', 'notifications_info');
?>

      <?php }?>

  </aside>
  <?php }
}
/* {block 'notifications_error'} */
class Block_2033394308659d8cb3dfa9c8_23703212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_2033394308659d8cb3dfa9c8_23703212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <article class="alert alert-danger" role="alert" data-alert="danger">
            <ul>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </article>
        <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_1496074882659d8cb3e00c79_82142643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_1496074882659d8cb3e00c79_82142643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <article class="alert alert-warning" role="alert" data-alert="warning">
            <ul>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </article>
        <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_1892093237659d8cb3e06b38_86091310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_1892093237659d8cb3e06b38_86091310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <article class="alert alert-success" role="alert" data-alert="success">
            <ul>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </article>
        <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_1212965163659d8cb3e0c975_44508941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_1212965163659d8cb3e0c975_44508941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <article class="alert alert-info" role="alert" data-alert="info">
            <ul>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </article>
        <?php
}
}
/* {/block 'notifications_info'} */
}
