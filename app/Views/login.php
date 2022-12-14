<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
    <title>Login</title>
</head>

<body>
    <section class="login vh-100">
        <div class="container">
            <h1 class=" pt-5 mb-5 text-light">Futtosaru</h1>
            <div class="card mb-3 mx-auto" style="max-width: 450px;">
                <div class="row g-0 form">
                    <div class="col-md-10 mx-auto">
                        <div class="card-body text-md-left">
                            <h1 class="card-title text-center text-light">Login</h1>
                            <form action="<?= base_url('homepage') ?>">
                                <div class="inputText">
                                    <input type="text" class="form-control mt-5" id="formGroupExampleInput" placeholder="Email">
                                    <input type="text" class="form-control mt-5 mb-4" id="formGroupExampleInput" placeholder="Password">
                                </div>
                                <button type="button" class="btn btn-primary col-md-12 mt-3">Login</button>
                            </form>
                            <label for="" class="text-light mt-3">Belum punya akun?</label>
                            <form method="get" action="<?= base_url(); ?>/regis">
                                <button type="button" class="btn btn-success col-md-12 mb-3">Daftar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>