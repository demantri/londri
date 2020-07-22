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
			<h3>Form Edit Pelanggan</h3>
		</div>
		
            <div class="module-body">
                <?php foreach ($pelanggan as $data) { ?>
                    <form class="form-horizontal row-fluid" method="POST" action="<?php echo site_url('pelanggan/update')?>">
                    <input type="text" value="<?= $data->id?>" name="id" class="hidden">
                    <div class="control-group">
						<label class="control-label" for="basicinput">Nama Lengkap</label>
						<div class="controls">
							<input type="text" name="nama" id="basicinput" value="<?= $data->nama?>" placeholder="Tulis nama lengkap ..." class="span8" autocomplete="off">
						</div>
						<div class="controls" style="color: red; font-size: 10px;">
							<?php echo form_error('nama')?>
						</div>
                    </div>
    
					<div class="control-group">
						<label class="control-label" for="basicinput">Alamat</label>
						<div class="controls">
                            <textarea class="span8" name="alamat" id="alamat" rows="5" autocomplete="off"><?= $data->alamat ?></textarea>
						</div>
						<div class="controls" style="color: red; font-size: 10px;">
							<?php echo form_error('alamat')?>
						</div>
                    </div>

                    <div class="control-group">
						<label class="control-label" for="basicinput">No Telp</label>
						<div class="controls">
							<input type="text" name="no_telp" id="basicinput" value="<?= $data->no_telp?>" placeholder="087xxxxxx" class="span8" autocomplete="off">
						</div>
						<div class="controls" style="color: red; font-size: 10px;">
							<?php echo form_error('no_telp')?>
						</div>
                    </div>
    
					<div class="control-group">
						<div class="controls">
							<!-- <button type="submit" class="btn btn-default">Kembali</button> -->
							<a href="<?php echo site_url('pelanggan')?>" class="button btn btn-default">Kembali</a>
							<input type="submit" name="" value="Simpan" class="btn btn-success">
						</div>
                    </div>
				</form>
                <?php } ?>
		</div>
	</div> 
</body>
</html>