<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="page-wrapper" style="min-height: 250px;">

    <!-- Normal Part -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <form action="<?php echo base_url('home/detail_jadwal/' . $nim); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="addJadwal" value="onEdit">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-grow-1 bd-highlight">
                                <h3 class="box-title">Detail Jadwal Ujian Skripsi</h3>
                            </div>
                            <div class="p-2 bd-highlight">
                                <a href="<?= base_url('home/jadwal'); ?>" class="btn btn-success btn-sm">
                                    <span style="color: white;">Kembali</span>
                                </a>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>
                                        Nama Mahasiswa
                                    </td>
                                    <td>
                                        <?= $data_jadwal['nama_mahasiswa']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        NIM
                                    </td>
                                    <td>
                                        <?= $data_jadwal['nim']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Judul Skripsi
                                    </td>
                                    <td>
                                        <?= $data_jadwal['judul_skripsi']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jadwal Ujian
                                    </td>
                                    <td>
                                        <?= $data_jadwal['jadwal_ujian']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Dosen Pembimbing
                                    </td>
                                    <td>
                                        <?= $data_jadwal['dosen_pembimbing']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Dosen Penguji
                                    </td>
                                    <td>
                                        <?= $data_jadwal['dosen_penguji']; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center"> 2022 © CodeBreak
    </footer>
</div>
<?= $this->endSection(); ?>