<?php /* Smarty version 3.1.27, created on 2020-09-04 07:14:45
         compiled from "View/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13112127955f51e9657d30a6_85987698%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff16eca0d38de2b666875655ec4bbab1dfd712c' => 
    array (
      0 => 'View/index.tpl',
      1 => 1599203684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13112127955f51e9657d30a6_85987698',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f51e9658bbea5_65051463',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f51e9658bbea5_65051463')) {
function content_5f51e9658bbea5_65051463 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13112127955f51e9657d30a6_85987698';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

Wellcome
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>