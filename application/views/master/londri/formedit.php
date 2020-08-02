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
                <?php foreach ($londri as $data) { ?>
                    <form class="form-horizontal row-fluid" method="POST" action="<?php echo site_url('londri/update')?>">
                    <input type="text" value="<?= $data['id']?>" name="id" class="hidden">

                    <div class="control-group">
						<label class="control-label">Jenis Londri</label>
						<div class="controls">
                            <input type="text" name="jenis_londri" class="span8" autocomplete="off" placeholder="Sepatu" value="<?= $data['jenis_londri']?>">
                            <span class="controls" style="color: red; font-size: 10px;"><?php echo form_error('jenis_londri')?></span>
						</div>
                    </div>

                    <div class="control-group">
						<label class="control-label">Satuan</label>
						<div class="controls">
                            <input type="text" name="satuan" id="satuan" placeholder="kg" class="span8" autocomplete="off" value="<?= $data['satuan']?>">
                            <span class="controls" style="color: red; font-size: 10px;"><?php echo form_error('satuan')?></span>
						</div>
                    </div>
                    
                    <div class="control-group">
						<label class="control-label" for="basicinput">Harga</label>
						<div class="controls">
                            <div class="input-append">
                                <input type="text" name="harga" id="harga"  placeholder="1000" class="span8" autocomplete="off" value="<?= $data['harga']?>"><span class="add-on">IDR</span>
                                <span class="controls" style="color: red; font-size: 10px;"><?php echo form_error('harga')?></span>
                            </div>
						</div>
                    </div>

                    <div class="control-group">
						<div class="controls">
							<!-- <button type="submit" class="btn btn-default">Kembali</button> -->
							<a href="<?php echo site_url('londri')?>" class="button btn btn-default">Kembali</a>
							<input type="submit" name="" value="Simpan" class="btn btn-success">
						</div>
					</div>
				</form>
                <?php } ?>
		</div>
	</div> 
</body>
</html>

<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function(){
        $(document).on('change', '#status', function(){
            if($('#status').val() == 'Member Baru'){
                    $('#diskon').val('2000');
            } else if ($('#status').val() == 'Berhenti'){
                $('#diskon').val('0');
            }else{
                $('#diskon').attr('readonly','readonly').val('Belum memilih status diskon');
            }
        })
    });
</script> -->