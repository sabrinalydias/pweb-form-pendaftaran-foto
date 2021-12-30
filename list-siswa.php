<?php 
    include("config.php"); 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Bersama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
     <!-- Begin nav  -->
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand fw-bold" style="color: #2fdfff!important;" href="#">Belajar Bersama</a>
		</div>
	</nav>
    <!-- End nav -->

    <!-- Begin content -->
    <div class="container-lg pt-3 min-vh-100 ">
		<div class="row mb-4">
            <div class="col-4 col-sm-2">
                <a href="index.php" class="btn btn-secondary rounded-circle" role="button" data-bs-toggle="button"><i class="fa fa-chevron-left"></i></a>
            </div>
            <div class="col-4 col-sm-8 text-center">
                <h3 class="mb-0">Siswa yang Telah Mendaftar</h3>
            </div>
            <div class="col-4 col-sm-2 text-end">
                <a href="form-daftar.php" class="btn btn-primary" role="button" data-bs-toggle="button"><i class="fa fa-plus me-1"></i>Tambah</a>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive ">
                <table class="table table-striped">
                    <caption>
                        Total: 
                        <?php 
                            $sql = "SELECT * FROM calon_siswa";
                            $query = mysqli_query($db, $sql);

                            echo mysqli_num_rows($query);
                        ?>
                    </caption>
                    <thead class="table-dark">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Sekolah Asal</th>
                        <th>Foto</th>
                        <th>Tindakan</th>
                    </thead>
                    <tbody>
                        <?php
                            // $sql = "SELECT * FROM calon_siswa";
                            // $query = mysqli_query($db, $sql);
                            
                            while ($siswa = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                
                                echo "<td>" . $siswa['id'] . "</td>";
                                echo "<td>" . $siswa['nama'] . "</td>";
                                echo "<td>" . $siswa['alamat'] . "</td>";
                                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                                echo "<td>" . $siswa['agama'] . "</td>";
                                echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                                echo "<td><img src='image/" .  $siswa['nama_foto']. "' width=90px height=120px></td>";

                                $message = "Apakah Anda yakin ingin menghapus pendaftar dengan id " . $siswa['id'] . " ?";
                                
                                echo "<td>";
                                echo "<a class='me-1' href='form-edit.php?id=" . $siswa['id'] . "' ><button type='button' class='btn btn-sm btn-warning'><i class='fa fa-pencil'></i></button></a>";
                                echo "<a href='hapus.php?id=" . $siswa['id'] . "' onclick='return confirm(" . '"' . $message . '"' . ")' ><button type='button' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></button></a>";
                                echo "</td>";

                                echo "</tr>";
                            }		
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End content -->

    <!-- Begin footer -->
	<div class="d-flex flex-column bg-dark text-white align-items-center text-center py-2">
		<div>&copy; 2021 Belajar Bersama</div>
	</div>
	<!-- End footer -->
</body>
</html>