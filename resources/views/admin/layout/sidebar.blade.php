<div class="sidebar-content">
    <div class="sidebar-section">
        <div class="sidebar-section-body d-flex justify-content-center">
            <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>
            <div>
                <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                    <i class="ph-arrows-left-right"></i>
                </button>
                <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                    <i class="ph-x"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="sidebar-section">
        <ul class="nav nav-sidebar" data-nav-type="accordion">
            <li class="nav-item-header pt-0">
                <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                <i class="ph-dots-three sidebar-resize-show"></i>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : ''}}" href="{{ route('dashboard') }}">
                    <i class="ph-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item-header">
                <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Access Management</div>
                <i class="ph-dots-three sidebar-resize-show"></i>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('roles.index') ? 'active' : ''}}" href="{{ route('roles.index') }}">
                    <i class="ph-atom"></i>
                    <span>Roles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('users') ? 'active' : ''}}" href="{{ route('users.index') }}">
                    <i class="ph-users"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="nav-item-header">
                <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Configuration</div>
                <i class="ph-dots-three sidebar-resize-show"></i>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('audit') ? 'active' : ''}}" href="{{ route('audit.index') }}">
                    <i class="ph-diamonds-four"></i>
                    <span>Audit</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('logs') ? 'active' : ''}}" href="{{ route('logs') }}" target="_blank">
                    <i class="ph-bug"></i>
                    <span>Errors</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('settings') ? 'active' : ''}}" href="{{ route('logs') }}" target="_blank">
                    <i class="ph-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>
</div>