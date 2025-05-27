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
            <a class="nav-link {{ request()->routeIs('agent.group.*') ? '' : 'collapsed' }}" data-bs-target="#group-nav"
                data-bs-toggle="collapse" href="#">
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
                <li>
                    <a href="{{ route('agent.group.samairaskill') }}"
                        class="{{ request()->routeIs('agent.group.samairaskill') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>SSDI</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.group.language') }}"
                        class="{{ request()->routeIs('agent.group.language') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Language</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.group.jphomes') }}"
                        class="{{ request()->routeIs('agent.group.jphomes') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>JP Homes</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.group.medica') }}"
                        class="{{ request()->routeIs('agent.group.medica') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Medica</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Group Nav -->

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.course.*') ? '' : 'collapsed' }}"
                data-bs-target="#course-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Course</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="course-nav" class="nav-content collapse {{ request()->routeIs('agent.course.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.course.category') }}"
                        class="{{ request()->routeIs('agent.course.category') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Course Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.course.trainer') }}"
                        class="{{ request()->routeIs('agent.course.trainer') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Course Trainer</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.course.create') }}"
                        class="{{ request()->routeIs('agent.course.create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Create Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.course.feature') }}"
                        class="{{ request()->routeIs('agent.course.feature') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Create Featured Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.course.course') }}"
                        class="{{ request()->routeIs('agent.course.course') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>All Course List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.course.ssdi') }}"
                        class="{{ request()->routeIs('agent.course.ssdi') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>SSDI Course List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.course.language') }}"
                        class="{{ request()->routeIs('agent.course.language') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Language Course List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.course.ssdi.enroll') }}"
                        class="{{ request()->routeIs('agent.course.ssdi.enroll') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>SSDI Enroll List</span>
                    </a>
                </li>

            </ul>
        </li><!-- End course Nav -->



        {{-- <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.profile') ? '' : 'collapsed' }}"
                href="{{ route('agent.profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.jphomes.*') ? '' : 'collapsed' }}"
                data-bs-target="#property-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Property</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="property-nav"
                class="nav-content collapse {{ request()->routeIs('agent.jphomes.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.jphomes.category') }}"
                        class="{{ request()->routeIs('agent.jphomes.category') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.jphomes.create.property') }}"
                        class="{{ request()->routeIs('agent.jphomes.create.property') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Create Property</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.jphomes.properties') }}"
                    class="{{ request()->routeIs('agent.jphomes.properties') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>All Property List</span>
                </a>
            </li>
            <li>
                <a href="{{ route('agent.jphomes.create.property.video') }}"
                    class="{{ request()->routeIs('agent.jphomes.create.property.video') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Video Property</span>
                </a>
            </li>
            <li>
                <a href="{{ route('agent.jphomes.agent.requests') }}"
                    class="{{ request()->routeIs('agent.jphomes.agent.requests') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Agent Request</span>
                </a>
            </li>
            <li>
                <a href="{{ route('agent.jphomes.comments') }}"
                    class="{{ request()->routeIs('agent.jphomes.comments') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Comments</span>
                </a>
            </li>
            <li>
                <a href="{{ route('agent.jphomes.orders') }}"
                    class="{{ request()->routeIs('agent.jphomes.orders') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Orders</span>
                </a>
            </li>

            </ul>
        </li><!-- End property Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.content.*') ? '' : 'collapsed' }}"
                data-bs-target="#content-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Content</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="content-nav" class="nav-content collapse {{ request()->routeIs('agent.content.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.content.view.review') }}"
                        class="{{ request()->routeIs('agent.content.view.review') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Review Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.content.certificate') }}"
                        class="{{ request()->routeIs('agent.content.certificate') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Certificate</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.content.view.contact', 'samairagroup') }}"
                        class="{{ request()->routeIs('agent.content.view.contact', 'samairagroup') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Samaira Group</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.content.view.contact', 'ssdi') }}"
                        class="{{ request()->routeIs('agent.content.view.contact', 'ssdi') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>SSDI</span>
                    </a>
                </li>

            </ul>
        </li><!-- End contact Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.system.*') ? '' : 'collapsed' }}"
                data-bs-target="#system-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>System</span><i class="bi bi-chevron-down ms-auto"></i>
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
                <li>
                    <a href="{{ route('agent.system.role') }}"
                        class="{{ request()->routeIs('agent.system.role') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>System Role</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.system.member') }}"
                        class="{{ request()->routeIs('agent.system.member') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>System Member</span>
                    </a>
                </li>
            </ul>
        </li><!-- End System Nav -->









    </ul>

</aside><!-- End Sidebar-->
