    <main>
        <nav aria-label="breadcrumb" class="breadcrumb-catalog">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?= base_url('') ;?>">Home</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="<?= base_url('catalog') ;?>">Catalog</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $catalog['nama_catalog'] ;?></li>
            </ol>
        </nav>

        <section class="catalog-detail-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="catalog-image">
                            <div class="catalog-image-master">
                                <img class="image-master" src="<?= base_url('files/'.$catalog['image_master']) ;?>" width="650px" alt="">
                            </div>
                            <div class="catalog-image-child">
                                <div class="row">
                                    <div class="image-column col-lg-4">
                                        <img class="image-child" src="<?= base_url('files/'. $catalog['img_supp1']) ;?>" width="200px" alt="">
                                    </div>
                                    <div class="image-column col-lg-4">
                                        <img class="image-child" src="<?= base_url('files/'. $catalog['img_supp2']) ;?>" width="200px" alt="">
                                    </div>
                                    <div class="image-column col-lg-4">
                                        <img class="image-child" src="<?= base_url('files/'. $catalog['img_supp3']) ;?>" width="200px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="catalog-heading">
                            <h1 class="catalog-title"><?= $catalog['nama_catalog'] ;?></h1>
                        </div>
                        <div class="catalog-designer">
                            <table>
                                <tr>
                                    <td>
                                        <img class="designer-profile" src="<?= base_url('files/'.$catalog['profile']) ;?>" width="50px" alt="">
                                    </td>
                                    <td>
                                        <a style="text-decoration: none; color: #000;" href="<?= base_url('designer/detail/'.$catalog['id_designer']);?>">
                                            <p class="designer-name">
                                                <?= $catalog['nama_designer'] ;?>
                                            </p>
                                        </a>
                                        <p class="designer">
                                            Designer
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <a href="https://api.whatsapp.com/send?phone=<?= $catalog['telp_designer'];?>" class="btn btn-call" target="_blank">
                                Hubungi Penjual
                            </a>
                        </div>
                        <hr>
                        <div class="description-catalog">
                            <h5 class="description-heading">
                                Description
                            </h5>
                            <p class="description">
                                <?= $catalog['deskripsi_catalog'] ;?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                <section class="section-designer-heading">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="designer-heading">Review</h1>
                        </div>
                    </div>
                </section>
                    <div class="row mt-5">
                        <div class="col-lg-6 mb-5">
                            <div class="card">
                                <div class="card-header">
                                    Daftar Review
                                </div>
                                <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>feedback</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i= 1;

                                        foreach($review as $item) :?>
                                        <tr>
                                            <td><?= $i++ ;?></td>
                                            <td><?= $item['nama'] ;?></td>
                                            <td><?= $item['review'] ;?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="card">
                                <div class="card-header">
                                    Tambah Review
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('catalog/review') ;?>" method="post">
                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="hidden" name="id" id="id" value="<?= $catalog['id_catalog'] ;?>">
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Review</label>
                                            <textarea class="form-control" name="review" id="review" cols="30" rows="5"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-submit" style="background-color: #ffca19;" >Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>