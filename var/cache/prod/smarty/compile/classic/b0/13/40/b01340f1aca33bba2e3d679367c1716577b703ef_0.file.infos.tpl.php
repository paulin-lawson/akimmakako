<?php
/* Smarty version 3.1.48, created on 2024-07-17 07:01:45
  from 'C:\wamp64\www\akimpresta\modules\ps_checkpayment\views\templates\hook\infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66976c597ee3b4_69774267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b01340f1aca33bba2e3d679367c1716577b703ef' => 
    array (
      0 => 'C:\\wamp64\\www\\akimpresta\\modules\\ps_checkpayment\\views\\templates\\hook\\infos.tpl',
      1 => 1720451955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66976c597ee3b4_69774267 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
<img src="../modules/ps_checkpayment/logo.png" style="float:left; margin-right:15px;" height="60">
<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept payments by check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</strong></p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment'.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
