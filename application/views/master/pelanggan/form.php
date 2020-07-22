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
			<h3>Form Pelanggan</h3>
		</div>
		<div class="module-body">
				<form class="form-horizontal row-fluid" method="POST" action="<?php echo site_url('master/pelanggan/save')?>">
                    
                    <div class="control-group">
						<label class="control-label" for="basicinput">Nama Lengkap</label>
						<div class="controls">
							<input type="text" name="nama" id="basicinput" placeholder="Tulis nama lengkap ..." class="span8" autocomplete="off">
						</div>
                    </div>
    
					<div class="control-group">
						<label class="control-label" for="basicinput">Alamat</label>
						<div class="controls">
							<textarea class="span8" name="alamat" rows="5" placeholder="Tulis alamat lengkap ..." autocomplete="off"></textarea>
						</div>
                    </div>

                    <div class="control-group">
						<label class="control-label" for="basicinput">No Telp</label>
						<div class="controls">
							<input type="text" name="no_telp" id="basicinput" placeholder="087xxxxxx" class="span8" autocomplete="off">
						</div>
                    </div>
    
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-success">Submit Form</button>
						</div>
					</div>
				</form>
		</div>
	</div>
</body>
</html>