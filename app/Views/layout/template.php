<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome/all.min.css') ?>">
    <!-- Bootstrap DatePicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.min.css') ?>">
    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/codebreak.png') ?>">

</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h4 class="page-title">Pembagian Jadwal Ujian Skripsi</h4>
            </div>
        </div>
    </div> -->
        <?= $this->include('layout/navbar'); ?>
        <?= $this->renderSection('content'); ?>

    </div>

    <!-- Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url('login/auth'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <h5>Silahakan Memasukkan Username dan Password Anda Untuk Login.</h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" placeholder="username" aria-label="username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="far fa-id-card" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span style="color: white;">Batal</span></button>
                        <button type="submit" class="btn btn-info"><span style="color: white;">Login</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Melakukan Logout?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Klik Tombol "Logout" Jika Anda Sudah Yakin.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span style="color: white;">Batal</span></button>
                    <a class="btn btn-info" href="<?php echo base_url('login/logout') ?>"><span style="color: white;">Logout</span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Bootstrap DatePicker -->
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
    <!-- Seidebar Js -->
    <script src="<?php echo base_url('assets/js/sidebarmenu.js') ?>"></script>
    <!-- Waves Js -->
    <script src="<?php echo base_url('assets/js/waves.js') ?>"></script>
    <!-- Custome Js -->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
    <script>
        $(function() {
            $('#datepicker').datepicker({
                format: "yyyy-mm-dd",
            });
        });
    </script>

</body>

</html>