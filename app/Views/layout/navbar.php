<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand" href="<?= base_url('home/'); ?>">
                <b class="logo-icon">
                    <img src="<?= base_url('assets/img/codebreak.png'); ?>" width="36" alt="homepage" />
                </b>
                <span class="logo-text">
                    <img src="<?= base_url('assets/img/logo-text.png'); ?>" alt="homepage" />
                </span>
            </a>

            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav d-none d-md-block d-lg-none">
                <li class="nav-item">
                    <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li>
                    <a class="profile-pic" href="#">
                        <img src="<?= base_url('assets/img/codebreak.png'); ?>" alt="user-img" width="30" class="img-circle"><span class="text-white font-medium">CodeBreak</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <?= $this->include('layout/sidebar'); ?>
    </div>
</aside>