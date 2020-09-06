{extends file="index.tpl"}

{block name=body}
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
            {for $i=0 to sizeof($userList) -1}
                <tr id="{$userList[$i]->id}">
                    <td>{$i}</td>
                    <td>{$userList[$i]->name}</td>
                    <td>{$userList[$i]->email}</td>
                    <td>{$userList[$i]->phone}</td>
                    <td>{$userList[$i]->city}</td>
                    <td>
                        <a  href="../Controller/UserController.php?act=edit&id={$userList[$i]->id}"  class="edit" data-toggle="modal" >
                            <i class="material-icons update"
                               data-toggle="tooltip"
                               title="Edit">&#xE254;</i>
                        </a>
                        <a href="../Controller/UserController.php?act=delete&id={$userList[$i]->id}" class="delete" data-id="{$userList[$i]->id}"
                           data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                                  title="Delete">&#xE872;</i></a>
                    </td>
                </tr>
            {/for}
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

{/block}