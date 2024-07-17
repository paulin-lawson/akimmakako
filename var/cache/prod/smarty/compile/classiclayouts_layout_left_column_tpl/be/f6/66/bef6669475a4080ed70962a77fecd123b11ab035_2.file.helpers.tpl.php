<?php
/* Smarty version 3.1.48, created on 2024-07-12 05:36:53
  from 'C:\wamp64\www\akimpresta\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6690c0f5c0a709_40222783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bef6669475a4080ed70962a77fecd123b11ab035' => 
    array (
      0 => 'C:\\wamp64\\www\\akimpresta\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1720451956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6690c0f5c0a709_40222783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\akimpresta\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\be\\f6\\66\\bef6669475a4080ed70962a77fecd123b11ab035_2.file.helpers.tpl.php',
    'uid' => 'bef6669475a4080ed70962a77fecd123b11ab035',
    'call_name' => 'smarty_template_function_renderLogo_1582192616690c0f5ac40a8_32768754',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1582192616690c0f5ac40a8_32768754 */
if (!function_exists('smarty_template_function_renderLogo_1582192616690c0f5ac40a8_32768754')) {
function smarty_template_function_renderLogo_1582192616690c0f5ac40a8_32768754(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1582192616690c0f5ac40a8_32768754 */
}
