<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        @if (auth()->user()->role->name == 'admin')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? '' : 'collapsed' }}"
                    href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Admin Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
        @endif

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.dashboard') ? '' : 'collapsed' }}"
                href="{{ route('agent.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>

        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Pages</li>

        {{-- <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.system.*') ? '' : 'collapsed' }}"
                data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>System</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="category-nav" class="nav-content collapse {{ request()->routeIs('agent.system.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.system.index') }}"
                        class="{{ request()->routeIs('agent.system.index') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>System</span>
                    </a>
                </li>
                
            </ul>
        </li><!-- End Category Nav --> --}}

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.group.*') ? '' : 'collapsed' }}"
                data-bs-target="#group-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Sister Concern</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="group-nav" class="nav-content collapse {{ request()->routeIs('agent.group.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.group.index') }}"
                        class="{{ request()->routeIs('agent.group.index') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Samaira Group</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Group Nav -->


        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.profile') ? '' : 'collapsed' }}"
                href="{{ route('agent.profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.system.*') ? '' : 'collapsed' }}"
                data-bs-target="#system-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>System</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="system-nav" class="nav-content collapse {{ request()->routeIs('agent.system.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.system.header') }}"
                        class="{{ request()->routeIs('agent.system.header') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>System Header</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.system.footer') }}"
                        class="{{ request()->routeIs('agent.system.footer') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>System Footer</span>
                    </a>
                </li>
            </ul>
        </li><!-- End System Nav -->
        






    </ul>

</aside><!-- End Sidebar-->
