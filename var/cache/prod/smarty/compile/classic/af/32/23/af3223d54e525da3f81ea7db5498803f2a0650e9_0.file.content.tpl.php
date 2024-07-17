<?php
/* Smarty version 3.1.48, created on 2024-07-17 06:38:03
  from 'C:\wamp64\www\akimpresta\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669766cbb7fe75_92568146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af3223d54e525da3f81ea7db5498803f2a0650e9' => 
    array (
      0 => 'C:\\wamp64\\www\\akimpresta\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1720451952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_669766cbb7fe75_92568146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
