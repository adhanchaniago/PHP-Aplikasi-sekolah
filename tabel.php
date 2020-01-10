<?php include 'koneksi.php'; ?>
<?php include 'menu.php'; ?>
<h2 align="center">Tabel Peserta Didik Baru</h2>
	<table border="1" align="center" cellpadding="10px">
		<tr style="background-color: red;">
			<th>nomor_daftar</th>
			<th>Nama</th>
			<th>Tempat</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>No. Telepon/HP</th>
			<th>Alamat</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 	
			$sql=" SELECT * FROM  daftar";
			$rs=$con->query($sql);
			while($row=mysqli_fetch_row($rs)){	
		?>
			<tr>
				<td><?php echo $row[0]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>
				<td><?php echo $row[4]; ?></td>
				<td><?php echo $row[5]; ?></td>
				<td><?php echo $row[6]; ?></td>
			
				
				<td onclick="return confirm('Anda yakin akan menghapus data ini?')"><a href="deleteProcess.php?nomor_daftar=<?php echo $row[0] ?>">Delete</a></td>
							<td><a href="formupdate.php?nomor_daftar=<?php echo $row[0]; ?>">Update</a></td>
						</tr>
						
			<?php	} ?>
	
		</table>
		<a href="daftar.php"> <h4 align="right">Kembali</h4></a>