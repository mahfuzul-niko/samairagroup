<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samaira Skills Course Single Page</title>
    <link rel="icon" href="{{ asset('assets/frontassets/') }}/images/samaira-skills/fav-icon.svg" type="image/svg">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontassets/') }}/fonts/css/all.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill.css" rel="stylesheet">
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-skill-single.css" rel="stylesheet">
    <link href="{{ asset('assets/frontassets/') }}/css/samaira-main.css" rel="stylesheet">

</head>

<body>

    <!-- Top Header Section Start -->
    <x-layouts.header />
    <!-- Top Header Section End -->

    <!-- Navbar Start -->
    <nav class="navbar custom-navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ system_key('samaira_skills_logo') ? Storage::url(system_key('samaira_skills_logo')) : asset('assets/img/no-profile.png') }}"
                    alt="logo">
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            My Courses
                        </a>
                        <ul class="dropdown-menu" data-bs-popper="static">
                            <li><a class="dropdown-item" href="#">All Courses</a></li>
                            <li><a class="dropdown-item" href="#">In Progress</a></li>
                            <li><a class="dropdown-item" href="#">Completed</a></li>
                            <li><a class="dropdown-item" href="#">Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>
                <div class="nav-auth">
                    <div class="nav-item signup-btn">
                        <a class="nav-link" href="#">Login</a>
                    </div>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Navbar Start -->
    <div class="offcanvas offcanvas-start" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        My Courses
                    </a>
                    <ul class="dropdown-menu" data-bs-popper="static">
                        <li><a class="dropdown-item" href="#">All Courses</a></li>
                        <li><a class="dropdown-item" href="#">In Progress</a></li>
                        <li><a class="dropdown-item" href="#">Completed</a></li>
                        <li><a class="dropdown-item" href="#">Wishlist</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Support
                    </a>
                    <ul class="dropdown-menu" data-bs-popper="static">
                        <li><a class="dropdown-item" href="#">Help Center</a></li>
                        <li><a class="dropdown-item" href="#">Contact Us</a></li>
                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
            <!-- Footer Image in Offcanvas -->
            <!-- <div class="offcanvas-footer mt-auto text-center">
        <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/menu-bottom.png" alt="Menu Footer Image" class="img-fluid" style="max-width: 150px;">
      </div> -->
        </div>
    </div>
    <!-- Mobile Navbar End -->

    <!-- Navbar End -->


    <!-- Course Highlight Section Start -->
    <section class="course-highlight-section"
        style="background: url('{{ system_key('samaira_skills_single_image') ? Storage::url(system_key('samaira_skills_single_image')) : asset('assets/img/no-profile.png') }}') center center/cover no-repeat, #09090a;">
        <div class="course-highlight-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-12 text-center text-lg-start">
                        <h1 class="course-title">{{ $course->title }} <span
                                class="highlighted">{{ $course->batch }}</span></h1>
                        <p class="course-subtitle">{{ $course->subtitle }}</p>
                        <div class="course-meta-grid">
                            <div class="course-meta-item"><i class="fas fa-calendar-alt"></i> <span>Start:
                                    <strong>{{ $course->start_date->format('d M Y') }}</strong></span></div>
                            <div class="course-meta-item"><i class="fas fa-clock"></i> <span>Duration:
                                    <strong>{{ $course->duration }}</strong></span></div>
                            <div class="course-meta-item"><i class="fas fa-layer-group"></i> <span>Lessons:
                                    <strong>{{ $course->total_lessons }}</strong></span></div>
                            <div class="course-meta-item"><i class="fas fa-user-friends"></i> <span>Batch:
                                    <strong>{{ $course->batch }}</strong></span></div>
                            <div class="course-meta-item"><i class="fas fa-calendar-check"></i> <span>Registration
                                    Deadline: <strong>{{ $course->deadline->format('d M Y') }}</strong></span></div>
                        </div>
                        <div class="course-schedule mt-3">
                            <span class="schedule-label"><i class="fas fa-chalkboard-teacher"></i> Class
                                Schedule:</span>
                            <span class="schedule-time">{{ $course->class_schedule }}</span>
                        </div>
                        <a href="{{route('page.ssdi.course.enroll',$course)}}" class="btn btn-enroll mt-4">Enroll Now</a>
                        @if ($course->file)
                            <a href="{{ asset('storage/' . $course->file) }}" target="_blank"
                                class="btn btn-enroll mt-4">Course Details</a>
                        @endif

                        {{-- <a href="#" class="btn btn-enroll mt-4">Free Seminar</a> --}}
                    </div>
                    <div class="col-lg-3 d-lg-block">
                        <div class="course-image-wrap margin-top-30px">
                            <div class="course-fee-pro-card mb-4 course-image">
                                <div class="fee-label-pro">Course Fee Offline</div>
                                <div class="fee-amount-pro">TK. {{ $course->price }}</div>
                            </div>
                        </div>
                        <!-- <div class="course-image-wrap">
              <div class="course-fee-pro-card mb-4 course-image">
                <div class="fee-label-pro">Course Fee Online</div>
                <div class="fee-amount-pro">TK. 5000</div>
              </div>
            </div> -->
                    </div>
                </div>
            </div>
            <div class="course-highlight-overlay"></div>
        </div>
    </section>
    <!-- Course Highlight Section End -->

    <!-- Course Details Sticky Section Start -->
    <section class="course-details-sticky-section pb-5">
        <div class="container">
            <div class="row align-items-stretch">
                <!-- Left: Modern Content Card -->
                <div class="col-lg-7 p-0 d-none d-lg-block">
                    <div class="course-details-content-card">
                        <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                            alt="Course Visual" class="course-main-img mb-5">
                        <div class="course-badges mb-2">
                            @if ($course->keywords)
                                @foreach (json_decode($course->keywords) as $index => $keyword)
                                    @php
                                        $badgeClasses = [
                                            'badge-primary',
                                            'badge-success',
                                            'badge-info',
                                            'badge-warning',
                                            'badge-danger',
                                        ];
                                        $class = $badgeClasses[$index % count($badgeClasses)];
                                    @endphp
                                    <span class="badge {{ $class }}">{{ $keyword }}</span>
                                @endforeach
                            @else
                                <span class="badge badge-secondary">No Keywords</span>
                            @endif
                        </div>

                        <h2 class="course-details-title mt-3">{{$course->title}}</h2>
                        <div class="course-details-subtitle mb-2">{{$course->subtitle}}</div>
                        <div class="course-intro mb-2">
                            <strong>INTRODUCTION</strong><br>
                            Early Bird Registration on {{$course->registration_date->format('d M Y')}}
                        </div>
                        <div class="">
                          {!!$course->description!!}
                        </div>
                        @if ($course->modules)
                        <div class="course-training-modules mt-5">
                            <h4 class="mb-3">Training Modules :</h4>
                            <div class="accordion" id="trainingModulesAccordion">
                              @foreach ($course->modules as $module)
                                  
                              <!-- Module 1 -->
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="module1Heading">
                                      <button class="accordion-button collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#module1" aria-expanded="false"
                                          aria-controls="module1">
                                         {{$module->title}}
                                      </button>
                                  </h2>
                                  <div id="module1" class="accordion-collapse collapse"
                                      aria-labelledby="module1Heading" data-bs-parent="#trainingModulesAccordion">
                                      <div class="accordion-body">
                                         {!!$module->description!!}
                                      </div>
                                  </div>
                              </div>
                              @endforeach
                               
                                <!-- Add more modules as needed -->
                            </div>
                        </div>
                        @endif
                        <a href="{{route('page.ssdi.course.enroll',$course)}}" class="btn btn-enroll mt-4">Admission Now</a>
                    </div>
                </div>
                <!-- Right: Sticky Info Card -->
                <div class="col-lg-5 d-flex align-items-start justify-content-center">
                    <div class="course-details-sticky-card pro-card">
                        <div class="speaker-badge">trainer</div>
                        <div class="speaker-img-wrap">
                            <img src="{{ asset('assets/frontassets/') }}/images/samaira-skills/samaira-single-course/Syed_Tanvir_Ahmed_bitBirds.jpg"
                                class="speaker-img-pro" alt="Speaker">
                        </div>
                        <div class="speaker-name-pro">{{$course->user->name}}</div>
                        <div class="speaker-contact-pro mb-3">
                          {{-- <a href="#" target="_blank" class="icon-btn" title="Send Email">
                            <i class="fas fa-envelope"></i>
                        </a> --}}
                        
                        </a>
                        
                         
                        </div>
                        <div class="contact-info-pro-card">
                            <div class="contact-title-pro">Contact info</div>
                            <div class="contact-item-pro"><span class="icon-circle"><i
                                        class="fas fa-phone"></i></span>{{ system_key('system_skill_number_top') }}</div>
                            <div class="contact-item-pro"><span class="icon-circle"><i
                                        class="fas fa-phone"></i></span>{{ system_key('system_skill_number_bottom') }}</div>
                            <div class="contact-item-pro"><span class="icon-circle"><i
                                        class="fas fa-envelope"></i></span> <a
                                    href="mailto:{{ system_key('system_skill_email') }}">{{ system_key('system_skill_email') }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course Details Sticky Section End -->
    <!-- Footer Section Start -->
    <x-layouts.footer />
    <!-- Footer Section End -->

    <!-- jQuery -->
    <script src="{{ asset('assets/frontassets/') }}/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/bootstrap.bundle.min.js"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/frontassets/') }}/js/popper.min.js"></script>
</body>

</html>
