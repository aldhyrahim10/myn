<main>
    <?php if ($this->session->flashdata('message') == TRUE) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p><?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>

    <section class="section-designer-heading">
        <div class="container">
            <h1 class="designer-heading">My Profile</h1>
        </div>
    </section>
    <section class="section-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center">
                        <img src="<?= base_url('files/'.$profile['profile']) ;?>" width="200px" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="user-name">
                        <label for="">Nama Lengkap</label>
                        <h5><?= $profile['nama_designer'] ;?></h5>
                    </div>
                    <div class="user-email">
                        <label for="">Email</label>
                        <h5><?= $profile['email_designer'] ;?></h5>
                    </div>
                    <div class="user-phone">
                        <label for="">No. Telpon</label>
                        <h5><?= $profile['telp_designer'] ;?></h5>
                    </div>
                    <div class="user-address">
                        <label for="">Alamat</label>
                        <h5><?= $profile['alamat_designer'] ;?></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-settings-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Edit Data
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('auth/edit') ?>" method="post">
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" value="<?= $profile['nama_designer'] ;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input readonly type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= $profile['email_designer'] ;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Telpon</label>
                                    <input type="text" class="form-control" name="telp" id="telp" placeholder="No. Telp" value="<?= $profile['telp_designer'] ;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea placeholder="Alamat" name="alamat" id="alamat" class="form-control" cols="30" rows="5"><?= $profile['alamat_designer'] ;?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Profile</label>
                                    <input type="file" class="form-control" name="foto" id="foto" value="<?= base_url('files/'. $profile['profile']) ;?>">
                                    <input type="hidden" name="gambar" id="gambar" value="<?= $profile['profile'] ;?>">
                                </div>
                                <button type="submit" class="btn btn-submit" >Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Ubah Password
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('auth/changepassword') ;?>" method="post">
                                <div class="form-group">
                                    <label for="">Password Baru</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password Baru">
                                </div>
                                <div class="form-group">
                                    <label for="">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password Baru">
                                </div>
                                <button type="submit" class="btn btn-submit" >Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>