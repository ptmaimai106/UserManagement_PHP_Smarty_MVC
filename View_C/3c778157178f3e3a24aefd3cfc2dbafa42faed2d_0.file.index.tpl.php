<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 01:27:56
  from '/var/www/html/users/View/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f558c9cb5bd56_39594679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c778157178f3e3a24aefd3cfc2dbafa42faed2d' => 
    array (
      0 => '/var/www/html/users/View/index.tpl',
      1 => 1599203684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f558c9cb5bd56_39594679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_603816695f558c9cb5b320_72653361', "body");
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "body"} */
class Block_603816695f558c9cb5b320_72653361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_603816695f558c9cb5b320_72653361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wellcome<?php
}
}
/* {/block "body"} */
}
