<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/regis.css') ?>">
    <title>Register</title>
</head>

<body>
    <section id="regis">
        <div class="container h-100">
            <div class="row h-100">
                <h1 class="pt-4">Futtosaru</h1>
                <div class="col my-100">
                    <div class="p-3 bg-transparent mt-5">
                        <img src="<?= base_url('Asset/img/lepi.svg') ?>" alt="">
                        <h3 class="text-center text-light">Register Now !!</h3>
                    </div>
                </div>
                <div class="col ms-5">
                    <div class="card mb-3 text-light" style="max-width: 450px;">
                        <div class="row g-0 form">
                            <div class="col-md-10 mx-auto">
                                <div class="card-body text-md-left">
                                    <h2 class="card-title text-center mb-4 text-decoration-underline">Register</h2>
                                    <form>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Email1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="@gmail.com">
                                            <div id="emailHelp" class="form-text text-warning">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="********">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ulangpass" class="form-label">Repeat Password</label>
                                            <input type="password" class="form-control" id="ulangpass">
                                        </div>
                                        <div class="button text-center">
                                            <button type="submit" class="btn btn-success col-md-6">Regis</button>
                                        </div>
                                        <p class="mb-0 mt-3">Have any Account ? <a href="<?= base_url('login') ?>">Sign In</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>