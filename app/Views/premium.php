<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/premium.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>"> -->
    <title>Premium</title>
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
                    <a class="nav-link active mx-2" aria-current="page" href="<?= base_url('premium') ?>">Premium</a>
                    <a class="nav-link mx-2" href="<?= base_url('event') ?>">Event</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Form -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col mt-5 ms-5">
                    <div class="card pt-5 mb-3 text-light" style="max-width: 450px;">
                        <div class="row g-0 form">
                            <div class="col-md-10 mx-auto">
                                <div class="card-body text-md-left">
                                    <form>
                                        <div class="mb-3">
                                            <label for="Email1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="@gmail.com">
                                            <div id="emailHelp" class="form-text text-warning">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="noRek" class="form-label">No Rekening</label>
                                            <input type="text" class="form-control" id="password" placeholder="1300**">
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama Pengirim</label>
                                            <input type="text" class="form-control" id="ulangpass">
                                        </div>
                                        <label for="ulangpass" class="form-label">Pilih Paket</label>
                                        <div class="dropdown">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Paket Premium
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Beginer</a></li>
                                                <li><a class="dropdown-item" href="#">Medium</a></li>
                                                <li><a class="dropdown-item" href="#">Profesional</a></li>
                                            </ul>
                                        </div>
                                        <div class="button text-center mt-3">
                                            <button type="submit" class="btn btn-success col-md-6">Bayar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-5 my-100">
                    <div class="p-3 bg-transparent mt-5">
                        <h2 class="text-center">Daftar Premium</h2>
                        <div class="row mt-5">
                            <div class="col-md-4 text-center">
                                <div class="card-layanan bg-dark">
                                    <div class="circle-icon position-relative mx-auto">
                                        <h3>Beginer</h3>
                                    </div>
                                    <p>Dengan Hanya Rp.5000 /Hari dapatkan potongan Booking hingga 30%
                                        dan buat eventmu lebih keren</p>
                                    <p class="txt1">Rp.150.000,-</p>
                                </div>
                            </div>

                            <div class="col-md-4 text-center">
                                <div class="card-layanan bg-dark">
                                    <div class="circle-icon position-relative mx-auto">
                                        <h3>Medium</h3>
                                        <p>Dapatkan Promo membuat event hingga 40% Dengan Mulai
                                            dari Rp.10.000 /Hari saja
                                        </p>
                                        <p class="txt1">Rp.300.000,-</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 text-center">
                                <div class="card-layanan bg-dark">
                                    <div class="circle-icon position-relative mx-auto">
                                        <h3>Profesional</h3>
                                        <p>Dapatkan Promo terbaik, tampilkan eventmu teratas
                                            dan Dapatkan layanan prioritas</p>
                                        <p class="txt1">Rp.400.000,-</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>