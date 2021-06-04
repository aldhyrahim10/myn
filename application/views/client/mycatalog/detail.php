<main>
    <section class="section-heading">
        <div class="container">
            <h1 class="heading-title">
                Detail Catalog
            </h1>
        </div>
    </section>
    <section class="section-catalog-detail" style="margin-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-center">
                        <img src="<?= base_url('files/'. $catalog['image_master']) ;?>" width="400px" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="name">
                        <label for="">Nama Catalog</label>
                        <h5><?= $catalog['nama_catalog'] ;?></h5>
                    </div>
                    <div class="deskripsi">
                        <label for="">Deskripsi Catalog</label>
                        <h5><?= $catalog['deskripsi_catalog'] ;?></h5>
                    </div>
                    <div class="category">
                        <label for="">Category</label>
                        <h5><?= $catalog['nama_category'] ;?></h5>
                    </div>
                    <div class="image-support">
                        <label for="">Gambar Pendukung</label>
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <img src="<?= base_url('files/'. $catalog['img_supp1']) ;?>" width="150px" alt="">
                            </div>
                            <div class="col-lg-4 mb-3">
                                <img src="<?= base_url('files/'. $catalog['img_supp2']) ;?>" width="150px" alt="">
                            </div>
                            <div class="col-lg-4 mb-3">
                                <img src="<?= base_url('files/'. $catalog['img_supp3']) ;?>" width="150px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>