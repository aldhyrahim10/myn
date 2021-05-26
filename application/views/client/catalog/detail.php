    <main>
        <nav aria-label="breadcrumb" class="breadcrumb-catalog">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Catalog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Catalog 1</li>
            </ol>
        </nav>

        <section class="catalog-detail-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="catalog-image">
                            <div class="catalog-image-master">
                                <img class="image-master" src="<?= base_url('assets/frontend/images/catalogmaster.png') ;?>" width="650px" alt="">
                            </div>
                            <div class="catalog-image-child">
                                <div class="row">
                                    <div class="image-column col-lg-4">
                                        <img class="image-child" src="<?= base_url('assets/frontend/images/catalogchild1.png') ;?>" width="200px" alt="">
                                    </div>
                                    <div class="image-column col-lg-4">
                                        <img class="image-child" src="<?= base_url('assets/frontend/images/catalogchild2.png') ;?>" width="200px" alt="">
                                    </div>
                                    <div class="image-column col-lg-4">
                                        <img class="image-child" src="<?= base_url('assets/frontend/images/catalogchild3.png') ;?>" width="200px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="catalog-heading">
                            <h1 class="catalog-title">Catalog Name</h1>
                        </div>
                        <div class="catalog-designer">
                            <table>
                                <tr>
                                    <td>
                                        <img class="designer-profile" src="<?= base_url('assets/frontend/images/profilecatalog.png') ;?>" width="50px" alt="">
                                    </td>
                                    <td>
                                        <p class="designer-name">
                                            Julia Keeva
                                        </p>
                                        <p class="designer">
                                            Designer
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <a href="#" class="btn btn-call">
                                Hubungi Penjual
                            </a>
                        </div>
                        <hr>
                        <div class="description-catalog">
                            <h5 class="description-heading">
                                Description
                            </h5>
                            <p class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi necessitatibus vitae neque esse. Animi, accusamus expedita, eius atque incidunt earum assumenda dolores magnam voluptatibus necessitatibus odio dicta ea maiores doloribus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt quas tempora suscipit alias ad. Fugit ex aliquid perspiciatis tenetur sit. Debitis provident nihil accusantium delectus mollitia expedita quis doloremque culpa!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>