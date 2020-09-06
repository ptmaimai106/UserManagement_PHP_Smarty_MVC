<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-06 12:07:55
  from 'C:\xampp\htdocs\users\View\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f54b4fb618226_04352464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43c6987077d55079655f10b0068e29496e7d7f74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\users\\View\\index.tpl',
      1 => 1599278243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f54b4fb618226_04352464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10191847005f54b4fb617612_13951659', "body");
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "body"} */
class Block_10191847005f54b4fb617612_13951659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10191847005f54b4fb617612_13951659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Wellcome<?php
}
}
/* {/block "body"} */
}
