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
            bottom: 0;
            min-height: 100%;
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
                        <a class="nav-link active" aria-current="page" href="Welcome.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <br></br>

    <!-- CRUD START -->
    <div class="container">
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
           ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>

        <a href="add_new.php" class="btn btn-secondary mb-3">Tambahkan data</a>

        <table class="table table-hover table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";

                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($conn, $sql);
                $urut = 1;
                // var_dump(mysqli_fetch_assoc($result));
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $urut++ ?? '-' ?>
                        </td>
                        <td>
                            <?php echo $row['nama'] ?? '-' ?>
                        </td>
                        <td>
                            <?php echo $row['nim'] ?? '-' ?>
                        </td>
                        <td>
                            <?php echo $row['email'] ?? '-' ?>
                        </td>
                        <td>
                            <?php echo $row['alamat'] ?? '-' ?>
                        </td>
                        <td>
                            <?php echo $row['gender'] ?? '-' ?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-warning"><i
                                    class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-danger"><i
                                    class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- CRUD END -->
    <br></br>

    <!-- Footer start -->
    <!-- <footer class="contact" id="contact">
        <div class="sosmed">
            <a href="https://www.instagram.com/rifko_akbar2/" class="fa fa-instagram"></a>
            <a href="https://web.facebook.com/natar.gaul" class="fa fa-facebook"></a>
            <a href="https://www.linkedin.com/in/rifko-akbar-592915249/" class="fa fa-linkedin"></a>
            <a href="https://www.youtube.com/channel/UCRCZBs5zG9WFq6LdnxIpgLQ" class="fa fa-youtube"></a>
        </div>
        <div class="credit">
            <p>Created by <a href=""> Rifko Akbar </a> | &copy 2023.</p>
        </div>
    </footer> -->
    <!-- Footer end -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>