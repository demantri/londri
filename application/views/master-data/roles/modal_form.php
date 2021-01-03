<!-- Modal add -->
<div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Roles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="POST" action="<?php echo site_url('roles/save') ?>">
      <div class="modal-body">

            <div class="form-group row">
                <label for="roles" class="col-sm-4 col-form-label">Roles</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="roles" name="roles" placeholder="Isi roles" autocomplete="off">
                <div style="font-size:12px; color:red;">
                    <?php echo form_error('roles'); ?>
                </div>
                </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
        <input type="submit" name="" value="Simpan" class="btn btn-sm btn-success">
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal edit -->
<?php foreach ($roles as $data) { ?>
<div class="modal fade" id="modal_form_<?= $data->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Roles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="<?php echo site_url('roles/update') ?>">
        <div class="modal-body">

                <input type="hidden" name="id" value="<?= $data->id?>">

                <div class="form-group row">
                    <label for="roles" class="col-sm-4 col-form-label">Roles</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="roles" name="roles" placeholder="Isi roles" autocomplete="off" value="<?= $data->roles?>">
                    <div style="font-size:12px; color:red;">
                        <?php echo form_error('roles'); ?>
                    </div>
                    </div>
                </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
            <input type="submit" name="" value="Ubah" class="btn btn-sm btn-success">
        </div>
        </form>
        </div>
    </div>
</div>
<?php } ?>