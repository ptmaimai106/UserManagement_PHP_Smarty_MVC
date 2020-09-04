<?php /* Smarty version 3.1.27, created on 2020-09-04 07:43:57
         compiled from "View/Users.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9423700965f51f03d6adc75_06342879%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6476aeea01f0eaa001b1fe9f4d035b3f752e86da' => 
    array (
      0 => 'View/Users.tpl',
      1 => 1599205142,
      2 => 'file',
    ),
    '7ff16eca0d38de2b666875655ec4bbab1dfd712c' => 
    array (
      0 => 'View/index.tpl',
      1 => 1599203684,
      2 => 'file',
    ),
    '305e1caea1293e65b363f612cec893bdcc4dcf0b' => 
    array (
      0 => '305e1caea1293e65b363f612cec893bdcc4dcf0b',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '9423700965f51f03d6adc75_06342879',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5f51f03d7ed526_03845685',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5f51f03d7ed526_03845685')) {
function content_5f51f03d7ed526_03845685 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9423700965f51f03d6adc75_06342879';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '9423700965f51f03d6adc75_06342879';
?>

<div class="container">
    <p id="success"></p>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="d-flex justify-content-center">
                <a href="../index.php" class="col-sm-6">
                    <h2>Manage <b>Users</b></h2>
                </a>

            </div>
            <div class="">
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i>
                    <span>Add New User</span></a>
                <a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i>
                    <span>Delete</span></a>
            </div>
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
                </th>
                <th>NO</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>CITY</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? sizeof($_smarty_tpl->tpl_vars['userList']->value)-1+1 - (0) : 0-(sizeof($_smarty_tpl->tpl_vars['userList']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <tr id="<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" class="user_checkbox" data-user-id=<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
                            <label for="checkbox2"></label>
                        </span>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->name;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->email;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->phone;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->city;?>
</td>

                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                            <i class="material-icons update"
                               data-toggle="tooltip"
                               data-id="<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
"
                               data-name="<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->name;?>
"
                               data-email="<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->email;?>
"
                               data-phone="<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->phone;?>
"
                               data-city="<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->city;?>
"
                               title="Edit">&#xE254;</i>
                        </a>
                        <a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
"
                           data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                                  title="Delete">&#xE872;</i></a>
                    </td>
                </tr>
            <?php }} ?>

            </tbody>
        </table>


    </div>
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="user_form" action="../Controller/UserController.php">
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>NAME</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>PHONE</label>
                        <input type="phone" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>CITY</label>
                        <input type="city" id="city" name="city" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="1" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-success" id="btn-add">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="update_form" action="../Controller/UserController.php">
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_u" name="id" class="form-control" required>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name_u" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email_u" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>PHONE</label>
                        <input type="phone" id="phone_u" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="city" id="city_u" name="city" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="2" name="type">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-info" id="update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="../Controller/UserController.php">

                <div class="modal-header">
                    <h4 class="modal-title">Delete User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_d" name="id" class="form-control">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="button" class="btn btn-danger" id="delete">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>