<?php
/* Smarty version 3.1.48, created on 2024-07-17 06:38:05
  from 'C:\wamp64\www\akimpresta\modules\blockreassurance\views\templates\admin\tabs\content\config_elements\title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669766cd426dd6_79388585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b777de05eba9f14c6b070cd22063fa14dc7e7cf' => 
    array (
      0 => 'C:\\wamp64\\www\\akimpresta\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content\\config_elements\\title.tpl',
      1 => 1720451952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669766cd426dd6_79388585 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group content_by_lang lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
 <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>inactive<?php }?>"
     data-type="title" data-lang="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">
        <div class="input-group col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-12">
                <input type="text" name="title-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" max="100"
                       class="form-control"
                       value="<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['allblock']->value[$_smarty_tpl->tpl_vars['block']->value['id_psreassurance']]['title'][$_prefixVariable3],'htmlall','UTF-8' ));
}?>">
            </div>
        </div>
        <div class="col-xs-12 help-block">
            <span class="limit_text">0</span>/100 characters
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
