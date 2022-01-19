<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-grow-1 bd-highlight">
                            <h3 class="box-title">Daftar Pembagian Jadwal Ujian Skripsi</h3>
                        </div>
                    </div>
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group mb-3" style="margin-top: 4%;">
                                    <input type="text" name="keyword" class="form-control" placeholder="Masukkan NIM Mahasiswa" value="<?= ($keyword) ? $keyword : ''; ?>">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary btn-block">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0 text-center"></th>
                                    <th class="border-top-0 text-center">Nama Mahasiswa</th>
                                    <th class="border-top-0 text-center">NIM</th>
                                    <th class="border-top-0 text-center">Judul Skripsi</th>
                                    <th class="border-top-0 text-center">Jadwal Ujian</th>
                                    <th class="border-top-0 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 + (10 * ($current_page - 1)); ?>
                                <?php foreach ($data_jadwal as $dj) : ?>
                                    <tr>
                                        <td class="text-center"><?= $i++; ?></td>
                                        <td class="text-center"><?= $dj['nama_mahasiswa']; ?></td>
                                        <td class="text-center"><?= $dj['nim']; ?></td>
                                        <td class="text-center"><?= $dj['judul_skripsi']; ?></td>
                                        <td class="text-center"><?= $dj['jadwal_ujian']; ?></td>
                                        <td class="project-actions text-center">
                                            <a style="border-radius: 20px; padding:2px 20px 2px 20px; color:white;" class="btn btn-info" href="<?= base_url('home/detail_jadwal/' . $dj['nim']); ?>">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?= $pager->links('jadwal', 'pagination'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center"> 2022 © CodeBreak
    </footer>
</div>
<?= $this->endSection(); ?>