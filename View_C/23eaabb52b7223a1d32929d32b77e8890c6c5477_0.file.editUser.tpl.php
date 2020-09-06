<?php /* Smarty version 3.1.27, created on 2020-09-06 11:14:03
         compiled from "C:\xampp\htdocs\users\View\editUser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9776443375f54a85b0488f5_48065008%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23eaabb52b7223a1d32929d32b77e8890c6c5477' => 
    array (
      0 => 'C:\\xampp\\htdocs\\users\\View\\editUser.tpl',
      1 => 1599383640,
      2 => 'file',
    ),
    '3e1ca85dc05989e58eeb58db35910118584647e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\users\\View\\index.tpl',
      1 => 1599278243,
      2 => 'file',
    ),
    '1506e62c02d648b55d6088f0adf775a5ac430f95' => 
    array (
      0 => '1506e62c02d648b55d6088f0adf775a5ac430f95',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '9776443375f54a85b0488f5_48065008',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f54a85b0bb6a7_42945125',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f54a85b0bb6a7_42945125')) {
function content_5f54a85b0bb6a7_42945125 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9776443375f54a85b0488f5_48065008';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '9776443375f54a85b0488f5_48065008';
?>

    <form id="update_form" action="../Controller/UserController.php" method="post">
        <div class="modal-header">
            <h2 class="modal-title">Edit User</h2>
        </div>
        <div class="modal-body">
            <input type="hidden" id="id_u" name="id" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->id;?>
" required>
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="name_u" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->name;?>
" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" id="email_u" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->email;?>
" required>
            </div>
            <div class="form-group">
                <label>PHONE</label>
                <input type="phone" id="phone_u" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->phone;?>
" required>
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="city" id="city_u" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value->city;?>
" required>
            </div>
        </div>
        <div class="modal-footer">
            <a href="../Controller/UserController.php" type="button" class="btn btn-default"  >Cancel</a>
            <button type="submit" class="btn btn-info" id="update" name="update-btn">Update</button>
        </div>
    </form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>