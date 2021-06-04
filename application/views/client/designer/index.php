<main>
    <section class="section-designer-heading">
        <div class="container">
            <h1 class="designer-heading">Our Designer</h1>
            <p class="designer-desc">The Best Design from Professional Designer</p>
        </div>
    </section>

    <section class="section-designer-list">
        <div class="container">
            <div class="row">
                <?php foreach($designer as $item) :?>

                <div class="col-lg-3">
                    <div class="designer-image">
                        <img class="rounded-cirle" src="<?= base_url('files/'.$item['avatar_user']);?>" width="120px" alt="">
                    </div>
                    <div class="designer-name">
                        <h4><?= $item['nama'] ;?></h4>
                        <p>Designer</p>
                    </div>
                    <div class="designer-phone">
                        <a href="https://api.whatsapp.com/send?phone=<?= $item['telp_user'];?>"  class="btn btn-designer-phone" target="_blank">Hubungi</a>
                    </div>
                    <div class="designer-detail">
                        <a href="<?= base_url('designer/detail/'. $item['id']) ?>" class="btn btn-designer-detail" >Lihat Detail</a>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>