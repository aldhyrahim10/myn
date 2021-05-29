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

            <a href="<?php echo base_url('admin/category/add');?>" class="btn btn-primary float-right">Tambah</a>
            <br>
            <br>
            
            <table class="table table-bordered"  id="table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $category as $item) :?>
                        <tr>
                            <td><?= $item['id_category']; ?></td>
                            <td><?= $item['nama_category']; ?></td>
                            <td class="text center">

                                <a href="<?= base_url('admin/category/edit/'.$item['id_category']) ;?>" class=" btn btn-success rounded btn-sm"><i class="fas fa-pencil-alt" title="edit"></i></a>
                                <a href="" data-toggle="modal" data-target="#deleteModal" class=" btn btn-danger rounded btn-sm"><i class="fas fa-trash-alt" title="delete"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h6 class="text-body">
                Apakah anda ingin menghapus data??
                </h6>            
                <br>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('admin/category/delete/'.$item['id_category']) ;?>">Hapus</a> 
            </div>         
        </div>
    </div>
</div>
