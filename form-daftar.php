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
		<div class="row mb-4 align">
            <div class="col-3 col-sm-2">
                <a href="index.php" class="btn btn-secondary rounded-circle" role="button" data-bs-toggle="button"><i class="fa fa-chevron-left"></i></a>
            </div>
            <div class="col-6 col-sm-8 text-center">
                <h3 class="mb-0">Formulir Pendaftaran Siswa Baru</h3>
            </div>
        </div>
        <div class="card text-dark bg-light rounded-3">
            <div class="card-body">
            <form class="" action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
                <div class="row my-3">
                    <label for="nama" class="form-label col-sm-2">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="form-label col-sm-2">Alamat</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat lengkap" required></textarea>
                    </div>
                </div>
                <div class="row mb-3">   
                    <label for="jenis_kelamin" class="form-label col-sm-2">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" required>
                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div> 
                </div>
                <div class="row mb-3">
                    <label for="agama" class="form-label col-sm-2">Agama</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="agama" aria-label="Default select example" required>
                            <option value="" selected>Pilih salah satu</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Atheis">Atheis</option>
                        </select>
                    </div>                    
                </div>
                <div class="row mb-3">
                    <label for="sekolah_asal" class="form-label col-sm-2">Sekolah Asal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="Nama sekolah" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="foto" class="form-label col-sm-2">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" accept=".jpg, .jpeg, .png" class="form-control" id="foto" name="foto"required>
                    </div>
                </div>
                <div class="text-end mb-3">
                    <input type="submit" class="btn btn-primary w-" value="Daftar" name="daftar">
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- End content -->

    <!-- Begin footer -->
	<div class="d-flex flex-column bg-dark text-white align-items-center text-center py-2" style="margin-top: 6rem">
		<div>&copy; 2021 Belajar Bersama</div>
	</div>
	<!-- End footer -->
</body>
</html>