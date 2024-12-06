<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Arsip</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/pages/dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Arsip</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-file-alt mr-1"></i>
                    Tabel Data Arsip
                    <a href="tambah_arsip.php" class="btn btn-primary float-right">
                        <i class="fas fa-cloud-upload-alt mr-2"></i> Upload Arsip
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Upload</th>
                                    <th>Arsip</th>
                                    <th>Kategori</th>
                                    <th>Petugas</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Upload</th>
                                    <th>Arsip</th>
                                    <th>Kategori</th>
                                    <th>Petugas</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>17:07:30 12-10-2019</td>
                                    <td>
                                        <a href='arsip_preview.php'><u>Contoh Surat Cuti Sakit Pegawai baru</u></a>
                                    </td>
                                    <td>Surat Kesehatan Pegawai</td>
                                    <td>Jamilah Suanda</td>
                                    <td>Contoh Surat Cuti Sakit Pegawai baru</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-success btn-sm me-2" title="Download">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>17:06:55 12-10-2019</td>
                                    <td>
                                        <a href='arsip_preview.php'><u>MN-008</u></a>
                                    </td>
                                    <td>Curriculum Vitae</td>
                                    <td>Jamilah Suanda</td>
                                    <td>Contoh Curriculum Vitae untuk pegawai baru</td>
                                    <td>
                                        <div class="btn-group" aria-label="Opsi">
                                            <a href="#" class="btn btn-outline-success btn-sm" title="Download"><i class="fas fa-download"></i></a>
                                            &nbsp;
                                            <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>17:05:22 12-10-2019</td>
                                    <td>
                                        <a href='arsip_preview.php'><u>Surat Perintah Kerja Proyek Jembatan</u></a>
                                    </td>
                                    <td>Surat Perintah Kerja Proyek Jembatan</td>
                                    <td>Junaidi Mus</td>
                                    <td>Surat SPK Kontrak Jembatan Layang</td>
                                    <td>
                                        <div class="btn-group" aria-label="Opsi">
                                            <a href="#" class="btn btn-outline-success btn-sm mr-2" title="Download">
                                                <i class="fas fa-download"></i>
                                            </a>
                                            <a href="#" class="btn btn-outline-danger btn-sm" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL; ?>assets/demo/datatables-demo.js"></script>

    <?php include __DIR__ . '/../../inc/footer.php'; ?>