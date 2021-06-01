    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="" class="navbar-brand">
                <img class="image-logo" src="<?= base_url('assets/frontend/images/logo.png') ;?>" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-">
                <li class="nav-item mx-md-2">
                    <a href="<?= base_url('home') ;?>" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="<?= base_url('catalog') ;?>" class="nav-link">Catalog</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Designer</a>
                </li>

                <?php if( $this->session->userdata('nama') == true) :?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?= $user;?></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('mycatalog'); ?>">My Catalog</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#m_logout">Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item mx-md-2">
                        <a href="<?= base_url('login'); ?>" class="nav-link">LOGIN</a>
                    </li>
                <?php endif ;?>
            </ul>
        </div>

        <div class="modal fade" id="m_logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">MYN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda ingin keluar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout');?>">Logout</a>
                </div>
                </div>
            </div>
        </div>
    </nav>