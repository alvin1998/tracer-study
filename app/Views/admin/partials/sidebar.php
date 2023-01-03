<?php    
    $sessData = \Config\Services::session();
    $sessData->start();
    use \Config\Database;
    $this->db = Database::connect();
?>
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="<?= base_url($sessData->group); ?>" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Apps</li>
                <li>
                    <a href="<?= base_url($sessData->group."/users"); ?>" class="waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-chat">Management User</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url($sessData->group."/report"); ?>" class="waves-effect">
                        <i class="bx bx-desktop"></i>
                        <span key="t-chat">Laporan Pendaftaran</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url($sessData->group."/report/training"); ?>" class="waves-effect">
                        <i class="bx bx-desktop"></i>
                        <span key="t-chat">Laporan Pelatihan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url($sessData->group."/report/survey"); ?>" class="waves-effect">
                        <i class="bx bx-desktop"></i>
                        <span key="t-chat">Laporan Survey</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url($sessData->group."/profile"); ?>" class="waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-chat">Profil</span>
                    </a>
                </li>  
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
