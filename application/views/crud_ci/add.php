<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>   
<html>   
	<head>   
		<title>TAMBAH Data MAHASISWA</title>   
	</head>   
	<body>   
		<?php echo form_open('crud_ci/form_insert'); ?>   
		<table border=0 width="45%" cellpadding="5" cellspacing="0">   
			<tr bgcolor="silver">   
				<td Colspan="3" align="center"><H3>DATA MAHASISWA</H3></td>   
			</tr>    
			<tr>   
				<td>NIM</td>   
				<td>:</td>   
				<td><input type="text" name="nim" value="<?php echo set_value('nim'); ?>" size="50"><?php echo form_error('nim'); ?></td>   
			</tr>    
			<tr>   
				<td>Nama</td>   
				<td>:</td>   
				<td><input type="text" name="nama" value="<?php echo set_value('nama'); ?>" size="50"><?php echo form_error('nama'); ?></td>   
			</tr>    
			<tr>   
				<td>Jenis Kelamin</td>   
				<td>:</td>   
				<td>   
				<input type="radio" name="jeniskelamin" checked value="PRIA">PRIA   
				<input type="radio" name="jeniskelamin" value="WANITA">WANITA   
				</td><?php echo form_error('jeniskelamin'); ?>   
			</tr>   
			<tr>   
				<td>Tempat Lahir</td>   
				<td>:</td>   
				<td><input type="text" name="tempat_lahir" value="<?php echo set_value('tempat_lahir'); ?>" size="50"><?php echo form_error('tempat_lahir'); ?></td>   
			</tr>   
			<tr>   
				<td>Tanggal lahir</td>   
				<td>:</td>   
				<td><input type="text" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>" size="50"><?php echo form_error('tanggal_lahir'); ?></td>   
			</tr>    
			<tr>   
				<td></td>   
				<td></td>   
				<td><em>Format tanggal yyyy-mm-dd contoh: 1996-12-15</em></td>   
			</tr>   
			<tr>   
				<td>Alamat</td>   
				<td>:</td>   
				<td><textarea name="alamat" rows="2" value="<?php echo set_value('alamat'); ?>" cols="52"></textarea><?php echo form_error('alamat'); ?></td>   
			</tr>   
			<tr align="center">   
				<td colspan="3">   
					<input type="submit" value="TAMBAH">   
					<input type="reset" value="BATAL">   
					[<a href="<?php echo base_url(); ?>index.php/crud_ci">Lihat Data Mahasiswa</a>]   
				</td>   
			</tr>    
		</table>   
		<?php echo form_close(); ?>   
</body>   
</html>   
