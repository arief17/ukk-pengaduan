<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP - Pengaduan Masyarakat </title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>

    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">APLIKASI PENGADUAN MASYARAKAT DESA CISAIT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#info">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#tentang-kami">Kontak Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success text-white" href="#" data-toggle="modal" data-target="#LoginModal">Login</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- akhir navbar -->

    <!-- dashboard atas -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mt-5">
                <h4>Sampaikan</h4>
                <h1>ASPIRASI ANDA KEPADA KAMI</h1>
                <p>Aplikasi Pengaduan Masyarakat ini digunakan untuk mengadukan atau memeberikan Masukan Kepada Desa Cisait.. Apliasi ini diharapkan dapat membantu Masyarakat Cisait dalam menyampaikan Aspirasi dan demi memeajukan Desa Cisait</p>

                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#LoginModal">Ajukan Aduan Anda</a>
                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#RegisterModal">Register</a>
            </div>
            <div class="col-sm-4 dash-kanan">
                <img src="<?php echo base_url() ?>assets/images/apm-01.png" alt="">
            </div>
        </div>
    </div>

    <!-- akhir dashboard atas -->

    <!-- panel informasi -->
    <div class="container">
        <h2 class="mt-5" id="info">Informasi</h2>
        <div class="row panel-info">
            <div class="col-sm-4">
                <div class="card mt-3">
                    <div class="card-body bg-primary text-center">
                        <img src="<?php echo base_url() ?>assets/images/icon/team.png" alt="">
                        <h5 class="text-white">Jumlah User Terdaftar</h5>
                        <h1 class="text-white">320</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mt-3">
                    <div class="card-body bg-success text-center">
                        <img src="<?php echo base_url() ?>assets/images/icon/documents.png" alt="">
                        <h5 class="text-white">Jumlah Aduan Masuk</h5>
                        <h1 class="text-white">320</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mt-3">
                    <div class="card-body bg-secondary text-center">
                        <img src="<?php echo base_url() ?>assets/images/icon/clipboard.png" alt="">
                        <h5 class="text-white">Jumlah Aduan Terverifikasi</h5>
                        <h1 class="text-white">320</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- akhir panel informasi -->
    <!-- tentang kami -->
    <div class="container mt-5">
        <h2 id="tentang-kami">Tentang Kami</h2>
        <div class="row">
            <div class="col-sm-6 tentang-kami">
                <img src="<?php echo base_url() ?>assets/images/cisait.jpg" alt="">
            </div>
            <div class="col-sm-6">
                <h4>KANTOR DESA CISAIT - KRAGILAN</h4>
                <p>Kami Aparatur Desa Cisait Kecamatan Kragilan Memberikan Hak Demokrasi untuk penyampaian pendapat dimuka Umum.. Maka dengan ini kami harapkan peran serta Masyarakat dalam Memabngun Desa Cisait.. Melalui Aplikasi ini di harapkan dapat menjadi wadah untuk masyarakat dalam menyampaikan aspira membangun desa Cisait..</p>

                <h5 class="mt-5">Mengetahui</h5>
                <p>Kepala Desa Cisait - Kragilan</p>
            </div>
        </div>
    </div>
    <!-- akhir tentang kami -->

    <!-- footer -->
    <div class="footer bg-primary">
        <div class="container mt-5 mb-2">
            <div class="row">
                <div class="col-sm-8 mt-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8881765795777!2d106.25383951450169!3d-6.145718661955324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f60659b298ad%3A0xbd4123a72deb2ae4!2skantor%20desa%20cisait!5e0!3m2!1sid!2sid!4v1616527578540!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-sm-4 mt-5">
                    <img src="<?php echo base_url() ?>assets/images/logo-serang.png" alt="">
                    <h3 class="text-white mt-2">KANTOR DESA CISAIT</h3>
                    <p class="text-white">Jl. Raya Cisait Desa Cisait Kec. Kragilan Kab. Serang - Banten</p>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir footer -->

    <!-- Modal login -->
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="text-center mt-3">Form Login Aplikasi</h5>
                    <hr>
                    <div class="container mb-5">
                        <form action="<?php echo base_url() ?>index.php/admin/dashboard_admin">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-success col-sm-12">Masuk Ke Aplikasi</button>
                        </form>
                        <p class="mt-5">Belum Punya Akun ? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#RegisterModal">Klik disini</a> </p>
                        <div class="row">
                            <div class="col-sm-6 footer-login mt-5 text-center">
                                <img src="<?php echo base_url() ?>assets/images/logo-serang.png" alt="">
                            </div>
                            <div class="col-sm-6 footer-login mt-5">
                                <h5>APLIKASI PENGADUAN MASYARAKAT DESA CISAIT</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir modal login -->

    <!-- Modal Register -->
    <div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Register Masyarakat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIK</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control col-sm-8">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control col-sm-10">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control col-sm-6">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control col-sm-6">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir modal Register -->







    <script src="<?php echo base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

</body>

</html>