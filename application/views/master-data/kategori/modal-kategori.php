<!-- Modal add -->
<div class="modal fade" id="modal-kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="POST" action="<?php echo site_url('kategori/save') ?>">
      <div class="modal-body">
            <div class="form-group row">
                <label for="nama_kategori" class="col-sm-3 col-form-label">Nama Kategori</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Kategori" autocomplete="off">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <input type="submit" name="" value="Simpan Data" class="btn btn-primary">

      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal edit -->
<?php foreach ($kategori as $data) { ?>
<div class="modal fade" id="modal-kategori-edit<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="POST" action="<?php echo site_url('kategori/update') ?>">
        <div class="modal-body">
          <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <div class="form-group row">
                    <label for="nama_kategori" class="col-sm-3 col-form-label">Nama Kategori</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" value="<?= $data['nama_kategori'] ?>" id="nama_kategori" name="nama_kategori" placeholder="Kategori" autocomplete="off">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <input type="submit" name="" value="Simpan Data" class="btn btn-primary">
        </div>
        </form>
    </div>
  </div>
</div>
<?php } ?>