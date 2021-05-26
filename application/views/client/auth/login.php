<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ;?></title>
    <link rel="stylesheet" href="<?= base_url('assets/frontend/styles/main.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/libraries/bootstrap/css/bootstrap.css');?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

</head>
<body>
    <div class="main-content-login">
        <div class="row">
            <div class="col-lg-6">
                <img class="login-image" src="<?= base_url('assets/frontend/images/loginpage.png');?>" alt="">  
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="logo-brand">
                        <img class="logo" src="<?= base_url('assets/frontend/images/logo.png');?>" alt="">
                    </div>
                    <div class="heading-login">
                        <p>
                            Sign In
                        </p>
                    </div>

                    <div class="card card-login col-lg-8 ">
                        <div class="card-body">
                            <div class="container">

                                <?= $this->session->flashdata('message');?>
                                
                                <form class="form-login" action="#" method="post">
                                    <div class="form-group">
                                        <label for="">Email Address</label>
                                        <div class="form-input">
                                            <input class="form-control" value="<?= set_value('email');?>" type="text" name="email" id="email">
                                            <?= form_error('email', '<small class="text-danger pl-3"></small>') ;?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <div class="form-input">
                                            <input class="form-control" value="<?= set_value('password');?>" type="password" name="password" id="password">
                                            <?= form_error('password', '<small class="text-danger pl-3"></small>') ;?>
                                        </div>
                                    </div>
                                    <button class="btn btn-login" type="submit">Sign In</button>
                                </form>
                                <!-- <a href="#" class="btn btn-forgot">Lupa Password</a> -->
                                
                                <div class="section-register">
                                    <p class="text-center">Belum punya akun? <span><a href="<?= base_url('register');?>">Register</a></span></p>
                                    <div class="text-center">
                                        <a class="" href="<?= base_url('');?>">Back to Home</a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <script src="<?= base_url('assets/frontend/libraries/bootstrap/js/bootstrap.js');?>"></script>
    <script src="<?= base_url('assets/frontend/libraries/jquery/jquery-3.6.0.min.js');?>"></script>
</body>
</html>