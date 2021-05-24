<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $judul;?></h6>
            </div>
        <div class="card-body">
            <div class="table-responsive">            
            <table class="table table-bordered"  id="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Designer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $catalog as $item) :?>
                        <tr>
                            <td><?= $item['id_catalog']; ?></td>
                            <td><?= $item['nama_catalog']; ?></td>
                            <td><?= $item['deskripsi_catalog']; ?></td>
                            <td><?= $item['nama_designer']; ?></td>
                            <td class="">
                                <a href="<?= base_url('admin/catalog/detail/'.$item['id_catalog']) ;?>" class=" btn btn-info rounded btn-sm"><i class="fas fa-eye" title="view"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
