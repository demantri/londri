<!-- Modal add -->
<div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="POST" action="<?php echo site_url('pelanggan/save') ?>">
      <div class="modal-body">

            <div class="form-group row">
                <label for="nama_pelanggan" class="col-sm-4 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Isi nama pelanggan" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="no_telp" class="col-sm-4 col-form-label">No Telepon</label>
                <div class="col-sm-8">
                <input type="number" min="0" class="form-control" id="no_telp" name="no_telp" placeholder="Isi no telepon" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                <textarea name="alamat" id="alamat" cols="40" rows="5" class="form-control" placeholder="Isi alamat disini"></textarea>
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
<?php foreach ($pelanggan as $data) { ?>
<div class="modal fade" id="modal_form_<?= $data->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Pelanggan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="<?php echo site_url('pelanggan/update') ?>">
        <div class="modal-body">

                <input type="hidden" name="id" value="<?= $data->id?>">

                <div class="form-group row">
                    <label for="nama_pelanggan" class="col-sm-4 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Isi nama pelanggan" autocomplete="off" value="<?= $data->nama_pelanggan ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_telp" class="col-sm-4 col-form-label">No Telepon</label>
                    <div class="col-sm-8">
                        <input type="number" min="0" class="form-control" id="no_telp" name="no_telp" placeholder="Isi no telepon" autocomplete="off" value="<?= $data->no_telp ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea name="alamat" id="alamat" cols="40" rows="5" class="form-control" placeholder="Isi alamat disini"><?= htmlspecialchars($data->alamat); ?></textarea>
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