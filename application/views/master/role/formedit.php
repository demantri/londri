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
			<h3>Form Edit</h3>
		</div>
		
            <div class="module-body">
                <?php foreach ($role as $data) { ?>
                    <form class="form-horizontal row-fluid" method="POST" action="<?php echo site_url('role/update')?>">
                    <input type="hidden" value="<?= $data['id']?>" name="id">

                    <div class="control-group">
						<label class="control-label" for="basicinput">Role</label>
						<div class="controls">
                            <input type="text" name="role" id="role" placeholder="Tuliskan role baru.." class="span8" value="<?= $data['role']?>">
                        </div>
                        <div class="controls" style="color: red; font-size: 10px;">
							<?php echo form_error('role')?>
						</div>
                    </div>
    
					<div class="control-group">
						<div class="controls">
							<a href="<?php echo site_url('role')?>" class="button btn btn-default">Kembali</a>
							<input type="submit" name="" value="Simpan" class="btn btn-success">
						</div>
					</div>
				</form>
                <?php } ?>
		</div>
	</div> 
</body>
</html>