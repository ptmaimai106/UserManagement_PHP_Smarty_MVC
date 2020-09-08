<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-07 09:18:19
  from '/var/www/html/users/View/editUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f55fadb115f24_94470780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '074f36595e9e03d37fafe8a187a95b5377c96839' => 
    array (
      0 => '/var/www/html/users/View/editUser.tpl',
      1 => 1599442022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f55fadb115f24_94470780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7387400035f55fadb0f0f10_01593020', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "body"} */
class Block_7387400035f55fadb0f0f10_01593020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7387400035f55fadb0f0f10_01593020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">

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
    </div>
<?php
}
}
/* {/block "body"} */
}
