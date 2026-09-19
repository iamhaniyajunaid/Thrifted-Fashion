<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="adminHMD professional admin dashboard template">
    <title>Admin Dashboard</title>
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets-admin/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets-admin/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets-admin/css/style.css">
</head>

<body>
    <div class="admin-shell">
        <div class="sidebar-backdrop" data-sidebar-close></div>

        <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
            <div class="sidebar-header">
                <a class="brand-mark" href="index" aria-label="adminHMD dashboard">
                    <span class="brand-copy">
                        <span class="brand-title"><a href=""><img
                                    src="{{ asset('assets-admin/images/logo.png') }}" class="w-100"
                                    alt=""></a></span>
                    </span>
                </a>
            </div>

            <nav class="sidebar-nav">
                <a class="nav-link {{ request()->is('admin-index') ? 'active' : '' }}"
                    href='{{ route('admin-dashboard') }}'aria-current="page">
                    <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
                    <span class="nav-text">Dashboard</span>
                </a>
                <a class="nav-link {{ request()->is('admin-users') ? 'active' : '' }}"
                    href="{{ route('admin-users') }}">
                    <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                    <span class="nav-text">Users</span>
                </a>
                <a class="nav-link {{ request()->is('admin-manage-orders') ? 'active' : '' }}"
                    href="{{ route('admin-orders') }}">
                    <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                    <span class="nav-text">Manage Orders</span>
                </a>
                <a class="nav-link {{ request()->is('admin-add-product') ? 'active' : '' }}"
                    href="{{ route('admin-product') }}">
                    <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
                    <span class="nav-text">Add Product</span>
                </a>
                <a class="nav-link {{ request()->is('admin-feedback') ? 'active' : '' }}"
                    href="{{ route('admin-feedback') }}">
                    <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <span class="nav-text">Feedback</span>
                </a>
                <a class="nav-link {{ request()->is('admin-settings') ? 'active' : '' }}" href="/admin-settings">
                    <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
                    <span class="nav-text">Settings</span>
                </a>
            </nav>

            <div class="sidebar-footer">
                <span class="sidebar-footer-text">System running smoothly</span>
            </div>
        </aside>

        <div class="admin-main">
            <nav class="navbar admin-navbar navbar-expand bg-white">
                <div class="container-fluid px-3 px-lg-4">
                    <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar"
                        aria-expanded="true" aria-label="Toggle sidebar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <span class="brand-title w-25"><a href=""><img
                                src="{{ asset('assets-admin/images/logo.png') }}"
                                class="ms-3 img-fluid d-block d-lg-none" alt=""></a></span>

                    <div class="navbar-actions ms-auto">
                        <button class="icon-button theme-toggle" type="button" data-theme-toggle
                            aria-label="Switch color theme" title="Switch color theme">
                            <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
                        </button>
                        <div class="dropdown">
                            <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                aria-label="Notifications">
                                <span class="notification-dot"></span>
                                <i class="bi bi-bell" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end notification-menu">
                                <div class="dropdown-header fw-bold text-body">Notifications</div>
                                <a class="dropdown-item" href="users">
                                    <span class="notification-title">New user registered</span>
                                    <span class="notification-time">4 minutes ago</span>
                                </a>
                                <a class="dropdown-item" href="reports">
                                    <span class="notification-title">Revenue target reached</span>
                                    <span class="notification-time">32 minutes ago</span>
                                </a>
                                <a class="dropdown-item" href="settings">
                                    <span class="notification-title">Security review completed</span>
                                    <span class="notification-time">1 hour ago</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span class="profile-name d-none d-sm-inline">Admin</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="admin-profile">Profile</a></li>
                                <li><a class="dropdown-item" href="admin-settings">Account settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            Sign out
                                        </button>
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            @yield('content')
            <footer class="admin-footer">
                <div class="container-fluid px-3 px-lg-4">
                    <span>&copy;Copyright 2026&nbsp;<a target="_blank" class="fw-bold text-success"
                            href="">&nbsp;Admin-Thrift Fashoin</a> </span>
                    <span>All Rights Reserved.</span>
                </div>
            </footer>
        </div>
    </div>

    <script src="/assets-admin/js/bootstrap.bundle.min.js"></script>
    <script src="/assets-admin/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Delete confirmation 
            document.querySelectorAll('.delete-form').forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'This data will be permanently deleted.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#dc3545',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'Cancel'
                    }).then(function(result) {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
            // Success alert for ALL delete operations
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Deleted Successfully!',
                    text: @json(session('success')),
                    confirmButtonText: 'OK',
                    timer: 2000,
                    timerProgressBar: true
                });
            @endif
        });
    </script>
</body>

</html>
