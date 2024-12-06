<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Upload Arsip</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Upload Arsip</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus"></i>
                    Upload Arsip
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo BASE_URL; ?>/pages/proses_tambah_arsip.php">
                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleInputName1">Kode Arsip</label>
                            <input type="text" class="form-control" id="exampleInputName1" autofocus>
                        </div>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Arsip</label>
                            <input type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <!-- Select -->
                        <div class="form-group">
                            <label for="selectOption">Kategori Arsip</label>
                            <select class="form-control" id="selectOption">
                                <option>Tidak Berkategori</option>
                                <option>Surat Keputusan</option>
                                <option>Surat Izin Pelaksanaan</option>
                                <option>Surat Perintah Kerja Proyek Jalan</option>
                                <option>Surat Kesehatan Pegawau</option>
                            </select>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label for="textArea">Keterangan </label>
                            <textarea class="form-control" id="textArea" rows="3"></textarea>
                        </div>
                        <!-- input file -->
                        <div class="form-group">
                            <label for="exampleInputFile1">File Arsip</label>
                            <input type="file" class="form-control-file" id="exampleInputFile1">
                        </div>
                        <!-- input button -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle mr-1"></i>Submit
                        </button>
                        <a href="arsip.php" class="btn btn-link float-right">
                            <i class="fas fa-arrow-left mr-1"></i>
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>