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

        {{-- <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.category.*', 'agent.unit.*') ? '' : 'collapsed' }}"
                data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="category-nav"
                class="nav-content collapse {{ request()->routeIs('agent.category.*', 'agent.unit.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.category.list') }}"
                        class="{{ request()->routeIs('agent.category.list') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Category Listing</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.category.create') }}"
                        class="{{ request()->routeIs('agent.category.create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Category Create</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.unit.list') }}"
                        class="{{ request()->routeIs('agent.unit.list') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Unit Listing</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Category Nav -->


        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.product.*') ? '' : 'collapsed' }}" 
               data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="product-nav" class="nav-content collapse {{ request()->routeIs('agent.product.*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.product.list') }}" class="{{ request()->routeIs('agent.product.list') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Product Listing</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.product.grid') }}" class="{{ request()->routeIs('agent.product.grid') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Product Griding</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.product.create') }}" class="{{ request()->routeIs('agent.product.create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Product Create</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Product Nav -->
         --}}




        <li class="nav-heading">Pages</li>

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
