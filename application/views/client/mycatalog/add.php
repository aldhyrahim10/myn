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
                            <form action="<?= site_url('mycatalog/add_submit/') ;?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <div class="form-input">
                                        <input type="hidden" name="id" value="<?= $id_user ?>">
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
                                        <input class="form-control" type="file" name="userfile" id="image-master">
                                        <!--response setelah upload-->
                                        <?php if (!empty($response)) : ?>
                                            <small class="text-danger pl-3">
                                                <?= $response; ?>
                                            </small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar Pendukung 1</label>
                                    <div class="form-input">
                                        <input class="form-control" type="file" name="support1" id="support1">
                                        <!--response setelah upload-->
                                        <?php if (!empty($response)) : ?>
                                            <small class="text-danger pl-3">
                                                <?= $response; ?>
                                            </small>
                                        <?php endif; ?>
                                        <label for="">Gambar Pendukung 2</label>
                                        <input class="form-control" type="file" name="support2" id="support2">
                                        <!--response setelah upload-->
                                        <?php if (!empty($response)) : ?>
                                            <small class="text-danger pl-3">
                                                <?= $response; ?>
                                            </small>
                                        <?php endif; ?>
                                        <label for="">Gambar Pendukung 3</label>
                                        <input class="form-control" type="file" name="support3" id="support3">
                                        <!--response setelah upload-->
                                        <?php if (!empty($response)) : ?>
                                            <small class="text-danger pl-3">
                                                <?= $response; ?>
                                            </small>
                                        <?php endif; ?>
                                    </div>
                                </div>
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