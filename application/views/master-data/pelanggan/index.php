
<div class="main-body">
    <div class="page-wrapper">
        
        <div class="card">
            <div class="card-block">
                <h5>Daftar Pelanggan</h5>
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
                    <h5>Tabel Daftar Pelanggan</h5>
                    <br>
                    <br>
                    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash')?>"></div>
                    <?php if ($this->session->flashdata('flash')) : ?>
                                
                    <?php endif; ?>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_form"><i class="ti-plus"></i> Tambah</button>

                    <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table dataTable table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th style="width: 20px;" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $no = 1;
                            foreach ($pelanggan as $data) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->nama_pelanggan?></td>
                                <td><?= $data->alamat?></td>
                                <td><?= $data->no_telp?></td>
                                <td class="text-center">
                                    <a href="#" data-toggle="modal" data-target="#modal_form_<?= $data->id ?>" class="btn btn-sm btn-outline-warning"><i class="fa fa-pencil"></i> Ubah</a>
                                    <a href="<?= site_url("pelanggan/delete/". $data->id)?>" class="btn btn-sm btn-outline-danger tombol-hapus"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view("master-data/pelanggan/modal_form");?>