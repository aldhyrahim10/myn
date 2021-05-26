<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $judul;?></h6>
            </div>
        <div class="card-body">
            <div class="description-heading">
                <h6 class="description-title">
                    <b>
                    Nama Designer
                    </b>
                </h6>
                <p class="description">
                    <?= $designer['nama_designer'];?>
                </p>
            </div>

            <div class="category-catalog">
                <h6 class="category-title">
                    <b>
                        No. Telpon
                    </b>
                </h6>
                <p class="category">
                    <?= $designer['telp_designer'];?>
                </p>
            </div>
            <div class="designer-heading">
                <h6 class="designer-title">
                    <b>
                       Email Designer
                    </b>
                </h6>
                <p class="designer">
                    <?= $designer['email_designer'];?>
                </p>
            </div>
            <div class="designer-heading">
                <h6 class="designer-title">
                    <b>
                       Alamat Designer
                    </b>
                </h6>
                <p class="designer">
                    <?= $designer['alamat_designer'];?>
                </p>
            </div>         
            <a href="<?= base_url('admin/designer') ?>" class="btn btn-info">Kembali</a>
        </div>
    </div>

</div>
