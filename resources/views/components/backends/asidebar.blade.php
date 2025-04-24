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

        <li class="nav-item">
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
                {{-- <li>
                    <a href="#" class="{{ request()->routeIs('agent.category.create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Category Create</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="{{ request()->routeIs('agent.unit.list') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Unit Listing</span>
                    </a>
                </li> --}}
            </ul>
        </li><!-- End Category Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('agent.profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav --> --}}




    </ul>
    {{-- <div class="mt-3 text-center">
        <p class="text-secondary fst-italic">made by <a href="#">mahfuzul islam</a></p>
    </div> --}}

</aside><!-- End Sidebar-->
