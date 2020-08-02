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
			<h3>Form Daftar Member</h3>
		</div>
		<div class="module-body">
				<form class="form-horizontal row-fluid" method="POST" action="<?php echo site_url('member/save')?>">
                    
                    <div class="control-group">
						<label class="control-label" for="nm_pelanggan">Pelanggan</label>
						<div class="controls">
							<select tabindex="1" name="id_pelanggan" id="pelanggan" data-placeholder="Select here.." class="span8">
								<option value="">Silahkan pilih pelanggan ..</option>
                                <?php foreach ($pelanggan as $data) { ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                                <?php }?>
                            </select>
                            <span class="controls" style="color: red; font-size: 10px;"><?php echo form_error('id_pelanggan')?></span>
                        </div>
                    </div>
                    
                    <div class="control-group">
						<label class="control-label">Status Member</label>
						<div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" id="status" name="status">
								<option value="">Pilih status ... </option>
								<option value="Member Baru">Member Baru</option>
								<option value="Berhenti">Berhenti</option>
                            </select>
                            <span class="controls" style="color: red; font-size: 10px;"><?php echo form_error('status')?></span>
						</div>
                    </div>
                    
                    <div class="control-group">
						<label class="control-label" for="basicinput">Diskon</label>
						<div class="controls">
                            <div class="input-append">
                                <input type="text" name="diskon" id="diskon"  placeholder="1000" class="span8" readonly><span class="add-on">IDR</span>
                            </div>
						</div>
                    </div>

                    <div class="control-group">
						<label class="control-label" for="basicinput">Tanggal Daftar</label>
						<div class="controls">
							<input type="text" id="tgl_daftar" name="tgl_daftar" id="basicinput" class="span8" value="<?= date('Y-m-d') ?>" autocomplete="off" readonly>
						</div>
						<!-- <div class="controls" style="color: red; font-size: 10px;">
							<?php echo form_error('nama')?>
						</div> -->
                    </div>
    
					<div class="control-group">
						<div class="controls">
							<!-- <button type="submit" class="btn btn-default">Kembali</button> -->
							<a href="<?php echo site_url('member')?>" class="button btn btn-default">Kembali</a>
							<input type="submit" name="" value="Simpan" class="btn btn-success">
						</div>
					</div>
                </form>
                
		</div>
    </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function(){
        $(document).on('change', '#status', function(){
            if($('#status').val() == 'Member Baru'){
                    $('#diskon').val('2000');
            } else if ($('#status').val() == 'Berhenti'){
                $('#diskon').val('0');
            }else{
                $('#diskon').attr('readonly','readonly').val('Pilih!');
            }
        })
    });
</script>

