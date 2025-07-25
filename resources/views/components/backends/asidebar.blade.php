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
        @if (auth()->user()->role->name != 'admin')
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('agent.dashboard') ? '' : 'collapsed' }}"
                    href="{{ route('agent.dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
        @endif

        <li class="nav-heading">Pages</li>


        @if (in_array(auth()->user()->role->name, ['system.manager', 'admin']))
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
                    <li>
                        <a href="{{ route('agent.group.agro') }}"
                            class="{{ request()->routeIs('agent.group.agro') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>JP Agro</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.group.aviation') }}"
                            class="{{ request()->routeIs('agent.group.aviation') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Aviation</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.group.emerging') }}"
                            class="{{ request()->routeIs('agent.group.emerging') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Emerging</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.group.raisa') }}"
                            class="{{ request()->routeIs('agent.group.raisa') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Raisa Trade</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Group Nav -->
        @endif
        @if (in_array(auth()->user()->role->name, ['ssdi.course', 'admin']))
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
        @endif
        @if (in_array(auth()->user()->role->name, ['language.course', 'admin']))
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
        @endif
        @if (in_array(auth()->user()->role->name, ['ssdi.course', 'language.course', 'admin']))
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('agent.editional.*') ? '' : 'collapsed' }}"
                    data-bs-target="#editional-course-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-mortarboard"></i><span>Editional</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="editional-course-nav"
                    class="nav-content collapse {{ request()->routeIs('agent.editional.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('agent.editional.trainer') }}"
                            class="{{ request()->routeIs('agent.editional.trainer') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Course Trainer</span>
                        </a>
                    </li>
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
        @endif



        @if (in_array(auth()->user()->role->name, ['property', 'admin']))
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
        @endif
        @if (in_array(auth()->user()->role->name, ['medica', 'admin']))
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('agent.medica.*') ? '' : 'collapsed' }}"
                    data-bs-target="#medica-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-hospital"></i><span>Madica</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="medica-nav"
                    class="nav-content collapse {{ request()->routeIs('agent.medica.*') ? 'show' : '' }}"
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
        @endif
        @if (in_array(auth()->user()->role->name, ['job', 'admin']))
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('agent.job.*') ? '' : 'collapsed' }}" data-bs-target="#job"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person-workspace"></i><span>Jobs</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="job" class="nav-content collapse {{ request()->routeIs('agent.job.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('agent.job.work') }}"
                            class="{{ request()->routeIs('agent.job.work') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Create Works</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.job.works') }}"
                            class="{{ request()->routeIs('agent.job.works') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Works List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.job.applies') }}"
                            class="{{ request()->routeIs('agent.job.applies') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Works applies</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.job.project') }}"
                            class="{{ request()->routeIs('agent.job.project') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Completed Projects</span>
                        </a>
                    </li>


                </ul>
            </li><!-- End job Nav -->
        @endif
        @if (in_array(auth()->user()->role->name, ['aviation', 'admin']))
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('agent.aviation.*') ? '' : 'collapsed' }}"
                    data-bs-target="#aviation" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-airplane-engines"></i><span>Aviation</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="aviation"
                    class="nav-content collapse {{ request()->routeIs('agent.aviation.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('agent.aviation.requests') }}"
                            class="{{ request()->routeIs('agent.aviation.requests') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Requests</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.aviation.destination') }}"
                            class="{{ request()->routeIs('agent.aviation.destination') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Destinations</span>
                        </a>
                    </li>


                </ul>
            </li><!-- End aviation Nav -->
        @endif
        @if (in_array(auth()->user()->role->name, ['emerging', 'admin']))
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('agent.emeriging.*') ? '' : 'collapsed' }}"
                    data-bs-target="#emeriging" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-shop"></i><span>Emerging</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="emeriging"
                    class="nav-content collapse {{ request()->routeIs('agent.emerging.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('agent.emerging.categories') }}"
                            class="{{ request()->routeIs('agent.emerging.categories') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.emerging.product.create') }}"
                            class="{{ request()->routeIs('agent.emerging.product.create') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Create Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.emerging.products') }}"
                            class="{{ request()->routeIs('agent.emerging.products') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.emerging.reviews') }}"
                            class="{{ request()->routeIs('agent.emerging.reviews') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Reviews</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('agent.emerging.orders') }}"
                            class="{{ request()->routeIs('agent.emerging.orders') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Orders</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Emerging Nav -->
        @endif
        @if (in_array(auth()->user()->role->name, ['contact', 'admin']))
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('agent.content.*') ? '' : 'collapsed' }}"
                    data-bs-target="#content-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person-lines-fill"></i></i><span>Contact</span><i
                        class="bi bi-chevron-down ms-auto"></i>
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
        @endif
        @if (in_array(auth()->user()->role->name, ['single.page', 'admin']))
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('agent.page.*') ? '' : 'collapsed' }}"
                    data-bs-target="#single-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-file-earmark"></i><span>Single Pages</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="single-nav"
                    class="nav-content collapse {{ request()->routeIs('agent.page.*') ? 'show' : '' }}"
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
                    <li>
                        <a href="{{ route('agent.page.privacies') }}"
                            class="{{ request()->routeIs('agent.page.privacies') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>privacies</span>
                        </a>
                    </li>


                </ul>
            </li><!-- End single page Nav -->
        @endif
        @if (in_array(auth()->user()->role->name, ['news.letter', 'admin']))
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('agent.news.*') ? '' : 'collapsed' }}"
                    data-bs-target="#news-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-envelope-paper"></i><span>News Letter</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="news-nav"
                    class="nav-content collapse {{ request()->routeIs('agent.news.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('agent.news.letter') }}"
                            class="{{ request()->routeIs('agent.news.letter') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>News Letter Emails</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End news letter Nav -->
        @endif
        @if (in_array(auth()->user()->role->name, ['system', 'admin']))
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('agent.system.*') ? '' : 'collapsed' }}"
                    data-bs-target="#system-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gear"></i><span>System</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="system-nav"
                    class="nav-content collapse {{ request()->routeIs('agent.system.*') ? 'show' : '' }}"
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
        @endif








    </ul>

</aside><!-- End Sidebar-->
