<div class="container-fluid">

    <?php if ($this->session->flashdata('message') == TRUE) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p><?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php endif; ?>

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
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($designer as $item) : ?>
                        <tr>
                            <td><?= $item['id']; ?></td>
                            <td><?= $item['nama']; ?></td>
                            <td><?= $item['email']; ?></td>
                            <td>
                                <?php
                                    if($item['status'] == 0){
                                        echo "Belum Terverifikasi";
                                    } else {
                                        echo "Terverifikasi";
                                    }
                                ;?>
                            </td>
                            <td class="">
                               <?php if($item['status'] == 0) :?>
                                    <a href="<?= base_url('admin/designer/detail/'.$item['id']) ;?>" class=" btn btn-info rounded btn-sm"><i class="fas fa-eye" title="view"></i></a>
                                    <a href="<?= base_url('admin/designer/active/'.$item['id']) ;?>" class=" btn btn-success rounded btn-sm"><i class="fas fa-check" title="active"></i></a>
                                    <a href="<?= base_url('admin/designer/delete/'.$item['id']) ;?>" class=" btn btn-danger rounded btn-sm"><i class="fas fa-trash-alt" title="delete"></i></a>
                                <?php else :?>
                                    <a href="<?= base_url('admin/designer/detail/'.$item['id']) ;?>" class=" btn btn-info rounded btn-sm"><i class="fas fa-eye" title="view"></i></a>
                                    <a href="<?= base_url('admin/designer/delete/'.$item['id']) ;?>" class=" btn btn-danger rounded btn-sm"><i class="fas fa-trash-alt" title="delete"></i></a>
                               <?php endif ;?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
