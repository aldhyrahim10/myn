<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo $judul;?></h6>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                            <div class="panel-body">
                                <form action="<?= site_url('admin/category/edit/'. $category['id_category']) ;?>" method="POST" enctype="multipart/form-data">
                                    <div class="row mb-2">
                                        <label for="name" class="col-sm-4 col-form-label">Category</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="category" class="form-control" id="category" value="<?= $category['nama_category'];?>"><br>
                                        <?= form_error('category', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                    </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
                                    <a href="<?= base_url('admin/category');?>" class="btn btn-info">Batal</a>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>