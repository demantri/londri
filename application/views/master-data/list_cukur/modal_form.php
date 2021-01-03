<!-- Modal add -->
<div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="POST" action="<?php echo site_url('list_cukur/save') ?>">
      <div class="modal-body">

            <div class="form-group row">
                <label for="nama_list" class="col-sm-4 col-form-label">Detail Jasa</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="nama_list" name="nama_list" placeholder="Isi list" autocomplete="off">
                <div style="font-size:12px; color:red;">
                    <?php echo form_error('nama_list'); ?>
                </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Isi harga" autocomplete="off">
                <div style="font-size:12px; color:red;">
                    <?php echo form_error('harga'); ?>
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
<?php foreach ($list as $data) { ?>
<div class="modal fade" id="modal_form_<?= $data->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit List</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="<?php echo site_url('list_cukur/update') ?>">
        <div class="modal-body">

            <input type="hidden" name="id" value="<?= $data->id?>">

            <div class="form-group row">
                <label for="nama_list" class="col-sm-4 col-form-label">Detail Jasa</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="nama_list" name="nama_list" placeholder="Isi list" autocomplete="off" value="<?= $data->nama_list?>">
                <div style="font-size:12px; color:red;">
                    <?php echo form_error('nama_list'); ?>
                </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Isi harga" autocomplete="off" value="<?= $data->harga?>">
                <div style="font-size:12px; color:red;">
                    <?php echo form_error('harga'); ?>
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