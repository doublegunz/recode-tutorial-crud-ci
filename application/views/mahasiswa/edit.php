<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>   
<html>   
<head>   
	<title>edit Data Mahasiswa</title>   
</head>   
<body>  

	<?php echo form_open('mahasiswa/update'); ?>   
	<table border=0 width="45%" cellpadding="5" cellspacing="0">   
		<tr bgcolor="silver">   
			<td Colspan="3" align="center"><H3>DATA MAHASISWA</H3></td>   
		</tr>    
		<tr>   
			<td>NIM</td>   
			<td>:</td>   
			<td><input type="text" name="nim" value="<?php echo $mahasiswa['nim']; ?>" size="50"><?php echo form_error('nim'); ?></td>   
		</tr>    
		<tr>   
			<td>Nama</td>   
			<td>:</td>    
			<td><input type="text" name="nama" value="<?php echo $mahasiswa['nama']; ?>" size="50"><?php echo form_error('nama'); ?></td>   
		</tr>     
		<tr>   
			<td>Jenis Kelamin</td>   
			<td>:</td>    
			<td>   
			<input type="radio" name="jeniskelamin" <?php if($mahasiswa['jenis_kelamin'] == 'PRIA'){ echo 'checked';} ?> value="PRIA">PRIA   
			<input type="radio" name="jeniskelamin" <?php if($mahasiswa['jenis_kelamin'] == 'WANITA'){ echo 'checked';} ?> value="WANITA">WANITA   
			</td><?php echo form_error('jeniskelamin'); ?>   
		</tr>    
		<tr>   
			<td>Tempat Lahir</td>   
			<td>:</td>    
			<td><input type="text" name="tempat_lahir" value="<?php echo $mahasiswa['tempat_lahir']; ?>" size="50"><?php echo form_error('tempat_lahir'); ?></td>   
		</tr>   
		<tr>   
			<td>Tanggal lahir</td>   
			<td>:</td>    
			<td><input type="text" name="tanggal_lahir" value="<?php echo $mahasiswa['tanggal_lahir']; ?>" size="50"><?php echo form_error('tanggal_lahir'); ?></td>   
		</tr>      
		<tr>   
			<td></td>   
			<td></td>   
			<td>Format tanggal yyyy-mm-dd contoh: 1996-12-15</td>   
		</tr>   
		<tr>   
			<td>Alamat</td>   
			<td>:</td>   
			<td><textarea name="alamat" rows="2" cols="52"><?php echo $mahasiswa['alamat']; ?></textarea><?php echo form_error('alamat'); ?></td>   
		</tr>   
		<tr align="center">   
			<td colspan="3">
				<button type="submit" value="update" name="update">Update</button>  
				<button type="reset">Reset</button> 
				[<a href="<?php echo base_url(); ?>index.php/mahasiswa">Lihat Data Mahasiswa</a>]   
			</td>   
		</tr>    
	</table>   
	<?php echo form_close(); ?>   
</body>   
</html>   

