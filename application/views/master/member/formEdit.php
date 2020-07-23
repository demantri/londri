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
                <?php foreach ($member as $data) { ?>
                    <form class="form-horizontal row-fluid" method="POST" action="<?php echo site_url('member/update')?>">
                    <input type="text" value="<?= $data['id']?>" name="id" class="hidden">

                    <div class="control-group">
						<label class="control-label" for="nm_pelanggan">Pelanggan</label>
						<div class="controls">
							<select tabindex="1" name="id_pelanggan" id="pelanggan" data-placeholder="Select here.." class="span8">
                                <option value="<?= $data['id_pelanggan'] ?>" selected><?= $data['nama'] ?></option>
                            </select>
                                <!-- <input type="text" value="<?= $data['nama'] ?>"> -->
						</div>
                    </div>
                    
                    <div class="control-group">
						<label class="control-label">Status Member</label>
						<div class="controls">
                            <select tabindex="1" data-placeholder="Select here.." class="span8" id="status" name="status">
                                <option value="<?= $data['status'] ?>" selected disabled><?= $data['status'] ?></option>
                                <option value="Member Baru">Member Baru</option>
                                <option value="Berhenti">Berhenti</option>
							</select>
						</div>
                    </div>
                    
                    <div class="control-group">
						<label class="control-label" for="basicinput">Diskon</label>
						<div class="controls">
							<input type="text" value="<?= $data['diskon']?>" id="diskon" name="diskon" id="basicinput" placeholder="Belum memilih status diskon" class="span8" autocomplete="off" readonly>
						</div>
                    </div>

                    <div class="control-group">
						<label class="control-label" for="basicinput">Tanggal Daftar</label>
						<div class="controls">
							<input type="text" id="tgl_daftar" name="tgl_daftar" id="basicinput" class="span8" value="<?= $data['tgl_daftar'] ?>" autocomplete="off" readonly>
						</div>
                    </div>
    
					<div class="control-group">
						<div class="controls">
							<!-- <button type="submit" class="btn btn-default">Kembali</button> -->
							<a href="<?php echo site_url('member')?>" class="button btn btn-default">Kembali</a>
							<input type="submit" name="" value="Simpan" class="btn btn-success">
						</div>
					</div>
				</form>
                <?php } ?>
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
                $('#diskon').attr('readonly','readonly').val('Belum memilih status diskon');
            }
        })
    });
</script>