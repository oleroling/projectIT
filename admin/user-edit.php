<div class="modal fade" id="modal-lg<?php echo $data['user_id'] ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="model/userUpdate.php">
                <div class="modal-header">
                    <h4 class="modal-title">User Edit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="hidden" name="user_id" value="<?php echo $data['user_id'] ?>" />
                            <input type="text" name="first_name" value="<?php echo $data['first_name'] ?>" class="form-control" required="required" />
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text" name="last_name" value="<?php echo $data['last_name'] ?>" class="form-control" required="required" />
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="<?php echo $data['phone'] ?>" class="form-control" required="required" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo $data['email'] ?>" class="form-control" required="required" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name ="update" type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->