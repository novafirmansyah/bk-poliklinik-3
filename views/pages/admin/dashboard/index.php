<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Admin</h1>
                </div><!-- /.col -->

            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php 
                                include "../../../config/connection.php";

                                $query = "SELECT COUNT(*) AS total_obat FROM obat";
                                $result = $connect->query($query);
                                $pasien = $result->fetch_assoc();
                            ?>
                            <h3><?= $pasien['total_obat']  ?></h3>
                            <p>Total Obat</p>
                        </div>
                       
                        <a href="<?= $BASE_ADMIN_PAGES . '?page=obat' ?>" class="small-box-footer">Info lainnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>