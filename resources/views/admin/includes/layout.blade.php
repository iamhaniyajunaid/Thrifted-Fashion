<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <title>Admin Dashboard</title>

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
            <span class="brand-title"><a href=""><img src="{{asset('assets-admin/images/logo-dark.jpg')}}" class="w-100" alt=""></a></span>
          </span>
        </a>
      </div>

      <nav class="sidebar-nav">
        <a href='/admin-index' class="nav-link {{request()->is('admin-index')?'active':''}}" aria-current="page">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Dashboard</span>
        </a>
        <a href="/admin-users" class="nav-link {{request()->is('admin-users')?'active':''}}">
          <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
          <span class="nav-text">Users</span>
        </a>
        <a href="/admin-add-user" class="nav-link {{request()->is('admin-add-user')?'active':''}}">
          <span class="nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
          <span class="nav-text">Add User</span>
        </a>
        <a href="/admin-profile" class="nav-link {{request()->is('admin-profile')?'active':''}}">
          <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
          <span class="nav-text">Profile</span>
        </a>
        <a class="nav-link {{request()->is('admin-reports')?'active':''}}" href="/admin-reports">
          <span class="nav-icon"><i class="bi bi-bar-chart-line" aria-hidden="true"></i></span>
          <span class="nav-text">Reports</span>
        </a>
        <a class="nav-link {{request()->is('admin-manage-orders')?'active':''}}" href="/admin-manage-orders">
          <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
          <span class="nav-text">Manage Orders</span>
        </a>
        <a class="nav-link {{request()->is('admin-add-product')?'active':''}}" href="/admin-add-product">
          <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
          <span class="nav-text">Add Product</span>
        </a>
        <a class="nav-link {{request()->is('admin-settings')?'active':''}}" href="/admin-settings">
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
          <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <div class="navbar-actions ms-auto">
            <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
              <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
            </button>
            <div class="dropdown">
              <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
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
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="profile-name d-none d-sm-inline">Admin</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="admin-profile">Profile</a></li>
                <li><a class="dropdown-item" href="admin-settings">Account settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      @yield('content')
      <footer class="admin-footer">
        <div class="container-fluid px-3 px-lg-4">
          <span>&copy;Copyright 2026&nbsp;<a target="_blank" class="fw-bold text-success" href="">&nbsp;Admin-Thrift Fashoin</a> </span>
          <span>All Rights Reserved.</span>
        </div>
      </footer>
    </div>
  </div>

  <script src="/assets-admin/js/bootstrap.bundle.min.js"></script>
  <script src="/assets-admin/js/main.js"></script>
</body>
</html>