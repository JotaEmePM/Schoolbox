<?php /* Smarty version Smarty-3.1.19, created on 2014-09-12 09:57:29
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:303435412ec9f0dc7f9-35191405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be3564ffde1a19dcc486ff98539552bd6960435' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1410526643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303435412ec9f0dc7f9-35191405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5412ec9f156219_20282886',
  'variables' => 
  array (
    'titulo' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5412ec9f156219_20282886')) {function content_5412ec9f156219_20282886($_smarty_tpl) {?><!DOCTYPE html>

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
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</a>
        <?php } ?>
    </body>
</html>
<?php }} ?>
