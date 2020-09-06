<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-06 12:41:33
  from 'C:\xampp\htdocs\users\View\Users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f54bcdd1b56e1_65946673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5c5845aaf1161815b3c4b47cec2089d974e48d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\users\\View\\Users.tpl',
      1 => 1599388754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f54bcdd1b56e1_65946673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2661873145f54bcdd1aabb7_43316155', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block 'body'} */
class Block_2661873145f54bcdd1aabb7_43316155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2661873145f54bcdd1aabb7_43316155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <p id="success"></p>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="d-flex justify-content-around">
                <a href="../index.php" class="col-sm-6">
                    <h2>Manage <b>Users</b></h2>
                </a>

                <a href="#addUserModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i>
                    <span>Add New User</span></a>

            </div>
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>NO</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>CITY</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? sizeof($_smarty_tpl->tpl_vars['userList']->value)-1+1 - (0) : 0-(sizeof($_smarty_tpl->tpl_vars['userList']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <tr id="<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
">
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
                        <a  href="../Controller/UserController.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
"  class="edit" data-toggle="modal" >
                            <i class="material-icons update"
                               data-toggle="tooltip"
                               title="Edit">&#xE254;</i>
                        </a>
                        <a href="../Controller/UserController.php?act=delete&id=<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
" class="delete" data-id="<?php echo $_smarty_tpl->tpl_vars['userList']->value[$_smarty_tpl->tpl_vars['i']->value]->id;?>
"
                           data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                                  title="Delete">&#xE872;</i></a>
                    </td>
                </tr>
            <?php }
}
?>
            </tbody>
        </table>
    </div>
</div>

<!-- Add User Modal HTML -->
    <div id="addUserModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="user_form" action="../Controller/UserController.php" method="post">
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
                        <button type="submit" class="btn btn-success" id="btn-add" name="addRecord">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block 'body'} */
}
