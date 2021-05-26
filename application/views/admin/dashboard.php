<div class="container-fluid">

<div class="alert alert-block alert-info">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>
		<i class="ace-icon fa fa-check green"></i>
			Selamat datang
		        <strong class="green">
					<b><?= $user;?></b>
				</strong>,<br><br>
			Have Nice A Day						
</div>

<div class="widget-header widget-header-flat widget-header-small">
	<h5 class="widget-title">
		<i class="ace-icon fa fa-signal"></i>
			Kelola Halaman Web
	</h5>
										
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Catalog</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php foreach ($catalog as $item) : ?>
                                <?= $item['total']; ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Category</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php foreach ($category as $item) : ?>
                                <?= $item['total']; ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Designer Verified</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php foreach ($designer_verified as $item) : ?>
                                <?= $item['total']; ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Designer Unverified</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php foreach ($designer_unverified as $item) : ?>
                                <?= $item['total']; ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>