    <main>
        <section class="section-heading">
            <div class="container">
                <h1 class="heading-title">
                    My Catalog
                </h1>
            </div>
        </section>

        <?php if ($this->session->flashdata('message') == TRUE) : ?>
        <div class="container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p><?php echo $this->session->flashdata('message'); ?>
            </div>
        </div>
        
        <?php endif; ?>

        <section class="section-mycatalog">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <a href="<?= base_url('mycatalog/add') ?>" class="btn btn-primary">Tambah</a>
                        <table class="table table-striped" id="myTable" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Master Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                $i=1; 
                                
                                foreach($catalog as $item) :?>
                                <tr>
                                    <td><?= $i++ ;?></td>
                                    <td><?= $item['nama_catalog'] ;?></td>
                                    <td><?= $item['deskripsi_catalog'] ;?></td>
                                    <td><?= $item['nama_category'] ;?></td>
                                    <td><img width="100px" src="<?= base_url('files/' . $item['image_master']) ;?>" alt=""></td>
                                    <td>
                                        <a href="<?= base_url('mycatalog/detail/'. $item['id_catalog']); ?>" class=" btn btn-info rounded btn-sm"><i class="fas fa-eye" title="view"></i></a>
                                        <a href="<?= base_url('mycatalog/edit/'. $item['id_catalog']); ?>" class=" btn btn-warning rounded btn-sm"><i class="fas fa-pencil-alt" title="edit"></i></a>
                                        <a class=" btn btn-danger rounded btn-sm" href="" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fas fa-trash-alt" title="view"></i></a> 
                                    </td>
                                </tr>
                                <?php endforeach ; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">MYN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda ingin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('mycatalog/delete/'.$item['id_catalog']);?>">Delete</a>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </main>