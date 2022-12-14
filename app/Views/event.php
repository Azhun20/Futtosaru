<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FOnt Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700&display=swap" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="<?= base_url('css/event.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('css/respon.css') ?>">

    <!-- logo Title -->
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">

    <title>Event</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <img class="icn" src="<?= base_url('Asset/img/icon.png') ?>" alt="" width="30">
            <a class="navbar-brand ms-3" href="#">Futtosaru</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link mx-2" href="<?= base_url('homepage') ?>">Home</a>
                    <a class="nav-link mx-2" href="<?= base_url('premium') ?>">Premium</a>
                    <a class="nav-link active mx-2" aria-current="page" href="<?= base_url('event') ?>">Event</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto mx-auto">
                    <h1>Hai Kamu, Mau Tau event Didekatmu?</h1>
                    <div class="btnSearch mx-auto">
                        <input type="text" class="search bg-light ps-4" placeholder="Kota Malang" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <img src="Asset/img/bg5.jpg" class="card1 mx-4" alt="">
                            <p>Liga Profesional</p>
                        </div>
                        <div class="col">
                            <img src="Asset/img/bg5.jpg" class="card1 mx-4" alt="">
                            <p>Tournament Futsal SMP</p>
                        </div>
                        <div class="col">
                            <img src="Asset/img/bg5.jpg" class="card1 mx-4" alt="">
                            <p>Tournament Futsal SMA/SMK</p>
                        </div>
                        <div class="col">
                            <img src="Asset/img/bg5.jpg" class="card1 mx-4" alt="">
                            <p>Tournament Futsal LIMA</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Layanan Section -->
    <section id="detail">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Event</h2>
                    <span class="sub-title">Join Event Terbesar</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="<?= base_url('Asset/img/futsal3.jpg') ?>" alt="" class="img-event position-relative mx-auto">
                        </div>
                        <h3>Malang</h3>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="<?= base_url('Asset/img/image6.png') ?>" alt="" class="img-event position-relative mx-auto">
                        </div>
                        <h3>Bandung</h3>

                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="<?= base_url('Asset/img/gor.jpeg') ?>" alt="" class="img-event position-relative mx-auto">
                        </div>
                        <h3>Jakarta</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="<?= base_url('Asset/img/bg7.webp') ?>" alt="" class="img-event position-relative mx-auto">
                        </div>
                        <h3>Yogyakarta</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="<?= base_url('Asset/img/bg5.jpg') ?>" alt="" class="img-event position-relative mx-auto">
                        </div>
                        <h3>Solo</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="<?= base_url('Asset/img/bg6.jpg') ?>" alt="" class="img-event position-relative mx-auto">
                        </div>
                        <h3>Surabaya</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer text-white pt-5 pb-4 bg-dark">
        <div class="container text-md-left">
            <div class="row text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="<?= base_url('Asset/img/icon.png') ?>" alt="">
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Perusahaan</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">STIKI Malang</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">Jagoan Hosting</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">Midtrans</a></a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-info">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Product By</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">Bootstrap 5</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">CodeIgniter 4</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">Midtrans</a></a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i> Malang, Jawa Timur, Indonesia
                    </p>
                    <p>
                        <i class="fas fa-home mr-3"></i> @aziiss___
                    </p>
                    <p>
                        <i class="fas fa-home mr-3"></i> @_argac
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p>Copyright 2022 All right reserved by:<a href="" style="text-decoration: none;"><strong class="text-info"> STIKI Malang</strong></a> </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="<?= base_url('js/style.js') ?>"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>