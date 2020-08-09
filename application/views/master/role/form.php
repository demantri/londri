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
			<h3>Form Daftar Role</h3>
		</div>
		<div class="module-body">
				<form class="form-horizontal row-fluid" method="POST" action="<?php echo site_url('role/save')?>">
                    
                    <div class="control-group">
						<label class="control-label" for="basicinput">Role</label>
						<div class="controls">
                            <input type="text" name="role" id="role"  placeholder="Tuliskan role baru.." class="span8">
                        </div>
                        <div class="controls" style="color: red; font-size: 10px;">
							<?php echo form_error('role')?>
						</div>
                    </div>
    
					<div class="control-group">
						<div class="controls">
							<!-- <button type="submit" class="btn btn-default">Kembali</button> -->
							<a href="<?php echo site_url('role')?>" class="button btn btn-default">Kembali</a>
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
            if($('#status').val() == 'Member Baru'){
                    $('#diskon').val('2000');
            } else if ($('#status').val() == 'Berhenti'){
                $('#diskon').val('0');
            }else{
                $('#diskon').attr('readonly','readonly').val('Pilih!');
            }
        })
    });
</script> -->

