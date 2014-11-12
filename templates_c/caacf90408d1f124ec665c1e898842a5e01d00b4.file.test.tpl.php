<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-10-22 08:15:11
         compiled from "./templates/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83575784654478eb5f20983-74527172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caacf90408d1f124ec665c1e898842a5e01d00b4' => 
    array (
      0 => './templates/test.tpl',
      1 => 1413987306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83575784654478eb5f20983-74527172',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54478eb60f6999_55681595',
  'variables' => 
  array (
    'contact' => 0,
    'result' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54478eb60f6999_55681595')) {function content_54478eb60f6999_55681595($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("setting.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<html>
  <head>
    <title><?php echo $_smarty_tpl->getConfigVariable('pageTitle');?>
</title>
  </head>
  <body bgcolor="<?php echo $_smarty_tpl->getConfigVariable('bodyColor');?>
">
    id : <?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
 <br>
    name : <?php echo $_smarty_tpl->tpl_vars['contact']->value->name;?>
 <br>    
    email : <?php echo $_smarty_tpl->tpl_vars['contact']->value->email;?>
 <br>    
    phone : <?php echo $_smarty_tpl->tpl_vars['contact']->value->phone;?>
 <br>   
    
    <select>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <option <?php if ($_smarty_tpl->tpl_vars['row']->value['id']==$_GET['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</option>
        <?php } ?> 
</select>
 
  </body>
</html><?php }} ?>
