
<div class="main-body">
    <div class="page-wrapper">

        <div class="card">
            <div class="card-block">
                <h5>Menu <?= $page ?></h5>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title m-t-10">
                        <li class="breadcrumb-item">
                            <a href="#!">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Breadcrumb</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Simple Breadcrumb</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
        
        <div class="page-body">
            <!-- Basic table card start -->
            <div class="card">
                <div class="card-header">
                    <h5>Table <?= $page ?></h5>
                    <!-- <span>use class <code>table</code> inside table element</span> -->
                    <br>
                    <br>
                    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash')?>"></div>
                    <?php if ($this->session->flashdata('flash')) : ?>
                                
                    <?php endif; ?>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-plus"></i> Tambah Data</button>

                    <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Barang</th>
                                    <th>Satuan</th>
                                    <th>Kategori</th>
                                    <th>Harga Pokok</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Grosir</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <?php 
                                $no = 1;
                            ?>
                            <tbody>
                                <!-- <tr> -->
                                    <?php foreach ($data_v as $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama_barang'] ?></td>
                                            <td><?= $data['satuan'] ?></td>
                                            <td><?= $data['nama_kategori'] ?></td>
                                            <td><?= format_rp($data['harga_pokok']) ?></td>
                                            <td><?= format_rp($data['harga_jual']) ?></td>
                                            <td><?= format_rp($data['harga_grosir']) ?></td>
                                            <td><?= $data['stok'] ?></td>
                                            <td>
                                                <a class="button btn btn-md" data-toggle="modal" data-target="#modal-barang-edit<?= $data['id'] ?>"><i class="ti-pencil"></i></a>
                                                <a href="<?php echo site_url('barang/delete/'.$data['id'])?>" class="button btn btn-md tombol-hapus"><i class="ti-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <!-- </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->view('master-data/barang/modal-barang');?>
