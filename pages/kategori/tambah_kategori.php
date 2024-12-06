<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Kategori</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Kategori</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus"></i>
                    Tambah Kategori
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo BASE_URL; ?>/pages/proses_tambah_kategori.php">
                        <!-- input text -->
                        <div class="form-group">
                            <label for="kategoriNama">Nama</label>
                            <input type="text" class="form-control" id="kategoriNama" name="kategori_nama" autofocus required>
                        </div>
                        <!-- textarea -->
                        <div class="form-group">
                            <label for="kategoriDeskripsi">Keterangan</label>
                            <textarea class="form-control" id="kategoriDeskripsi" name="kategori_deskripsi" rows="3" required></textarea>
                        </div>
                        <!-- input button -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle mr-1"></i>Simpan
                        </button>
                        <a href="kategori.php" class="btn btn-link float-right">
                            <i class="fas fa-arrow-left mr-1"></i>
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>