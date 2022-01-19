<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="page-wrapper" style="min-height: 250px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <?php if (session()->getFlashdata('Failed')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('Failed'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="d-flex bd-highlight">
                        <div class="p-2 flex-grow-1 bd-highlight">
                            <h3 class="box-title">Lengkapi Data Jadwal Ujian Baru</h3>
                        </div>
                        <div class="p-2 bd-highlight">
                            <a href="<?= base_url('admin/jadwal'); ?>" class="btn btn-danger btn-sm">
                                <span style="color: white;">Batalkan</span>
                            </a>
                        </div>
                    </div>

                    <table class="table text-nowrap">
                        <form action="<?php echo base_url('admin/save_jadwal'); ?>" method="post">
                            <?= csrf_field(); ?>
                            <tbody>
                                <tr>
                                    <td style="padding: 0; border: 0px solid white">
                                        <span style="color: red;">*</span>Nama Mahasiswa
                                    </td>
                                    <td style="padding: 0; border: 0px solid white">
                                        <div class="form-group">
                                            <input type="text" class="form-control <?= ($validation->hasError('studentName')) ? 'is-invalid' : ''; ?>" name="studentName" placeholder="Nama Mahasiswa" value="<?= old('studentName'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('studentName'); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0; border: 0px solid white">
                                        <span style="color: red;">*</span>NIM
                                    </td>
                                    <td style="padding: 0; border: 0px solid white">
                                        <div class="form-group">
                                            <input type="text" class="form-control <?= ($validation->hasError('nim')) ? 'is-invalid' : ''; ?>" name="nim" placeholder="NIM Mahasiswa" value="<?= old('nim'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nim'); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0; border: 0px solid white">
                                        <span style="color: red;">*</span>Judul Skripsi
                                    </td>
                                    <td style="padding: 0; border: 0px solid white">
                                        <div class="form-group">
                                            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" placeholder="Judul Skripsi" value="<?= old('judul'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('judul'); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0; border: 0px solid white">
                                        <span style="color: red;">*</span>Jadwal Ujian
                                    </td>
                                    <td style="padding: 0; border: 0px solid white; position:relative;">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="input-group date" id="datepicker">
                                                    <input type="text" name="jadwal" placeholder="Jadwal Ujian" class="form-control <?= ($validation->hasError('jadwal')) ? 'is-invalid' : ''; ?>" value="<?= old('jadwal'); ?>">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('jadwal'); ?>
                                                </div>
                                            </div>
                                            <!-- <input type="text" class="form-control datetimepicker-input <?= ($validation->hasError('jadwal')) ? 'is-invalid' : ''; ?>" id="datepicker" name="jadwal" placeholder="Jadwal Ujian" data-toggle="datetimepicker" data-target="#datepicker" autocomplete="off" value="<?= old('jadwal'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('jadwal'); ?>
                                            </div> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0; border: 0px solid white">
                                        <span style="color: red;">*</span>Dosen Pembimbing
                                    </td>
                                    <td style="padding: 0; border: 0px solid white">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control <?= ($validation->hasError('dPembimbing')) ? 'is-invalid' : ''; ?>" name="dPembimbing" placeholder="Nama Dosen Pembimbing" value="<?= old('dPembimbing'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('dPembimbing'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 0; border: 0px solid white">
                                        <span style="color: red;">*</span>Dosen Penguji
                                    </td>
                                    <td style="padding: 0; border: 0px solid white">
                                        <div class="form-group">
                                            <input type="text" class="form-control <?= ($validation->hasError('dPenguji')) ? 'is-invalid' : ''; ?>" name="dPenguji" placeholder="Nama Dosen Penguji" value="<?= old('dPenguji'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('dPenguji'); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right" style="padding: 0; border: 0px solid white" colspan="2">
                                        <div class="d-flex flex-row-reverse" style="margin-top: 0px;">
                                            <button type="submit" class="btn btn-info btn-sm">
                                                <span style="color: white;">Simpan</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center"> 2022 © CodeBreak
    </footer>
</div>

<?= $this->endSection(); ?>