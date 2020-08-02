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
			<h3>Form Londri</h3>
		</div>
		<div class="module-body">
				<form class="form-horizontal row-fluid" method="POST" action="<?php echo site_url('pegawai/save')?>" enctype="multipart/form-data">
                    
                    <div class="control-group">
						<label class="control-label">Nama Lengkap</label>
						<div class="controls">
                            <input type="text" name="nama_pegawai" class="span8" autocomplete="off" placeholder="Nama Pegawai">
                            <span class="controls" style="color: red; font-size: 10px;"><?php echo form_error('nama_pegawai')?></span>
						</div>
                    </div>

                    <div class="control-group">
						<label class="control-label" for="basicinput">Alamat</label>
						<div class="controls">
							<textarea class="span8" name="alamat_pegawai" rows="5" placeholder="Tulis alamat lengkap ..." autocomplete="off"></textarea>
						</div>
						<div class="controls" style="color: red; font-size: 10px;">
												<?php echo form_error('alamat_pegawai')?>
											</div>
                    </div>

                    <div class="control-group">
						<label class="control-label" for="basicinput">No Telp</label>
						<div class="controls">
							<input type="text" name="telp_pegawai" id="basicinput" placeholder="087xxxxxx" class="span8" autocomplete="off">
						</div>
						<div class="controls" style="color: red; font-size: 10px;">
												<?php echo form_error('telp_pegawai')?>
											</div>
                    </div>
                    
                    <div class="control-group">
						<label class="control-label" for="basicinput">Foto</label>
						<div class="controls">
                                <input type="file" name="foto" id="foto"  placeholder="1000" class="span8" autocomplete="off">
                                <span class="controls" style="color: red; font-size: 10px;"><?php echo form_error('foto')?></span>
						</div>
                    </div>

                    <input type="hidden" value="<?= date('Y-m-d H:i:s') ?>" name="updated_at" class="hidden">
    
					<div class="control-group">
						<div class="controls">
							<!-- <button type="submit" class="btn btn-default">Kembali</button> -->
							<a href="<?php echo site_url('londri')?>" class="button btn btn-default">Kembali</a>
							<input type="submit" name="" value="Simpan" class="btn btn-success">
						</div>
					</div>
                </form>
                
		</div>
    </div>
</body>
</html>

<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function(){
        $(document).on('change', '#status', function(){
            if($('#status').val() == 'member'){
                    $('#diskon').val('2000');
            } else if ($('#status').val() == 'non'){
                $('#diskon').val('0');
            }else{
                $('#diskon').attr('readonly','readonly').val('Pilih!');
            }
        })
    });
</script> -->

