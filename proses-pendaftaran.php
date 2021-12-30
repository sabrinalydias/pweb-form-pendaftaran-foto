<?php
    error_reporting(0);
?>
<?php
    include("config.php");

    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];
        $foto = $_FILES['foto']['name'];
        $temp = $_FILES['foto']['tmp_name'];

        $nama_foto = date('dmYHis') . '_' . $foto;
        $path_foto = 'image/' . $nama_foto;

        if (is_uploaded_file($temp)) {
            if (move_uploaded_file($temp, $path_foto)) {
                $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal, nama_foto) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah', '$nama_foto')";
                $query = mysqli_query($db, $sql);
                
                if ($query) {
                    header('Location: index.php?status=sukses');
                } else {
                    header('Location: index.php?status=gagal-simpan');
                }
            } else {
                header('Location: index.php?status=gagal-upload');
            } 
        } else {
            header('Location: index.php?status=gagal');
        }
    } else {
        die("Akses dilarang...");
    }

?>