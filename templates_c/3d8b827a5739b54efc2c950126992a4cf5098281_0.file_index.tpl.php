<?php
/* Smarty version 5.0.2, created on 2024-04-15 15:13:01
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_661d43fddfc971_45438799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d8b827a5739b54efc2c950126992a4cf5098281' => 
    array (
      0 => 'index.tpl',
      1 => 1713121415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
))) {
function content_661d43fddfc971_45438799 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/templates';
$_smarty_tpl->renderSubTemplate('file:main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <a href="/login" class="btn btn-primary">Войти</a>

<?php }
}
