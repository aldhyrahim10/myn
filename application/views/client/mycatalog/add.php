    <main>
        <section class="section-addcatalog">
            <div class="container">
                <div class="heading-addcatalog text-center">
                    <h1 class="heading-title">Tambah Catalog</h1>
                </div>
                <div class="form-addcatalog">
                    <div class="card">
                        <div class="card-title">
                            <h4 class="heading-card">Lengkap data berikut</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('mycatalog/add_submit') ;?>" method="post">
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <div class="form-input">
                                        <input type="hidden" name="id" id="id">
                                        <select name="category" class="form-control" id="category">
                                            <?php foreach ($category as $item ): ?>
                                                <option value="<?= $item['id_category'] ;?>"><?= $item['nama_category'];?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul Catalog</label>
                                    <div class="form-input">
                                        <input type="text" value="<?= set_value('name');?>" name="name" id="name" class="form-control" >
                                        <?= form_error('name', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi Catalog</label>
                                    <div class="form-input">
                                        <textarea class="form-control" name="description" id="description" cols="30" rows="3"><?= set_value('description');?></textarea>
                                        <?= form_error('description', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar Master</label>
                                    <div class="form-input">
                                        <input class="form-control" type="file" name="image-master" id="image-master">
                                        <?= form_error('image-master', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="">Gambar Pendukung</label>
                                    <div class="form-input">
                                        <input class="form-control" type="file" name="image-support1" id="image-support1">
                                        <?= form_error('image-support1', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                        <input class="form-control" type="file" name="image-support2" id="image-support2">
                                        <?= form_error('image-support2', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                        <input class="form-control" type="file" name="image-support3" id="image-support3">
                                        <?= form_error('image-support2', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                    </div>
                                </div> -->
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Simpan" class="btn btn-form-catalog">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>