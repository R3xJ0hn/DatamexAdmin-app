<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Auth::user()->avatar_path }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link active">
                        <i class="fa-regular fa-grid-horizontal"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/schoolyear" class="nav-link">
                        <i class="fa-light fa-graduation-cap"></i>
                        <p>
                            School Year
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/sections" class="nav-link">
                        <i class="fa-light fa-chalkboard-user"></i>
                        <p>
                            Sections
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="fa-light fa-screen-users"></i>
                        <p>
                            Students
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="fa-light fa-right-from-bracket"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
