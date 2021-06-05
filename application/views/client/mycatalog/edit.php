    <main>
        <section class="section-addcatalog">
            <div class="container">
                <div class="heading-addcatalog text-center">
                    <h1 class="heading-title">Edit Catalog</h1>
                </div>
                <div class="form-addcatalog">
                    <div class="card">
                        <div class="card-title">
                            <h4 class="heading-card">Lengkap data berikut</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= site_url('mycatalog/edit_submit/'.$catalog['id_catalog'] ) ;?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <div class="form-input">
                                        <select name="category" class="form-control" id="category">
                                            <?php foreach ($category as $item ): ?>
                                                <?php if($item['id_category'] == $catalog['id_category']): ?>
                                                    <option value="<?php echo $item['id_category']; ?>" selected><?php echo $item['nama_category']; ?></option>
                                                <?php else:?>
                                                    <option value="<?php echo $item['id_category']; ?>"><?php echo $item['nama_category']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach;?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul Catalog</label>
                                    <div class="form-input">
                                        <input type="text" value="<?= $catalog['nama_catalog'] ;?>" name="name" id="name" class="form-control" >
                                        <?= form_error('name', '<small class="text-danger pl-3" style="color:red;"></small  >') ;?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi Catalog</label>
                                    <div class="form-input">
                                        <textarea class="form-control" name="description" id="description" cols="30" rows="3"><?= set_value('description');?><?= $catalog['deskripsi_catalog'] ;?></textarea>
                                        <?= form_error('description', '<small class="text-danger pl-3" style="color:red;"></small>') ;?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar Master</label>
                                    <div class="form-input">
                                        <input type="hidden" name="master" id="master" value="<?= $catalog['image_master'] ;?>">
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
                                        <input type="hidden" name="sup1" id="sup1" value="<?= $catalog['img_supp1'] ;?>">
                                        <input class="form-control" type="file" name="support1" id="support1">
                                        <!--response setelah upload-->
                                        <?php if (!empty($response)) : ?>
                                            <small class="text-danger pl-3">
                                                <?= $response; ?>
                                            </small>
                                        <?php endif; ?>
                                        <label for="">Gambar Pendukung 2</label>
                                        <input type="hidden" name="sup2" id="sup2" value="<?= $catalog['img_supp2'] ;?>">
                                        <input class="form-control" type="file" name="support2" id="support2">
                                        <!--response setelah upload-->
                                        <?php if (!empty($response)) : ?>
                                            <small class="text-danger pl-3">
                                                <?= $response; ?>
                                            </small>
                                        <?php endif; ?>
                                        <label for="">Gambar Pendukung 3</label>
                                        <input type="hidden" name="sup3" id="sup3" value="<?= $catalog['img_supp3'] ;?>">
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