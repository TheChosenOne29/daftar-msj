<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="/admin/dashboard">
                    <i class="bi-house-door-fill" class="align-text-bottom"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/cards') ? 'active' : '' }}" href="/admin/cards">
                    <i class="bi-collection-fill" class="align-text-bottom"></i>
                    Cards
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/angkatan') ? 'active' : '' }}" href="/admin/angkatan">
                    <i class="bi-calendar-week-fill" class="align-text-bottom"></i>
                    Angkatan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/link') ? 'active' : '' }}" href="/admin/link">
                    <i class="bi-arrow-up-right-square-fill" class="align-text-bottom"></i>
                    Link
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/msj1') ? 'active' : '' }}" href="/admin/msj1">
                    <i class="bi-1-circle-fill" class="align-text-bottom"></i>
                    MSJ 1
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/msj2') ? 'active' : '' }}" href="/admin/msj2">
                    <i class="bi-2-circle-fill" class="align-text-bottom"></i>
                    MSJ 2
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/msj3') ? 'active' : '' }}" href="/admin/msj3">
                    <i class="bi-3-circle-fill" class="align-text-bottom"></i>
                    MSJ 3
                </a>
            </li>
        </ul>
    </div>
</nav>