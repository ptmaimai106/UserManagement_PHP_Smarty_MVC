{extends file="index.tpl"}
{block name="body"}
    <div class="container">

        <form id="update_form" action="../Controller/UserController.php" method="post">
            <div class="modal-header">
                <h2 class="modal-title">Edit User</h2>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id_u" name="id" class="form-control" value="{$userInfo->id}" required>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" id="name_u" name="name" class="form-control" value="{$userInfo->name}" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="email_u" name="email" class="form-control" value="{$userInfo->email}" required>
                </div>
                <div class="form-group">
                    <label>PHONE</label>
                    <input type="phone" id="phone_u" name="phone" class="form-control" value="{$userInfo->phone}" required>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="city" id="city_u" name="city" class="form-control" value="{$userInfo->city}" required>
                </div>
            </div>
            <div class="modal-footer">
                <a href="../Controller/UserController.php" type="button" class="btn btn-default"  >Cancel</a>
                <button type="submit" class="btn btn-info" id="update" name="update-btn">Update</button>
            </div>
        </form>
    </div>
{/block}