<html>
<head>
	<title>Daftar</title>
	<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
	<script type='text/javascript' src='js/jquery.js'></script>
	<script type='text/javascript' src='js/bootstrap.js'></script>
</head>
	<body>
		<?php include 'menu.php'; ?>
		<?php include 'koneksi.php' ;?>
		<form method="POST" action="insertprocess.php">
			<table align="center" width="50%" border="2" style="background-color= #29297E; color= white;">
				<tr>
					<td><table width="70%" align="center"></td>
					<td colspan="2"><center><h3>Formulir Pendaftaran Sekolah</h3>
					<hr>
					*Setiap calon peserta hanya dapat mendaftar 1 (satu) kali<hr></center></td>
				</tr>
				<tr>
					<td width="30%" align="left"><label>Nomor Daftar:</label></td>
					<td><input type="text" maxlength="5" name="nomor_daftar" class='form-control' required><br></td>
				</tr>
				<tr>
					<td width="30%" align="left"><label>Nama Lengkap:</label></td>
					<td><input type="text" name="nama" class='form-control'><br></td>
				</tr>
				<tr>
					<td align="left"><label>Tempat Lahir:</label></td>
					<td><input type="text" name="tempat" class='form-control'><br></td>
				</tr>
				<tr>
					<td align="left"><label>Tanggal Lahir:</label></td>
					<td><input type="datepicter" name="tgl_lahir" placeholder="Format: DD/MM/YYYY" class='form-control'><br></td>
				</tr>
				<tr>
					<td align="left"><label>Jenis Kelamin:</label></td>
					<td><select name="jenis_kelamin" class='form-control'>
						<option></option>
						<option value="pria">Pria</option>
						<option value="wanita">Wanita</option></select><br></td>
				</tr>
				<tr>
					<td align="left"><label>Alamat:</label></td>
					<td><input type="text" name="alamat" class='form-control'><br></td>
				</tr>
				<tr>
					<td align="left"><label>No.Telepon/HP:</label></td>
					<td><input type="text" name="no_tlp" class='form-control'><br></td>
				</tr>
				<tr>
					<td><hr></td>
				</tr>	
				<tr>
					<td colspan="2" align="right">
						<input type="submit" name="submit" class="btn btn-primary" value="Daftar">
						&nbsp;
						<input type="reset" name="reset" class="btn btn-primary" value="Reset"><hr>
					</td>
				</tr>

				</table>
				</td>
				</tr>
			</table>
		</form>
	</body>
</html>