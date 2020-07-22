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
			<p>
                <a href="<?php echo site_url('pelanggan/add')?>" class="button btn btn-info"><i class="menu-icon icon-plus"></i> Tambah</a>
            </p>
            <br>
			<table class="table table-striped datatable-1">
			  <thead>
				<tr>
				  <th>#</th>
				  <th>Nama Pelanggan</th>
				  <th>Alamat Pelanggan</th>
				  <th>No Telp</th>
				</tr>
              </thead>
              <?php
                $no = 1;
              ?>
			  <tbody>
				<?php foreach ($pelanggan as $data) { ?>
                    <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $data['nama']?></td>
                    <td><?php echo $data['alamat']?></td>
                    <td><?php echo $data['no_telp']?></td>
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