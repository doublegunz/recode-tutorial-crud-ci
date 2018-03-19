<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>   
<html>   
<head>   
	<title>Ubah Data Mahasiswa</title>   
</head>   
<body>   
	<?php   
	$nim        =   $data_mahasiswa['nim'];   
	$nama        =   $data_mahasiswa['nama'];   
	$tempat_lahir   =   $data_mahasiswa['tempat_lahir'];   
	$tanggal_lahir   =   $data_mahasiswa['tanggal_lahir'];   
	$alamat        =   $data_mahasiswa['alamat'];   
	$jeniskelamin   =   $data_mahasiswa['jenis_kelamin'];     
	?>  

	<?php echo form_open('crud_ci/ubah_data'); ?>   
	<table border=0 width="45%" cellpadding="5" cellspacing="0">   
		<tr bgcolor="silver">   
			<td Colspan="3" align="center"><H3>DATA MAHASISWA</H3></td>   
		</tr>    
		<tr>   
			<td>NIM</td>   
			<td>:</td>   
			<td><input type="text" name="nim" value="<?php echo $nim; ?>" size="50"><?php echo form_error('nim'); ?></td>   
		</tr>    
		<tr>   
			<td>Nama</td>   
			<td>:</td>    
			<td><input type="text" name="nama" value="<?php echo $nama; ?>" size="50"><?php echo form_error('nama'); ?></td>   
		</tr>     
		<tr>   
			<td>Jenis Kelamin</td>   
			<td>:</td>    
			<td>   
			<input type="radio" name="jeniskelamin" <?php if($jeniskelamin == 'PRIA'){ echo 'checked';} ?> value="PRIA">PRIA   
			<input type="radio" name="jeniskelamin" <?php if($jeniskelamin == 'WANITA'){ echo 'checked';} ?> value="WANITA">WANITA   
			</td><?php echo form_error('jeniskelamin'); ?>   
		</tr>    
		<tr>   
			<td>Tempat Lahir</td>   
			<td>:</td>    
			<td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" size="50"><?php echo form_error('tempat_lahir'); ?></td>   
		</tr>   
		<tr>   
			<td>Tanggal lahir</td>   
			<td>:</td>    
			<td><input type="text" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" size="50"><?php echo form_error('tanggal_lahir'); ?></td>   
		</tr>      
		<tr>   
			<td></td>   
			<td></td>   
			<td>Format tanggal yyyy-mm-dd contoh: 1996-12-15</td>   
		</tr>   
		<tr>   
			<td>Alamat</td>   
			<td>:</td>   
			<td><textarea name="alamat" rows="2" cols="52"><?php echo $alamat; ?></textarea><?php echo form_error('alamat'); ?></td>   
		</tr>   
		<tr align="center">   
			<td colspan="3">   
				<input type="submit" value="Ubah">   
				<input type="reset" value="Batal">   
				[<a href="<?php echo base_url(); ?>index.php/crud_ci">Lihat Data Mahasiswa</a>]   
			</td>   
		</tr>    
	</table>   
	<?php echo form_close(); ?>   
</body>   
</html>   

