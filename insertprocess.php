<meta http-equiv="refresh" content="1;url=http://localhost/home/daftar.php">

			<?php
				include 'koneksi.php';
				$nomor_daftar=$_POST['nomor_daftar'];
				$nama=$_POST['nama'];
				$tempat=$_POST['tempat'];
				$tgl_lahir=$_POST['tgl_lahir'];
				$jenis_kelamin=$_POST['jenis_kelamin'];
				$no_tlp=$_POST['no_tlp'];
				$alamat=$_POST['alamat'];
				//echo $nomor_daftar.$nama.$tempat.$tgl_lahir.$jenis_kelamin.$no_tlp.$alamat.$email.$kejuruan.$program_pelatihan;
					$sql="INSERT INTO daftar
					VALUES ('$nomor_daftar','$nama','$tempat','$tgl_lahir','$jenis_kelamin','$alamat','$no_tlp')";
					$con->query($sql);
					//header("location:tabel.php");
			?>
