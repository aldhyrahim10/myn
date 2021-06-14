<main>
    <section class="section-designer-heading">
        <div class="container">
            <h1 class="designer-heading">Profile Designer</h1>
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
                        <h5>+<?= $profile['telp_designer'] ;?></h5>
                    </div>
                    <div class="user-address">
                        <label for="">Alamat</label>
                        <h5><?= $profile['alamat_designer'] ;?></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-designer-heading">
        <div class="container">
            <h1 class="designer-heading">Designer's Catalog</h1>
        </div>
    </section>

    <section class="catalog-section">
            <div class="container">
                <div class="row">
                    <?php foreach($catalog as $item) : ?>
                    <div class="col-lg-4">
                        <div class="card-catalog">
                            <div class="card-body">
                                <img src="<?= base_url('files/'. $item['image_master']) ;?>" width="300px" alt="">
                                <a class="catalog-link" href="<?= base_url('catalog/detail/'.$item['id_catalog']) ;?>"><h4 class="catalog-name"><?= $item['nama_catalog'];?></h4></a>
                                <p class="designer-name"><?= $item['nama_designer']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
</main>