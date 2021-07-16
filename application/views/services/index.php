<div class="content-wrapper">
    <div class="row grid-margin">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php if ($this->session->flashdata('ubah')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('ubah'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('demo')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $this->session->flashdata('demo'); ?>
                        </div>
                    <?php endif; ?>
                    <h6 class="card-title">Services</h6>
                    <div class="table-responsive">
                        <table id="order-listing" class="table mt-3 border-top">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Service</th>
                                    <th>Icon</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Unit</th>
                                    <th>Comission</th>
                                    <th>Minimum Price</th>
                                    <th>Range</th>
                                    <th>Minimum Wallet</th>
                                    <th>Job</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($service as $s) { ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $s['fitur']; ?></td>
                                        <td>
                                            <div class="badge badge-primary">
                                                <img src="<?= base_url('images/fitur/') . $s['icon']; ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <?= $duit ?>
                                            <?= number_format($s['biaya'] , 0, ".", ".") ?>
                                        </td>
                                        <td><?= $s['nilai']; ?>%</td>
                                        <td>/<?= $s['keterangan_biaya']; ?></td>
                                        <td><?= $s['komisi']; ?> %</td>
                                        <td><?= $duit ?>
                                            <?= number_format($s['biaya_minimum'] , 0, ".", ".") ?></td>
                                        <td><?= $s['jarak_minimum']; ?></td>
                                        <td><?= $duit ?>
                                            <?= number_format($s['wallet_minimum'] , 0, ".", ".") ?></td>
                                        <?php foreach ($driverjob as $dj) {
                                            if ($s['driver_job'] == $dj['id']) { ?>
                                                <td><?= $dj['driver_job']; ?></td>
                                        <?php }
                                        } ?>


                                        <td>
                                            <?php if ($s['active'] == 1) { ?>
                                                <label class="badge badge-success">Active</label>
                                            <?php } else { ?>
                                                <label class="badge badge-danger">Non Active</label>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url(); ?>services/ubah/<?= $s['id_fitur']; ?>">
                                                <button class="btn btn-outline-primary">Edit</button>
                                            </a>
                                        </td>
                                    <?php $i++;
                                } ?>
                                    </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>