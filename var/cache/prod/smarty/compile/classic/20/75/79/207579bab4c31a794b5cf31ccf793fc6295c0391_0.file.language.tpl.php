<?php
/* Smarty version 3.1.48, created on 2024-07-17 06:38:05
  from 'C:\wamp64\www\akimpresta\modules\blockreassurance\views\templates\admin\tabs\content\config_elements\language.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669766cd1e10e6_98965591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '207579bab4c31a794b5cf31ccf793fc6295c0391' => 
    array (
      0 => 'C:\\wamp64\\www\\akimpresta\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content\\config_elements\\language.tpl',
      1 => 1720451952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669766cd1e10e6_98965591 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
<div class="form-group">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Languages','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">
        <div class="input-group col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-12">
                <select class="custom-select" name="psr-language">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang'] == $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>selected="selected"<?php }?>
                                value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'htmlall','UTF-8' ));?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
}
