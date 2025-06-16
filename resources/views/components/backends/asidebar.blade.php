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
                <li>
                    <a href="{{ route('agent.group.gold') }}"
                        class="{{ request()->routeIs('agent.group.gold') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Princess Gold</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.group.job') }}"
                        class="{{ request()->routeIs('agent.group.job') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Jobs Bridge</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Group Nav -->

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.ssdi.*') ? '' : 'collapsed' }}"
                data-bs-target="#ssdi-course-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-mortarboard"></i><span>SSDI Course</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="ssdi-course-nav"
                class="nav-content collapse {{ request()->routeIs('agent.ssdi.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.ssdi.category') }}"
                        class="{{ request()->routeIs('agent.ssdi.category') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Course Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.ssdi.trainer') }}"
                        class="{{ request()->routeIs('agent.ssdi.trainer') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Course Trainer</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.ssdi.create') }}"
                        class="{{ request()->routeIs('agent.ssdi.create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Create Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.ssdi.courses') }}"
                        class="{{ request()->routeIs('agent.ssdi.courses') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Course List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.ssdi.feature') }}"
                        class="{{ request()->routeIs('agent.ssdi.feature') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Feature Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.ssdi.enroll') }}"
                        class="{{ request()->routeIs('agent.ssdi.enroll') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Enroll List</span>
                    </a>
                </li>


            </ul>
        </li><!-- End course Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.language.*') ? '' : 'collapsed' }}"
                data-bs-target="#language-course-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-mortarboard"></i><span>Language Course</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="language-course-nav"
                class="nav-content collapse {{ request()->routeIs('agent.language.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.language.create') }}"
                        class="{{ request()->routeIs('agent.language.create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Create Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.language.courses') }}"
                        class="{{ request()->routeIs('agent.language.courses') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>List Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.language.feature') }}"
                        class="{{ request()->routeIs('agent.language.feature') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Feature Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.language.enroll') }}"
                        class="{{ request()->routeIs('agent.language.enroll') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Enroll List</span>
                    </a>
                </li>
               

            </ul>
        </li><!-- End course Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.editional.*') ? '' : 'collapsed' }}"
                data-bs-target="#editional-course-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-mortarboard"></i><span>Editional</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="editional-course-nav"
                class="nav-content collapse {{ request()->routeIs('agent.editional.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.editional.view.review') }}"
                        class="{{ request()->routeIs('agent.editional.view.review') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Review Course</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.editional.certificate') }}"
                        class="{{ request()->routeIs('agent.editional.certificate') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Certificate</span>
                    </a>
                </li>

            </ul>
        </li><!-- End course Nav -->



        
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.jphomes.*') ? '' : 'collapsed' }}"
                data-bs-target="#property-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-map"></i></i><span>Property</span><i class="bi bi-chevron-down ms-auto"></i>
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
            <a class="nav-link {{ request()->routeIs('agent.medica.*') ? '' : 'collapsed' }}"
                data-bs-target="#medica-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-hospital"></i><span>Madica</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="medica-nav" class="nav-content collapse {{ request()->routeIs('agent.medica.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.medica.categories') }}"
                        class="{{ request()->routeIs('agent.medica.categories') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.medica.product.create') }}"
                        class="{{ request()->routeIs('agent.medica.product.create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Create Product</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.medica.products') }}"
                        class="{{ request()->routeIs('agent.medica.products') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Products</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.medica.orders') }}"
                        class="{{ request()->routeIs('agent.medica.orders') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Orders</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('agent.medica.reviews') }}"
                        class="{{ request()->routeIs('agent.medica.reviews') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Reviews</span>
                    </a>
                </li>

            </ul>
        </li><!-- End medica Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.content.*') ? '' : 'collapsed' }}"
                data-bs-target="#content-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-lines-fill"></i></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="content-nav"
                class="nav-content collapse {{ request()->routeIs('agent.content.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">

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
            <a class="nav-link {{ request()->routeIs('agent.page.*') ? '' : 'collapsed' }}"
                data-bs-target="#single-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark"></i><span>Single Pages</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="single-nav" class="nav-content collapse {{ request()->routeIs('agent.page.*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('agent.page.awards') }}"
                        class="{{ request()->routeIs('agent.page.awards') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Awards</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.page.chairman') }}"
                        class="{{ request()->routeIs('agent.page.chairman') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Chairman</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent.page.news') }}"
                        class="{{ request()->routeIs('agent.page.news') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>News</span>
                    </a>
                </li>


            </ul>
        </li><!-- End contact Nav -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('agent.system.*') ? '' : 'collapsed' }}"
                data-bs-target="#system-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>System</span><i class="bi bi-chevron-down ms-auto"></i>
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
