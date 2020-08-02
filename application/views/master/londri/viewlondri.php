<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="module">
		<div class="module-head">
			<h3>Tables</h3>
		</div>
		<div class="module-body">
			<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash')?>"></div>
			<?php if ($this->session->flashdata('flash')) : ?>
						
			<?php endif; ?>
			<p>
                <a href="<?php echo site_url('londri/add')?>" class="button btn btn-info"><i class="menu-icon icon-plus"></i> Tambah</a>
            </p>
            <br>
			<table class="table table-striped datatable-1">
			  <thead>
				<tr>
				  <th>#</th>
				  <th>Londri</th>
				  <th>Satuan</th>
				  <th>Harga @satuan</th>
				  <th>Aksi</th>
				</tr>
              </thead>
              <?php
                $no = 1;
              ?>
			  <tbody>
				<?php foreach ($londri as $data) { ?>
                    <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $data['jenis_londri']?></td>
                    <td><?php echo $data['satuan']?></td>
					<td><?php echo format_rp($data['harga'])?></td>
					<td>
						<a href="<?php echo site_url('londri/edit/'.$data['id'])?>" class="button btn btn-warning"><i class="icon-edit"></i></a>
						<a href="<?php echo site_url('londri/delete/'.$data['id'])?>" class="button btn btn-danger tombol-hapus"><i class="icon-trash"></i></a>
					</td>
                  </tr>
                <?php } ?>
			  </tbody>
			</table>
			<br />
			<!-- <hr /> -->
			<br />
		</div>
	</div>
</body>
</html>