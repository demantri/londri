<!-- Modal add -->
<div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="POST" action="<?php echo site_url('karyawan/save') ?>">
      <div class="modal-body">

            <div class="form-group row">
                <label for="nama_karyawan" class="col-sm-4 col-form-label">Nama Karyawan</label>
                <div class="col-sm-8">
                <input type="text" id="nama_karyawan" name="nama_karyawan" class="form-control" placeholder="Isi nama karyawan">
                <div style="font-size:12px; color:red;">
                    <?php echo form_error('nama_karyawan'); ?>
                </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="roles" class="col-sm-4 col-form-label">Roles</label>
                <div class="col-sm-8">
                <select name="id_role" id="roles" class="form-control">
                    <option value="">Pilih role</option>
                    <?php foreach ($roles as $r) { ?>
                    <option value="<?= $r->id ?>"><?= $r->roles ?></option>
                    <?php } ?>
                </select>
                <div style="font-size:12px; color:red;">
                    <?php echo form_error('id_role'); ?>
                </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="no_telp" class="col-sm-4 col-form-label">No Telepon</label>
                <div class="col-sm-8">
                <input type="number" min="0" name="no_telp_karyawan" id="no_telp" class="form-control" placeholder="Isi no telepon">
                <div style="font-size:12px; color:red;">
                    <?php echo form_error('no_telp_karyawan'); ?>
                </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                <textarea name="alamat_karyawan" id="alamat" cols="40" rows="5" placeholder="Isi alamat karyawan" class="form-control"></textarea>
                <div style="font-size:12px; color:red;">
                    <?php echo form_error('alamat_karyawan'); ?>
                </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                <input type="email" class="form-control" name="email_karyawan" placeholder="Isi email karyawan">
                <div style="font-size:12px; color:red;">
                    <?php echo form_error('email_karyawan'); ?>
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
<?php foreach ($karyawan as $data) { ?>
<div class="modal fade" id="modal_form_<?= $data->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Roles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="<?php echo site_url('karyawan/update') ?>">
        <div class="modal-body">

                <input type="hidden" name="id" value="<?= $data->id?>">

                <div class="form-group row">
                    <label for="nama_karyawan" class="col-sm-4 col-form-label">Nama Karyawan</label>
                    <div class="col-sm-8">
                    <input type="text" id="nama_karyawan" name="nama_karyawan" class="form-control" placeholder="Isi nama karyawan" value="<?= $data->nama_karyawan?>">
                    <div style="font-size:12px; color:red;">
                        <?php echo form_error('nama_karyawan'); ?>
                    </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="roles" class="col-sm-4 col-form-label">Roles</label>
                    <div class="col-sm-8">
                    <select name="id_role" id="roles" class="form-control">
                        <option value="">Pilih role</option>
                        <?php foreach ($roles as $r) { ?>
                        <option value="<?= $r->id ?>"<?php if ($r->id == $data->id_role) { ?> selected ="<?= $data->id_role?>"<?php } ?>><?= $r->roles ?></option>
                        <?php } ?>
                    </select>
                    <div style="font-size:12px; color:red;">
                        <?php echo form_error('id_role'); ?>
                    </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_telp" class="col-sm-4 col-form-label">No Telepon</label>
                    <div class="col-sm-8">
                    <input type="number" min="0" name="no_telp_karyawan" id="no_telp" class="form-control" placeholder="Isi no telepon" value="<?= $data->no_telp_karyawan?>">
                    <div style="font-size:12px; color:red;">
                        <?php echo form_error('no_telp_karyawan'); ?>
                    </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                    <textarea name="alamat_karyawan" id="alamat" cols="40" rows="5" placeholder="Isi alamat karyawan" class="form-control"><?= htmlspecialchars($data->alamat_karyawan); ?></textarea>
                    <div style="font-size:12px; color:red;">
                        <?php echo form_error('alamat_karyawan'); ?>
                    </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                    <input type="email" class="form-control" name="email_karyawan" placeholder="Isi email karyawan" value="<?= $data->email_karyawan?>">
                    <div style="font-size:12px; color:red;">
                        <?php echo form_error('email'); ?>
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