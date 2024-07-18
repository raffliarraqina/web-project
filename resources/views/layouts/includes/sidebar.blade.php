<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard.admin.index') }}">
                <i class="bi bi-grid"></i>
                <span>Admin Al Imam Islamic School</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Komponen</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('dashboard.news.index') }}">
                        <i class="bi bi-circle"></i><span>Berita</span>
                    </a>
                    <a href="{{ route('dashboard.gallery.index') }}">
                        <i class="bi bi-circle"></i><span>Galeri</span>
                    </a>
                    <a href="{{ route('dashboard.event.index') }}">
                        <i class="bi bi-circle"></i><span>Event</span>
                    </a>
                </li>
            </ul>

</aside><!-- End Sidebar-->
