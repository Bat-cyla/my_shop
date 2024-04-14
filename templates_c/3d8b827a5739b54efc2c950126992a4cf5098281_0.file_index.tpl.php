<?php
/* Smarty version 5.0.2, created on 2024-04-12 17:13:31
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_66196bbba5d580_74605955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d8b827a5739b54efc2c950126992a4cf5098281' => 
    array (
      0 => 'index.tpl',
      1 => 1712942008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66196bbba5d580_74605955 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/templates';
?><h1>Hello <?php echo $_smarty_tpl->getValue('data')['name'];?>
 <?php echo $_smarty_tpl->getValue('data')['surname'];?>
 welcome to Smarty!</h1><?php }
}
