<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url() ?>/dist/assets/css/main/app.css">
    <link rel="stylesheet" href="<?= base_url() ?>/dist/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="<?= base_url() ?>/dist/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url() ?>/dist/assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div id="auth">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-3 col-10">
                <div class="card" style="border: 2px solid #545BFC;">
                    <div class="card-content">
                        <div class="card-body">
                            <h3 class="text-center mb-3">Inventarisku Login</h3>
                            <form action="" method="post">
                                <div class="form-group mb-2">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" class="form-control" placeholder="Enter Username">
                                    <p><small class="text-muted"></small></p>
                                </div>
                                <div class="form-groupm b-2">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control" placeholder="Enter Password">
                                    <p><small class="text-muted"></small></p>
                                </div>
                                <div class="d-grid mb-2">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center" style="font-size: 14px;">Belum mempunyai akun?</div>
                            <div class="d-grid mt-2">
                                <a class="btn btn-outline-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>