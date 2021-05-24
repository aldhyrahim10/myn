<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $judul;?></h6>
            </div>
        <div class="card-body">
            <div class="title-heading">
                <h2 class="title-detail">
                    <b>
                        <?= $catalog['nama_catalog']; ?>
                    </b>
                </h2>    
            </div>
            <div class="description-heading">
                <h6 class="description-title">
                    <b>
                    Deskripsi Catalog
                    </b>
                </h6>
                <p class="description">
                    <?= $catalog['deskripsi_catalog'];?>
                </p>
            </div>

            <div class="category-catalog">
                <h6 class="category-title">
                    <b>
                        Category
                    </b>
                </h6>
                <p class="category">
                    <?= $catalog['nama_category']; ?> 
                </p>
            </div>
            <div class="designer-heading">
                <h6 class="designer-title">
                    <b>
                        Designer Catalog
                    </b>
                </h6>
                <p class="designer">
                    <?= $catalog['nama_designer']; ?>
                    <br>
                    <?= $catalog['telp_designer']; ?>
                    <br>
                    <a href="<?= $catalog['maps'];?>"><?= $catalog['alamat_designer']?></a>
                </p>
            </div>
             
            <div class="photo-catalog">
                <h6 class="photo-title">
                    <b>
                        Foto-Foto Catalog
                    </b>
                </h6>
            </div>
        </div>
    </div>

</div>
