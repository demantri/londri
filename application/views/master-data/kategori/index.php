
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
                    <br>
                    <br>
                    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash')?>"></div>
                    <?php if ($this->session->flashdata('flash')) : ?>
                                
                    <?php endif; ?>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-kategori"><i class="ti-plus"></i> Tambah Data</button>

                    <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php 
                                $no = 1;
                            ?>
                            <tbody>
                                <!-- <tr> -->
                                    <?php foreach ($kategori as $data) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama_kategori'] ?></td>
                                            <td>
                                                <a class="button btn btn-md" data-toggle="modal" data-target="#modal-kategori-edit<?= $data['id'] ?>"><i class="ti-pencil"></i></a>
                                                <a href="<?php echo site_url('kategori/delete/'.$data['id'])?>" class="button btn btn-md tombol-hapus"><i class="ti-trash"></i></a>
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

<?php $this->view('master-data/kategori/modal-kategori');?>