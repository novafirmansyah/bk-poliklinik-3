<?php 
    include "../../../config/connection.php";

    if (isset($_GET['id_daftar_poli']) && $_GET['id_daftar_poli'] != null) {
        // Get Data Pasien
        $id = $_GET['id_daftar_poli'];
        $query = "SELECT
        pasien.id AS id_pasien,
        pasien.nama AS nama_pasien
        FROM pasien INNER JOIN daftar_poli ON daftar_poli.id_pasien = pasien.id
        WHERE daftar_poli.id = $id
        ";
        $result = mysqli_query($connect, $query);
        $data = mysqli_fetch_assoc($result);
    } else {
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/bk-poliklinik/views/pages/dokter?page=memeriksa_pasien');
    }
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Halaman Periksa Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Poliklinik BK</a></li>
                    <li class="breadcrumb-item">Memeriksa Pasien</li>
                    <li class="breadcrumb-item active">Periksa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <p class="my-2 card-title">Form Periksa Pasien</p>
                </div>
                <div class="card-body">
                    <form action="<?= $BASE_DOKTER_CONTROLLERS. '/periksa/create.php' ?>" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <input type="hidden" name="id_daftar_poli" class="form-control" value="<?= $id ?>">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Nama Pasien</label>
                                <input type="text" readonly class="form-control" name="nama" value="<?= $data['nama_pasien'] ?>">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="form-label">Tanggal Periksa</label>
                                <input type="datetime-local" class="form-control" name="tanggal_periksa">
                            </div>
                            <div class="col-12 my-4">
                                <label class="form-label">Catatan</label>
                                <textarea name="catatan" id="catatan" cols="30" rows="4" placeholder="Masukkan catatan pemeriksaan" class="form-control"></textarea>
                            </div>
                            <div class="col-12 mb-4">
                                <label class="form-label">Obat</label>
                                <select name="obat[]" id="obat" class="form-control" multiple>
                                    <option value="">-Pilih Obat-</option>
                                    <?php
                                        include "../../../config/connection.php";

                                        $query_obat = "SELECT * FROM obat";
                                        $db_obat = mysqli_query($connect, $query_obat);

                                        while ($obat = mysqli_fetch_assoc($db_obat)) {
                                    ?>
                                    <option value="<?= $obat['id'] ?>"><?= $obat['nama_obat'] ?> - <?= $obat['harga'] ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" name="submit">
                                    <i class="fas fa-save"></i>
                                     Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>