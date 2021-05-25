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
    
    <!-- Navbar -->
    <?php $this->load->view('theme/client/navbar'); ;?>

    <!-- Main Content -->
    <?php $this->load->view($page); ;?>

    <!-- Footer -->
    <?php $this->load->view('theme/client/footer'); ;?>
    
    <script src="<?= base_url('assets/frontend/libraries/bootstrap/js/bootstrap.js');?>"></script>
    <script src="<?= base_url('assets/frontend/libraries/jquery/jquery-3.6.0.min.js');?>"></script>
</body>
</html>