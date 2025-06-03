<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light"> Dashboard</span>
    </a>

    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.admins.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p> admin</p>
                    </a>
                </li>

                <!-- ممكن تضيف روابط أخرى هنا -->
            </ul>
        </nav>
    </div>
</aside>
