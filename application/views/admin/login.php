<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets/favicon.ico');?>">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/backend/vendor/fontawesome-free/css/all.min.css') ;?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/backend/css/sb-admin-2.css') ;?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Welcome to MYN</h1>
                                        <p> Silahkan login untuk masuk</p>
                                    </div>

                                    <?= $this->session->flashdata('message');?>
                                    
                                    <form class="user" method="POST" action="<?= base_url('admin/auth') ;?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" value="<?= set_value('email')?>" 
                                                placeholder="Enter Email Address...">
                                                <?= form_error('email', '<small class="text-danger pl-3"></small>') ;?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" value="<?= set_value('password')?>" placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-3"></small>') ;?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/backend/vendor/jquery/jquery.min.js') ;?>"></script>
    <script src="<?= base_url('assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') ;?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/backend/vendor/jquery-easing/jquery.easing.min.js') ;?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/backend/js/sb-admin-2.js') ;?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/backend/vendor/chart.js/Chart.min.js') ;?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/backend/js/demo/chart-area-demo.js') ;?>"></script>
    <script src="<?= base_url('assets/backend/js/demo/chart-pie-demo.js') ;?>"></script>

</body>



</html>