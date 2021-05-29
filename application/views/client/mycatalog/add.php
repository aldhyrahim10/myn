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
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <div class="form-input">
                                        <input type="hidden" name="id" id="id">
                                        <select name="category" class="form-control" id="category">
                                            <option value="">kategori 1</option>
                                            <option value="">kategori 2</option>
                                            <option value="">kategori 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul Catalog</label>
                                    <div class="form-input">
                                        <input type="text" name="name" id="name" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul Catalog</label>
                                    <div class="form-input">
                                        <textarea class="form-control" name="description" id="description" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar Master</label>
                                    <div class="form-input">
                                        <input class="form-control" type="file" name="image-master" id="image-master">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar Pendukung</label>
                                    <div class="form-input">
                                        <input class="form-control" type="file" name="image-support1" id="image-support1">
                                        <input class="form-control" type="file" name="image-support2" id="image-support2">
                                        <input class="form-control" type="file" name="image-support3" id="image-support3">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-form-catalog">Pasang Iklan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>