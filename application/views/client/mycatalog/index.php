    <main>
        <section class="section-heading">
            <div class="container">
                <h1 class="heading-title">
                    My Catalog
                </h1>
            </div>
        </section>

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
                                <tr>
                                    <td>1</td>
                                    <td>Catalog 1</td>
                                    <td>Description</td>
                                    <td>Category</td>
                                    <td>Image</td>
                                    <td>
                                        <a href="#" class=" btn btn-info rounded btn-sm"><i class="fas fa-eye" title="view"></i></a>
                                        <a href="<?= base_url('mycatalog/edit'); ?>" class=" btn btn-warning rounded btn-sm"><i class="fas fa-pencil-alt" title="edit"></i></a>
                                        <a href="" data-toggle="modal" data-target="#deleteModal" class=" btn btn-danger rounded btn-sm"><i class="fas fa-trash-alt" title="view"></i></a>  
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>