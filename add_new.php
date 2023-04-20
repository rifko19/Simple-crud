<?php
include "db_conn.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`id`, `nama`, `nim`, `email`, `alamat`, `gender`) 
    VALUES (NULL,'$nama','$nim','$email','$alamat','$gender')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Data baru berhasil ditambahkan");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Website Akademik</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FFFBEB;
            height: 100%;
        }

        .collapse .navbar-nav :hover {
            color: #FFF;
        }

        footer {
            background-color: #eec876;
            text-align: center;
            padding: .5rem 0;
            position: relative;
            min-height: 100%;
            z-index: 1;
            bottom: 0;
            width: 100%;
            color: #eee;
        }

        footer .sosmed a {
            text-decoration: none;
            color: #1f2833;
            font-size: 1.4rem;
            padding: .5rem;
        }

        footer .credit a {
            text-decoration: none;
            color: #1f2833;
        }

        footer .sosmed a:hover {
            color: #eee;
        }

        .credit p {
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar" style="background-color: #efa300;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-family: Georgia, sans-serif; font-size:2rem;">
                <img src="Unsri-Logo.png" alt="" width="70px"> Universitas <span style="color:#FFF;">Sriwijaya</span>
                &trade;
                <span style="font-size:1.5rem;">Fakultas Ilmu Komputer &rarr; Jurusan Sistem Informasi</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <hr style="width:100%;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Data Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <br></br>

    <!-- CRUD START -->
    <div class="container">
        <div class="text-center mb-4">
            <h3>Masukkan data</h3>
            <p class="text-muted">Lengkapi formulir di bawah ini untuk menambahkan data baru</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width300px">
                <div class="row mb-3">
                    <div class="col">
                        <label for="form-label">Nama :</label>
                        <input type="text" class="form-control" name="nama" placeholder="">
                    </div>

                    <div class="col">
                        <label for="form-label">NIM :</label>
                        <input type="number" class="form-control" name="nim" placeholder="">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="form-label">Email :</label>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="address">Alamat : </label>
                    <textarea class="form-control" name="alamat" placeholder=""></textarea>
                </div>

                <div class="form-group mb-3">
                    <label>Jenis Kelamin:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="Laki-laki" value="Laki-laki">
                    <label for="Laki-laki" class="form-input-label">Laki-laki</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="Perempuan" value="Perempuan">
                    <label for="Perempuan" class="form-input-label">Perempuan</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                    <a href="index.php" class="btn btn-danger">Batalkan</a>
                </div>
            </form>
        </div>
    </div>
    <!-- CRUD END -->
    <br></br>

    <!-- Footer start -->
    <footer class="contact" id="contact">
        <div class="sosmed">
            <a href="https://www.instagram.com/rifko_akbar2/" class="fa fa-instagram"></a>
            <a href="https://web.facebook.com/natar.gaul" class="fa fa-facebook"></a>
            <a href="https://www.linkedin.com/in/rifko-akbar-592915249/" class="fa fa-linkedin"></a>
            <a href="https://www.youtube.com/channel/UCRCZBs5zG9WFq6LdnxIpgLQ" class="fa fa-youtube"></a>
        </div>

        <div class="credit">
            <p>Created by <a href=""> Rifko Akbar </a> | &copy 2023.</p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>