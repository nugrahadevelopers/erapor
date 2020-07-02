<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-Rapor <sup>V1.0</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        @can('kusus-admin')
            <a class="nav-link" href="{{ url('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Beranda</span></a>
        @elsecan('kusus-walikelas')
            <a class="nav-link" href="walkel.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Beranda</span></a>
        @elsecan('kusus-guru')
            <a class="nav-link" href="guru.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Beranda</span></a>
        @else
            <a class="nav-link" href="siswa.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Beranda</span></a>
        @endcan
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    @can('kusus-admin')
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Akun</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="{{ url('eadmin') }}">Admin</a>
            <a class="collapse-item" href="#">Guru</a>
            <a class="collapse-item" href="#">Siswa</a>
            </div>
        </div>
    @endcan

    @can('kusus-walikelas')
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Matpel Diampu</span></a>

        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Riwayat Mengajar</span></a>

        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Input Absen</span></a>

        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Input Nilai Sikap</span></a>

        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Prestasi</span></a>

        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Ekstrakulikuler</span></a>

        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Validasi Nilai</span></a>

        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Cetak Rapot</span></a>
    @endcan

    @can('kusus-guru')
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Matpel Diampu</span></a>

        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Riwayat Mengajar</span></a>
    @endcan

    @can('kusus-siswa')
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Nilai</span></a>
    @endcan

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
    @can('kusus-admin')
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Sekolah</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
            <a class="collapse-item" href="#">Profil Sekolah</a>
            <a class="collapse-item" href="#">Mata Pelajaran</a>
            <a class="collapse-item" href="#">Kelas</a>
            <a class="collapse-item" href="#">Tahun Ajaran</a>
            <a class="collapse-item" href="#">Ekstra</a>
            <a class="collapse-item" href="#">Kelompok Kelas</a>
            <a class="collapse-item" href="#">Kelompok Mapel</a>
            <a class="collapse-item" href="#">Kelompok Wali Kelas</a>
            </div>
        </div>
        </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
    Addons
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Login Screens:</h6>
        <a class="collapse-item" href="login.html">Login</a>
        <a class="collapse-item" href="register.html">Register</a>
        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Other Pages:</h6>
        <a class="collapse-item" href="404.html">404 Page</a>
        <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div>
    </li> -->

    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
    </li> -->

    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li> -->

    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->

</ul>
<!-- End of Sidebar -->