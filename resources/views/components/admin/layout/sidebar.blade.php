<aside class="main-sidebar sidebar-white-primary elevation-4" style="background-color: #000000">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image d-flex align-items-center justify-content-center" style="color: #ffffff; width: 3em; height: 3em;">
                <img src="{{ url('public/admin/dist/img/Logo ppks.png') }}" class="img-circle elevation-1" alt="User Image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="info d-flex align-items-center justify-content-center">
                <a href="#" class="d-block" style="color: #ffffff; text-align: center;">WEB SATGAS<br>PPKS POLITAP<br></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class ="nav-icon fas fa-home" style="color: #ffffff"></i>
                        <p style="color: #ffffff">
                            Beranda
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul style="color: #ffffff" class="nav nav-treeview">
                        <x-admin.layout.sidebar.menu-item url="admin/slide" label="Slide" icon="fas fa-chevron-circle-right" />
                        <x-admin.layout.sidebar.menu-item url="admin/deskripsi" label="Deskripsi" icon="fas fa-clipboard-list" />
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users" style="color: #ffffff"></i>
                        <p style="color: #ffffff">
                            Profil
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview"  style="color: #ffffff">
                        <x-admin.layout.sidebar.menu-item url="admin/tentang" label="Tentang Satgas PPKS"
                            icon="fas fa-info-circle" />
                        <x-admin.layout.sidebar.menu-item url="admin/struktur" label="Struktur Satgas PPKS"
                            icon="fas fa-sitemap" />
                        <x-admin.layout.sidebar.menu-item url="admin/dokumentasi" label="Dokumentasi Kegiatan"
                            icon="fas fa-camera-retro" />
                    </ul>
                </li>
                <x-admin.layout.sidebar.menu-item url="admin/materi" label="Materi" icon="fas fa-download" />
                <x-admin.layout.sidebar.menu-item url="admin/berita" label="Berita" icon="fas fa-newspaper" />
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope-open-text" style="color: #ffffff"></i>
                        <p style="color: #ffffff">
                            Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <x-admin.layout.sidebar.menu-item url="admin/alur" label="alur pelaporan" icon="fas fa-sync" />
                        <x-admin.layout.sidebar.menu-item url="admin/lapor" label="lapor" icon="fas fa-user-secret" />
                            </ul>
                        </li>
                        <x-admin.layout.sidebar.menu-item url="admin/user" label="user" icon="fas fa-user-secret" />
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
