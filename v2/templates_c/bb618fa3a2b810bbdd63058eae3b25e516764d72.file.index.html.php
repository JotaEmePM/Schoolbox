<?php /* Smarty version Smarty-3.1.19, created on 2014-11-08 09:35:13
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:31889545de3d0ce23f3-39238638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb618fa3a2b810bbdd63058eae3b25e516764d72' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1412527208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31889545de3d0ce23f3-39238638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545de3d41792f2_67338957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545de3d41792f2_67338957')) {function content_545de3d41792f2_67338957($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categorias']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categorias']['iteration']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categorias']['iteration']%2==0) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</a>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</a>
            <?php }?>
            
        <?php } ?>
    </body>
</html>
<?php }} ?>
