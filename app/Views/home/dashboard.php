<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="container-fluid">
        <?php if (session()->getFlashdata('wrong_pass')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('wrong_pass'); ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('user_or_pass')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('user_or_pass'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Sistem Informasi Jadwal Ujian Skripsi</h3>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center"> 2022 © CodeBreak
    </footer>
</div>
<?= $this->endSection(); ?>