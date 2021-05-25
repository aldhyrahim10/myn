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
                <img class="login-image" width="750px" height="1150px" src="<?= base_url('assets/frontend/images/loginpage.png');?>" alt="">  
            </div>
            <div class="col-lg-6">
                <div class="container">
                    <div class="logo-brand">
                        <img class="logo" src="<?= base_url('assets/frontend/images/logo.png');?>" alt="">
                    </div>
                    <div class="heading-login">
                        <p>
                            Sign Up
                        </p>
                    </div>

                    <div class="card card-login col-lg-8 ">
                        <div class="card-body">
                            <div class="container">
                                <form class="form-login" action="#" method="post">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <div class="form-input">
                                            <input class="form-control" value="<?= set_value('name');?>" type="text" name="name" id="name">
                                            <?= form_error('name', '<small class="text-danger pl-3"></small>') ;?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email Address</label>
                                        <div class="form-input">
                                            <input class="form-control" value="<?= set_value('email');?>" type="text" name="email" id="email">
                                            <?= form_error('email', '<small class="text-danger pl-3"></small>') ;?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">No. Handphone</label>
                                        <div class="form-input">
                                            <input class="form-control" value="<?= set_value('hp');?>" type="text" name="hp" id="hp">
                                            <?= form_error('hp', '<small class="text-danger pl-3"></small>') ;?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <div class="form-input">
                                            <textarea class="form-control"name="alamat" id="alamat" cols="30" rows="3"><?= set_value('alamat');?></textarea>
                                            <?= form_error('alamat', '<small class="text-danger pl-3"></small>') ;?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <div class="form-input">
                                            <input class="form-control" value="<?= set_value('password');?>" type="password" name="password" id="password">
                                            <?= form_error('password', '<small class="text-danger pl-3"></small>') ;?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirm Password</label>
                                        <div class="form-input">
                                            <input class="form-control" value="<?= set_value('password2');?>" type="password" name="password2" id="password2">
                                            <?= form_error('password2', '<small class="text-danger pl-3"></small>') ;?>
                                        </div>
                                    </div>
                                    <button class="btn btn-register" type="submit">Create Account</button>
                                </form>    

                                <div class="section-register">
                                    <div class="text-center">
                                        <a class="" href="<?= base_url('auth/login');?>">Back to Sign In</a>
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