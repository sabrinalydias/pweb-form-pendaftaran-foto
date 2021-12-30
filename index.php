<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Bersama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
        <?php
            if (isset($_GET['status'])):
                if ($_GET['status'] == 'sukses') {
                    echo "<div class='alert alert-success alert-dismissible d-flex align-items-center fade show' role='alert'>";
                    echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>";
                    echo "<div>Pendaftaran siswa baru berhasil dilakukan!</div>";
                    echo "<button type='button' class='btn-close' data-dismiss='alert' data-bs-dismiss='alert' aria-label='Close'></button>";
                    echo "</div>";
                } else if ($_GET['status'] == 'gagal-simpan'){
                    echo "<div class='alert alert-danger alert-dismissible d-flex align-items-center fade show' role='alert'>";
                    echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>";
                    echo "<div>Foto gagal disimpan!</div>";
                    echo "<button type='button' class='btn-close' data-dismiss='alert' data-bs-dismiss='alert' aria-label='Close'></button>";
                    echo "</div>";
                } else if ($_GET['status'] == 'gagal-upload'){
                    echo "<div class='alert alert-danger alert-dismissible d-flex align-items-center fade show' role='alert'>";
                    echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>";
                    echo "<div>Foto gagal diupload!</div>";
                    echo "<button type='button' class='btn-close' data-dismiss='alert' data-bs-dismiss='alert' aria-label='Close'></button>";
                    echo "</div>";
                } else {
                    echo "<div class='alert alert-danger alert-dismissible d-flex align-items-center fade show' role='alert'>";
                    echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>";
                    echo "<div>Pendaftaran gagal dilakukan!</div>";
                    echo "<button type='button' class='btn-close' data-dismiss='alert' data-bs-dismiss='alert' aria-label='Close'></button>";
                    echo "</div>";
                }
            endif;
        ?>
		<div class="row text-center">
			<div class="mb-3">
                <h4>Pendaftaran Siswa Baru</h4>
                <h1>Belajar Bersama School</h1>
            </div>
            <div class="d-grid gap-2 col-6 col-md-4 mx-auto">
                <a href="form-daftar.php" class="btn btn-primary" role="button">Daftar Baru</a>
                <a href="list-siswa.php" class="btn btn-primary" role="button">Pendaftar</a>
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