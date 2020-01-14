<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview ">
            <router-link to="/dashboard" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt text-blue"></i>
                <p>
                    Dashboard
                </p>
            </router-link>
        </li>
        <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
                <i class="nav-icon fa fa-cog text-green"></i>
                <p>
                    Management
                    <i class="right fas fa-angle-left "></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <router-link to="/users" class="nav-link ">
                        <i class="fas fa-users nav-icon"></i>
                        <p>User</p>
                        </a>
                </li>
                <li class="nav-item">
                    <router-link to="/developer" class="nav-link ">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Developer</p>
                        </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-treeview ">
            <router-link to="/profile" class="nav-link ">
                <i class="nav-icon fas fa-user-alt text-yellow"></i>
                <p>
                    Profile
                </p>
            </router-link>
        </li>
        <li class="nav-item has-treeview ">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link ">
                <i class="nav-icon fas fa-power-off text-red"></i>
                <p>
                    Logout
                </p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a>

        </li>


    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
