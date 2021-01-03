<!-- Modal add -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form method="POST" action="<?= site_url('barang/save')?>"> 
      <div class="modal-body">
            <div class="form-group row">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                <!-- <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" autocomplete="off"> -->
                    <select name="kategori_id" class="form-control">
                        <option value="">Pilih</option>
                        <?php foreach ($kategori as $data) { ?>
                            <option value="<?= $data['id'] ?>"><?= $data['nama_kategori'] ?></option>
                        <?php }?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-10">
                <!-- <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan" autocomplete="off"> -->
                <select name="satuan" class="form-control">
                    <option value="">Pilih</option>
                    <option value="Pcs">Pcs</option>
                    <option value="Unit">Unit</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="harga_pokok" class="col-sm-2 col-form-label">Harga Pokok</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="harga_pokok" id="harga_pokok" placeholder="Harga Pokok" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="harga_jual" id="harga_jual" placeholder="Harga Jual" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="harga_grosir" class="col-sm-2 col-form-label">Harga Grosir</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="harga_grosir" id="harga_grosir" placeholder="Harga Grosir" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="stok" id="stok" placeholder="Stok" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="stok_min" class="col-sm-2 col-form-label">Minimal Stok</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="stok_min" id="stok_min" placeholder="Minimal Stok" autocomplete="off">
                </div>
            </div>

            <!-- <div class="form-group row">
                <label for="tgl_input" class="col-sm-2 col-form-label">Tanggal Input</label>
                <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="tgl_input" id="tgl_input" placeholder="Tanggal Input" autocomplete="off">
                </div>
            </div> -->

            <?php
                $hari_ini = date('Y-m-d H:i:s');
            ?>
            <input type="hidden" name="tgl_input" value="<?= $hari_ini ?>">
            <input type="hidden" name="tgl_update">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <input type="submit" name="" value="Simpan Data" class="btn btn-primary">
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal edit -->
<?php foreach ($barang as $a) { ?>
<div class="modal fade bd-example-modal-lg" id="modal-barang-edit<?= $a['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form method="POST" action="<?= site_url('barang/update')?>"> 
        <input type="hidden" name="id" value="<?= $a['id'] ?>">
        <div class="modal-body">
            <div class="form-group row">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?= $a['nama_barang'] ?>" placeholder="Nama Barang" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                <!-- <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" autocomplete="off"> -->
                    <select name="kategori_id" class="form-control">
                        <option value="">Pilih</option>
                        <?php foreach ($kategori as $data) { ?>
                        <option value="<?= $data['id'] ?>" <?php if ($data['id'] == $a['kategori_id']): ?>selected="selected"<?php endif ?>><?= $data['nama_kategori'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-10">
                <!-- <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan" autocomplete="off"> -->
                <select name="satuan" class="form-control">
                    <option value="<?= $a['satuan'] ?>" selected="selected"><?= $a['satuan']?></option>
                    <option value="Pcs">Pcs</option>
                    <option value="Unit">Unit</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="harga_pokok" class="col-sm-2 col-form-label">Harga Pokok</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="harga_pokok" id="harga_pokok_edit" value="<?= format_rp_js($a['harga_pokok']) ?>" placeholder="Harga Pokok" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="harga_jual" id="harga_jual_edit" value="<?= format_rp_js($a['harga_jual']) ?>" placeholder="Harga Jual" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="harga_grosir" class="col-sm-2 col-form-label">Harga Grosir</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="harga_grosir" id="harga_grosir_edit" value="<?= format_rp_js($a['harga_grosir']) ?>" placeholder="Harga Grosir" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="stok" id="stok" value="<?= $a['stok'] ?>" placeholder="Stok" autocomplete="off">
                </div>
            </div>

            <div class="form-group row">
                <label for="stok_min" class="col-sm-2 col-form-label">Minimal Stok</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="stok_min" id="stok_min" value="<?= $a['stok_min'] ?>" placeholder="Minimal Stok" autocomplete="off">
                </div>
            </div>

            <!-- <div class="form-group row">
                <label for="tgl_input" class="col-sm-2 col-form-label">Tanggal Input</label>
                <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="tgl_input" id="tgl_input" value="<?= $a['tgl_input'] ?>" placeholder="Tanggal Input" autocomplete="off">
                </div>
            </div> -->

            <?php
                $hari_ini = date('Y-m-d H:i:s');
            ?>
            <input type="hidden" name="tgl_input" value="<?= $a['tgl_input'] ?>">
            <input type="hidden" name="tgl_update" value="<?= $hari_ini ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <input type="submit" name="" value="Simpan Data" class="btn btn-primary">
      </div>
    </form>
    </div>
  </div>
</div>
<?php } ?>

<?php $this->view('master-data/barang/script');?>