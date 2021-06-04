    <main>
        <section class="form-search">
            <form action="#" method="POST">
                <table class="form">
                    <tr>
                        <td>
                            <select class="form-control category" name="category" id="category">
                                <option value="">--pilih category--</option>
                                <option value="">Category 1</option>
                                <option value="">Category 2</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control name" name="name" id="name" placeholder="cari">
                        </td>
                    </tr>
                </table>
            </form>
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