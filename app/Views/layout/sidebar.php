<?php $uri = current_url(true)->getSegment(3); ?>

<nav class="sidebar-nav">
    <ul id="sidebarnav">
        <!-- Normal -->
        <?php if (session()->get('user_level') != 'admin') { ?>
            <li class="sidebar-item pt-2">
                <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $uri == 'index' || $uri == '' ? 'active' : ''; ?>" href="<?= base_url('home/'); ?>" aria-expanded="false">
                    <i class="far fa-clock" aria-hidden="true"></i>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $uri == 'jadwal' || $uri == 'add_jadwal' || $uri == 'detail_jadwal' ? 'active' : ''; ?>" href="<?= base_url('home/jadwal'); ?>" aria-expanded="false">
                    <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                    <span class="hide-menu">Jadwal Ujian</span>
                </a>
            </li>
        <?php }; ?>

        <!-- Admin -->
        <?php if (session()->get('user_level') == 'admin') { ?>
            <li class="sidebar-item pt-2">
                <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $uri == 'index' || $uri == '' ? 'active' : ''; ?>" href="<?= base_url('admin/'); ?>" aria-expanded="false">
                    <i class="far fa-clock" aria-hidden="true"></i>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link <?= $uri == 'jadwal' || $uri == 'add_jadwal' || $uri == 'detail_jadwal' ? 'active' : ''; ?>" href="<?= base_url('admin/jadwal'); ?>" aria-expanded="false">
                    <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                    <span class="hide-menu">Jadwal Ujian</span>
                </a>
            </li>
        <?php }; ?>

        <?php if (is_null(session()->get('logged_in'))) { ?>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
                    <span class="hide-menu">Login</span>
                </a>
            </li>
        <?php } else { ?>
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                    <span class="hide-menu">Logout</span>
                </a>
            </li>
        <?php }; ?>
    </ul>

</nav>
<!-- End Sidebar navigation -->