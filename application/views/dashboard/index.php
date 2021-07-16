<!-- counters -->

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-chart-areaspline icon-lg text-success"></i>
                        <div class="ml-3">
                            <p class="mb-0">Total Transaction</p>
                            <h6><?= count($transaksi); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-square-inc-cash icon-lg text-warning"></i>
                        <div class="ml-3">
                            <p class="mb-0">Total Transaction Value</p>
                            <h6><?= $currency['app_currency'] ?>
                                <?= number_format($saldo['total'] , 0, ".", ".") ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-account-multiple icon-lg text-info"></i>
                        <div class="ml-3">
                            <p class="mb-0">Total Users</p>
                            <h6><?= count($user); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-motorbike icon-lg text-danger"></i>
                        <div class="ml-3">
                            <p class="mb-0">Total Driver</p>
                            <h6><?= count($hitungdriver); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <i class="mdi mdi-store icon-lg text-primary"></i>
                        <div class="ml-3">
                            <p class="mb-0">Total Merchant</p>
                            <h6><?= count($mitra); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of counter -->

    <!-- start chart -->

    <div class="row">

        <div class="col-lg-6">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Mountly Transaction</h6>
                            <p class="card-description">Products that are creating the most revenue and
                                their sales throughout the year and the variation in behavior of sales.</p>
                            <div id="js-legend" class="chartjs-legend mt-4 mb-5"></div>
                            <div class="demo-chart">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Mountly Transaction Merchant</h6>
                            <p class="card-description">Products that are creating the most revenue and
                                their sales throughout the year and the variation in behavior of sales.</p>
                            <div id="js-legend2" class="chartjs-legend mt-4 mb-5"></div>
                            <div class="demo-chart">
                                <canvas id="merchantChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end of chart -->
    <!-- start latest Transaction -->
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <?php if ($this->session->flashdata()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata('demo'); ?>
                            <?php echo $this->session->flashdata('cancel'); ?>
                            <?php echo $this->session->flashdata('hapus'); ?>
                        </div>
                    <?php endif; ?>
                    <h4 class="card-title">Latest Transaction</h4>
                    <div class="tab-minimal tab-minimal-success">
                        <ul class="nav nav-tabs" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="tab-2-1" data-toggle="tab" href="#ride-2-1" role="tab" aria-controls="ride-2-1" aria-selected="true">
                                    <i class="mdi mdi-motorbike"></i><?= $fitur[0]['fitur'] ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-2" data-toggle="tab" href="#car-2-2" role="tab" aria-controls="car-2-2" aria-selected="false">
                                    <i class=" mdi mdi-car"></i><?= $fitur[1]['fitur'] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-3" data-toggle="tab" href="#rent-2-3" role="tab" aria-controls="rent-2-3" aria-selected="false">
                                    <i class="mdi mdi-package"></i><?= $fitur[2]['fitur'] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-4" data-toggle="tab" href="#send-2-4" role="tab" aria-controls="send-2-4" aria-selected="false">
                                    <i class="mdi mdi-timer"></i><?= $fitur[3]['fitur'] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-5" data-toggle="tab" href="#send-2-5" role="tab" aria-controls="send-2-5" aria-selected="false">
                                    <i class="mdi mdi-food-fork-drink"></i><?= $fitur[4]['fitur'] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-6" data-toggle="tab" href="#send-2-6" role="tab" aria-controls="send-2-6" aria-selected="false">
                                    <i class="mdi mdi-shopping"></i><?= $fitur[5]['fitur'] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-7" data-toggle="tab" href="#send-2-7" role="tab" aria-controls="send-2-7" aria-selected="false">
                                    <i class="mdi mdi-corn"></i><?= $fitur[6]['fitur'] ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-8" data-toggle="tab" href="#send-2-8" role="tab" aria-controls="send-2-8" aria-selected="false">
                                    <i class="mdi mdi-chart-bubble"></i><?= $fitur[7]['fitur'] ?></a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <!-- data ride -->
                            <div class="tab-pane fade show active" id="ride-2-1" s="s" role="tabpanel" aria-labelledby="tab-2-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="mdi mdi-motorbike"></i> <?= $fitur[0]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing11" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Destination</th>
                                                                <th>Price</th>
                                                                <th>Payment Method</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[0]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_tujuan'] ?></td>
                                                                        <td><?= $currency['app_currency'] ?>
                                                                            <?= number_format($tr['biaya_akhir'] , 0, ".", ".") ?></td>
                                                                        <td>
                                                                            <?php if ($tr['pakai_wallet'] == '0') {
                                                                                echo 'CASH';
                                                                            } else {
                                                                                echo 'WALLET';
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of data ride -->

                            <!-- data car -->
                            <div class="tab-pane fade" id="car-2-2" role="tabpanel" aria-labelledby="tab-2-2">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title"><i class="mdi mdi-car"></i> <?= $fitur[1]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing1" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Destination</th>
                                                                <th>Price</th>
                                                                <th>Payment Method</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[1]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_tujuan'] ?></td>
                                                                        <td><?= $currency['app_currency'] ?>
                                                                            <?= number_format($tr['biaya_akhir'] , 0, ".", ".") ?></td>
                                                                        <td>
                                                                            <?php if ($tr['pakai_wallet'] == '0') {
                                                                                echo 'CASH';
                                                                            } else {
                                                                                echo 'WALLET';
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end data car -->

                            <!-- data send -->
                            <div class="tab-pane fade" id="rent-2-3" role="tabpanel" aria-labelledby="tab-2-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="mdi mdi-package"></i> <?= $fitur[2]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing2" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Destination</th>
                                                                <th>Price</th>
                                                                <th>Payment Method</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[2]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_tujuan'] ?></td>
                                                                        <td><?= $currency['app_currency'] ?>
                                                                            <?= number_format($tr['biaya_akhir'] , 0, ".", ".") ?></td>
                                                                        <td>
                                                                            <?php if ($tr['pakai_wallet'] == '0') {
                                                                                echo 'CASH';
                                                                            } else {
                                                                                echo 'WALLET';
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of data send -->

                            <!-- data rent -->
                            <div class="tab-pane fade" id="send-2-4" role="tabpanel" aria-labelledby="tab-2-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="mdi mdi-timer"></i> <?= $fitur[3]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing3" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Price</th>
                                                                <th>Payment Method</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[3]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td><?= $currency['app_currency'] ?>
                                                                            <?= number_format($tr['biaya_akhir'] , 0, ".", ".") ?></td>
                                                                        <td>
                                                                            <?php if ($tr['pakai_wallet'] == '0') {
                                                                                echo 'CASH';
                                                                            } else {
                                                                                echo 'WALLET';
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of data rent -->

                            <div class="tab-pane fade" id="send-2-5" role="tabpanel" aria-labelledby="tab-2-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="mdi mdi-food-fork-drink"></i> <?= $fitur[4]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing4" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Price</th>
                                                                <th>Payment Method</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[4]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td><?= $currency['app_currency'] ?>
                                                                            <?= number_format($tr['biaya_akhir'] , 0, ".", ".") ?></td>
                                                                        <td>
                                                                            <?php if ($tr['pakai_wallet'] == '0') {
                                                                                echo 'CASH';
                                                                            } else {
                                                                                echo 'WALLET';
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="send-2-6" role="tabpanel" aria-labelledby="tab-2-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="mdi mdi-shopping"></i> <?= $fitur[5]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing5" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Price</th>
                                                                <th>Payment Method</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[5]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td><?= $currency['app_currency'] ?>
                                                                            <?= number_format($tr['biaya_akhir'] , 0, ".", ".") ?></td>
                                                                        <td>
                                                                            <?php if ($tr['pakai_wallet'] == '0') {
                                                                                echo 'CASH';
                                                                            } else {
                                                                                echo 'WALLET';
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="send-2-7" role="tabpanel" aria-labelledby="tab-2-7">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="mdi mdi-corn"></i> <?= $fitur[6]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing6" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Price</th>
                                                                <th>Payment Method</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[6]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td><?= $currency['app_currency'] ?>
                                                                            <?= number_format($tr['biaya_akhir'] , 0, ".", ".") ?></td>
                                                                        <td>
                                                                            <?php if ($tr['pakai_wallet'] == '0') {
                                                                                echo 'CASH';
                                                                            } else {
                                                                                echo 'WALLET';
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="send-2-8" role="tabpanel" aria-labelledby="tab-2-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="mdi mdi-chart-bubble"></i> <?= $fitur[7]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing7" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Price</th>
                                                                <th>Payment Method</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[7]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td><?= $currency['app_currency'] ?>
                                                                            <?= number_format($tr['biaya_akhir'] , 0, ".", ".") ?></td>
                                                                        <td>
                                                                            <?php if ($tr['pakai_wallet'] == '0') {
                                                                                echo 'CASH';
                                                                            } else {
                                                                                echo 'WALLET';
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="send-2-9" role="tabpanel" aria-labelledby="tab-2-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="mdi mdi-bike"></i> <?= $fitur[8]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing8" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Price</th>
                                                                <th>Payment Method</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[8]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td><?= $currency['app_currency'] ?>
                                                                            <?= number_format($tr['biaya_akhir'] , 0, ".", ".") ?></td>
                                                                        <td>
                                                                            <?php if ($tr['pakai_wallet'] == '0') {
                                                                                echo 'CASH';
                                                                            } else {
                                                                                echo 'WALLET';
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="send-2-10" role="tabpanel" aria-labelledby="tab-2-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="mdi mdi-ambulance"></i> <?= $fitur[9]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing9" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[9]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="send-2-11" role="tabpanel" aria-labelledby="tab-2-11">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"><i class="mdi mdi-bus"></i><?= $fitur[10]['fitur'] ?></h4>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="order-listing10" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Customer</th>
                                                                <th>Driver</th>
                                                                <th>Pick Up</th>
                                                                <th>Price</th>
                                                                <th>Payment Method</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1;
                                                            foreach ($transaksi as $tr) {
                                                                if ($tr['order_fitur'] == $fitur[10]['id_fitur']) { ?>

                                                                    <tr>
                                                                        <td><?= $i; ?></td>
                                                                        <td><?= $tr['fullnama'] ?></td>
                                                                        <td><?= $tr['nama_driver'] ?></td>
                                                                        <td style="max-width:300px;"><?= $tr['alamat_asal'] ?></td>
                                                                        <td><?= $currency['app_currency'] ?>
                                                                            <?= number_format($tr['biaya_akhir'] , 0, ".", ".") ?></td>
                                                                        <td>
                                                                            <?php if ($tr['pakai_wallet'] == '0') {
                                                                                echo 'CASH';
                                                                            } else {
                                                                                echo 'WALLET';
                                                                            } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($tr['status'] == '2') { ?>
                                                                                <label class="badge badge-primary"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '3') { ?>
                                                                                <label class="badge badge-success"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '5') { ?>
                                                                                <label class="badge badge-danger"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                            <?php if ($tr['status'] == '4') { ?>
                                                                                <label class="badge badge-info"><?= $tr['status_transaksi']; ?></label>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url(); ?>dashboard/detail/<?= $tr['id_transaksi']; ?>" class="btn btn-outline-primary">View</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php $i++;
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end of latest transaction -->
</div>

<!-- footer -->
<?php $this->load->view('includes/footer'); ?>

<!-- End custom js for this page-->


<script>
    (function($) {
        'use strict';
        $(function() {
            if ($("#salesChart").length) {
                var ctx = document
                    .getElementById('salesChart')
                    .getContext("2d");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [
                            'Jan',
                            'Feb',
                            'Mar',
                            'Apr',
                            'May',
                            'Jun',
                            'Jul',
                            'Aug',
                            'sep',
                            'okt',
                            'nov',
                            'des'
                        ],
                        datasets: [{
                            label: "<?= $fitur[0]['fitur'] ?>",
                            borderColor: 'rgba(171, 140 ,228, 1)',
                            backgroundColor: 'rgba(171, 140 ,228, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan1[0]['jumlah'] ?>,
                                <?= $feb1[0]['jumlah'] ?>,
                                <?= $mar1[0]['jumlah'] ?>,
                                <?= $apr1[0]['jumlah'] ?>,
                                <?= $mei1[0]['jumlah'] ?>,
                                <?= $jun1[0]['jumlah'] ?>,
                                <?= $jul1[0]['jumlah'] ?>,
                                <?= $aug1[0]['jumlah'] ?>,
                                <?= $sep1[0]['jumlah'] ?>,
                                <?= $okt1[0]['jumlah'] ?>,
                                <?= $nov1[0]['jumlah'] ?>,
                                <?= $des1[0]['jumlah'] ?>
                            ]
                        }, {
                            label: "<?= $fitur[1]['fitur'] ?>",
                            borderColor: 'rgba(88, 216 ,163, 1)',
                            backgroundColor: 'rgba(88, 216 ,163, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan2[0]['jumlah'] ?>,
                                <?= $feb2[0]['jumlah'] ?>,
                                <?= $mar2[0]['jumlah'] ?>,
                                <?= $apr2[0]['jumlah'] ?>,
                                <?= $mei2[0]['jumlah'] ?>,
                                <?= $jun2[0]['jumlah'] ?>,
                                <?= $jul2[0]['jumlah'] ?>,
                                <?= $aug2[0]['jumlah'] ?>,
                                <?= $sep2[0]['jumlah'] ?>,
                                <?= $okt2[0]['jumlah'] ?>,
                                <?= $nov2[0]['jumlah'] ?>,
                                <?= $des2[0]['jumlah'] ?>
                            ]
                        }, {
                            label: "<?= $fitur[2]['fitur'] ?>",
                            borderColor: 'rgba(255, 180 ,99, 1)',
                            backgroundColor: 'rgba(255, 180 ,99, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan5[0]['jumlah'] ?>,
                                <?= $feb5[0]['jumlah'] ?>,
                                <?= $mar5[0]['jumlah'] ?>,
                                <?= $apr5[0]['jumlah'] ?>,
                                <?= $mei5[0]['jumlah'] ?>,
                                <?= $jun5[0]['jumlah'] ?>,
                                <?= $jul5[0]['jumlah'] ?>,
                                <?= $aug5[0]['jumlah'] ?>,
                                <?= $sep5[0]['jumlah'] ?>,
                                <?= $okt5[0]['jumlah'] ?>,
                                <?= $nov5[0]['jumlah'] ?>,
                                <?= $des5[0]['jumlah'] ?>
                            ]
                        }, {
                            label: "<?= $fitur[3]['fitur'] ?>",
                            borderColor: 'rgba(255, 0, 0, 1)',
                            backgroundColor: 'rgba(255, 0, 0, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan6[0]['jumlah'] ?>,
                                <?= $feb6[0]['jumlah'] ?>,
                                <?= $mar6[0]['jumlah'] ?>,
                                <?= $apr6[0]['jumlah'] ?>,
                                <?= $mei6[0]['jumlah'] ?>,
                                <?= $jun6[0]['jumlah'] ?>,
                                <?= $jul6[0]['jumlah'] ?>,
                                <?= $aug6[0]['jumlah'] ?>,
                                <?= $sep6[0]['jumlah'] ?>,
                                <?= $okt6[0]['jumlah'] ?>,
                                <?= $nov6[0]['jumlah'] ?>,
                                <?= $des6[0]['jumlah'] ?>
                            ]
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                            position: "top"
                        },
                        scales: {
                            xAxes: [{
                                ticks: {
                                    display: true,
                                    beginAtZero: true,
                                    fontColor: 'rgba(0, 0, 0, 1)'
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    color: 'transparent',
                                    zeroLineColor: '#eeeeee'
                                }
                            }],
                            yAxes: [{
                                gridLines: {
                                    drawBorder: true,
                                    display: true,
                                    color: '#eeeeee'
                                },
                                categoryPercentage: 0.5,
                                ticks: {
                                    display: true,
                                    beginAtZero: true,
                                    stepSize: 20,
                                    max: 100,
                                    fontColor: 'rgba(0, 0, 0, 1)'
                                }
                            }]
                        }
                    },
                    elements: {
                        point: {
                            radius: 0
                        }
                    }
                });
                document.getElementById('js-legend').innerHTML = myChart.generateLegend();
            }
        });
    })(jQuery);

    (function($) {
        'use strict';
        $(function() {
            if ($("#merchantChart").length) {
                var ctx = document
                    .getElementById('merchantChart')
                    .getContext("2d");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [
                            'Jan',
                            'Feb',
                            'Mar',
                            'Apr',
                            'May',
                            'Jun',
                            'Jul',
                            'Aug',
                            'sep',
                            'okt',
                            'nov',
                            'des'
                        ],
                        datasets: [{
                            label: "<?= $fitur[4]['fitur'] ?>",
                            borderColor: 'rgba(239, 255 ,0, 1)',
                            backgroundColor: 'rgba(239, 255 ,0, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan10[0]['jumlah'] ?>,
                                <?= $feb10[0]['jumlah'] ?>,
                                <?= $mar10[0]['jumlah'] ?>,
                                <?= $apr10[0]['jumlah'] ?>,
                                <?= $mei10[0]['jumlah'] ?>,
                                <?= $jun10[0]['jumlah'] ?>,
                                <?= $jul10[0]['jumlah'] ?>,
                                <?= $aug10[0]['jumlah'] ?>,
                                <?= $sep10[0]['jumlah'] ?>,
                                <?= $okt10[0]['jumlah'] ?>,
                                <?= $nov10[0]['jumlah'] ?>,
                                <?= $des10[0]['jumlah'] ?>
                            ]
                        }, {
                            label: "<?= $fitur[5]['fitur'] ?>",
                            borderColor: 'rgba(108, 0 ,0, 1)',
                            backgroundColor: 'rgba(216, 0 ,0, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan11[0]['jumlah'] ?>,
                                <?= $feb11[0]['jumlah'] ?>,
                                <?= $mar11[0]['jumlah'] ?>,
                                <?= $apr11[0]['jumlah'] ?>,
                                <?= $mei11[0]['jumlah'] ?>,
                                <?= $jun11[0]['jumlah'] ?>,
                                <?= $jul11[0]['jumlah'] ?>,
                                <?= $aug11[0]['jumlah'] ?>,
                                <?= $sep11[0]['jumlah'] ?>,
                                <?= $okt11[0]['jumlah'] ?>,
                                <?= $nov11[0]['jumlah'] ?>,
                                <?= $des11[0]['jumlah'] ?>
                            ]
                        }, {
                            label: "<?= $fitur[6]['fitur'] ?>",
                            borderColor: 'rgba(2, 90 ,32, 1)',
                            backgroundColor: 'rgba(0, 164 ,55, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan12[0]['jumlah'] ?>,
                                <?= $feb12[0]['jumlah'] ?>,
                                <?= $mar12[0]['jumlah'] ?>,
                                <?= $apr12[0]['jumlah'] ?>,
                                <?= $mei12[0]['jumlah'] ?>,
                                <?= $jun12[0]['jumlah'] ?>,
                                <?= $jul12[0]['jumlah'] ?>,
                                <?= $aug12[0]['jumlah'] ?>,
                                <?= $sep12[0]['jumlah'] ?>,
                                <?= $okt12[0]['jumlah'] ?>,
                                <?= $nov12[0]['jumlah'] ?>,
                                <?= $des12[0]['jumlah'] ?>
                            ]
                        }, {
                            label: "<?= $fitur[7]['fitur'] ?>",
                            borderColor: 'rgba(0, 10, 155, 1)',
                            backgroundColor: 'rgba(0, 17, 255, 0.3)',
                            pointRadius: 0,
                            fill: true,
                            borderWidth: 3,
                            fill: 'origin',
                            data: [
                                <?= $jan13[0]['jumlah'] ?>,
                                <?= $feb13[0]['jumlah'] ?>,
                                <?= $mar13[0]['jumlah'] ?>,
                                <?= $apr13[0]['jumlah'] ?>,
                                <?= $mei13[0]['jumlah'] ?>,
                                <?= $jun13[0]['jumlah'] ?>,
                                <?= $jul13[0]['jumlah'] ?>,
                                <?= $aug13[0]['jumlah'] ?>,
                                <?= $sep13[0]['jumlah'] ?>,
                                <?= $okt13[0]['jumlah'] ?>,
                                <?= $nov13[0]['jumlah'] ?>,
                                <?= $des13[0]['jumlah'] ?>
                            ]
                        }, ]
                    },
                    options: {
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                            position: "top"
                        },
                        scales: {
                            xAxes: [{
                                ticks: {
                                    display: true,
                                    beginAtZero: true,
                                    fontColor: 'rgba(0, 0, 0, 1)'
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    color: 'transparent',
                                    zeroLineColor: '#eeeeee'
                                }
                            }],
                            yAxes: [{
                                gridLines: {
                                    drawBorder: true,
                                    display: true,
                                    color: '#eeeeee'
                                },
                                categoryPercentage: 0.5,
                                ticks: {
                                    display: true,
                                    beginAtZero: true,
                                    stepSize: 20,
                                    max: 100,
                                    fontColor: 'rgba(0, 0, 0, 1)'
                                }
                            }]
                        }
                    },
                    elements: {
                        point: {
                            radius: 0
                        }
                    }
                });
                document.getElementById('js-legend2').innerHTML = myChart.generateLegend();
            }
        });
    })(jQuery);
</script>