<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="page-wrapper" style="min-height: 300px;">
    <!-- Normal Part -->
    <?php if (!session()->getFlashdata('Failed')) { ?>
        <?php if ($edit_status == 'notEdited') { ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <?php if (session()->getFlashdata('Success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('Success'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?php echo base_url('admin/detail_jadwal/' . $nim); ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="addJadwal" value="onEdit">
                                <div class="d-flex bd-highlight">
                                    <div class="p-2 flex-grow-1 bd-highlight">
                                        <h3 class="box-title">Detail Jadwal Ujian Skripsi</h3>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <a href="<?= base_url('admin/jadwal'); ?>" class="btn btn-success btn-sm">
                                            <span style="color: white;">Kembali</span>
                                        </a>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <button id="editBiodata" class="btn btn-info btn-sm">
                                            <span style="color: white;">Edit Jadwal</span>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <form action="<?php echo base_url('admin/save_jadwal'); ?>" method="post">
                                        <?= csrf_field(); ?>
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
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }; ?>
    <?php }; ?>

    <!-- Add Schedule Part -->
    <?php if ($edit_status == 'onEdit' || session()->getFlashdata('Failed')) { ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <?php if (session()->getFlashdata('Failed')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('Failed'); ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url('admin/detail_jadwal/' . $nim); ?>" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="addJadwal" value="notEdited">
                            <input type="hidden" name="nim" value="<?= $nim; ?>">
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-grow-1 bd-highlight">
                                    <h3 class="box-title">Edit Data Jadwal Ujian</h3>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <button id="editBiodata" class="btn btn-danger btn-sm">
                                        <span style="color: white;">Batalkan</span>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <form action="<?php echo base_url('admin/update_jadwal'); ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <tbody>
                                        <tr>
                                            <td style="padding: 0; border: 0px solid white">
                                                <span style="color: red;">*</span>Nama Mahasiswa
                                            </td>
                                            <td style="padding: 0; border: 0px solid white">
                                                <div class="form-group">
                                                    <input type="text" class="form-control <?= ($validation->hasError('studentName')) ? 'is-invalid' : ''; ?>" name="studentName" placeholder="Nama Mahasiswa" value="<?= $data_jadwal['nama_mahasiswa']; ?>">
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
                                                    <input type="text" class="form-control <?= ($validation->hasError('nim')) ? 'is-invalid' : ''; ?>" name="nim" placeholder="NIM Mahasiswa" value="<?= $data_jadwal['nim']; ?>">
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
                                                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" placeholder="Judul Skripsi" value="<?= $data_jadwal['judul_skripsi']; ?>">
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
                                                    <input type="text" class="form-control datetimepicker-input <?= ($validation->hasError('jadwal')) ? 'is-invalid' : ''; ?>" id="datepicker" name="jadwal" placeholder="Jadwal Ujian" data-toggle="datetimepicker" placeholder="Tanggal Lahir" data-target="#datepicker" autocomplete="off" value="<?= $data_jadwal['jadwal_ujian']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('jadwal'); ?>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0; border: 0px solid white">
                                                <span style="color: red;">*</span>Dosen Pembimbing
                                            </td>
                                            <td style="padding: 0; border: 0px solid white">
                                                <div class="form-group">
                                                    <input type="text" class="form-control <?= ($validation->hasError('dPembimbing')) ? 'is-invalid' : ''; ?>" name="dPembimbing" placeholder="Nama Dosen Pembimbing" value="<?= $data_jadwal['dosen_pembimbing']; ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('dPembimbing'); ?>
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
                                                    <input type="text" class="form-control <?= ($validation->hasError('dPenguji')) ? 'is-invalid' : ''; ?>" name="dPenguji" placeholder="Nama Dosen Penguji" value="<?= $data_jadwal['dosen_penguji']; ?>">
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
        </div>
    <?php } ?>
    <footer class="footer text-center"> 2022 © CodeBreak
    </footer>
</div>
<?= $this->endSection(); ?>