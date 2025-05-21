<x-student>
    <div class="row g-3 mb-3">
        <div class="col-md-4">
            <div class="dashboard-card dashboard-card-blue">
                <div class="dashboard-card-icon"><i class="fa fa-graduation-cap"></i></div>
                <div>
                    <div class="dashboard-card-label">Course Completed</div>
                    <div class="dashboard-card-value">0</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card dashboard-card-blue">
                <div class="dashboard-card-icon"><i class="fa fa-undo"></i></div>
                <div>
                    <div class="dashboard-card-label">Course in Progress</div>
                    <div class="dashboard-card-value">0</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card dashboard-card-blue">
                <div class="dashboard-card-icon"><i class="fa fa-undo"></i></div>
                <div>
                    <div class="dashboard-card-label">Total Due:</div>
                    <div class="dashboard-card-value text-success">BDT 0.00</div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-section mb-4">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h5 class="dashboard-section-title mb-0">Enrolled Courses</h5>
        </div>
        @if ($courses && count($courses) > 0)
            <div class="row g-3">
                @foreach ($courses as $course)
                    <div class="col-md-4">
                        <div class="suggested-course-card">
                            <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                                alt="Course" class="suggested-course-img mb-2">
                            <div class="suggested-course-title">{{ $course->title }}({{ $course->batch }})
                            </div>

                            <div class="suggested-course-bottom d-flex align-items-center justify-content-between">
                                <span class="suggested-course-price text-primary">TK.
                                    {{ $course->price }}</span>
                                <div class="">
                                    <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#course{{ $course->id }}">Review</a>
                                    <a href="{{ route('page.ssdi.course', $course) }}"
                                        class="btn btn-primary btn-sm">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="course{{ $course->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Write A Review
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('student.store.review') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                                        <div class="mb-3">
                                            <label for="">Review text</label>
                                            <textarea id="" rows="5" name="review" class="form-control" required></textarea>
                                        </div>
                                        <button class="btn btn-sm btn-primary">save</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        @else
            <div class="dashboard-enrolled-courses">
                <p class="text-danger mb-0">No enrollment(s) found</p>
            </div>
        @endif




    </div>
    <div class="dashboard-section mb-4">
        <h5 class="dashboard-section-title mb-3">Suggested Courses</h5>
        <div class="row g-3">
            @foreach ($scourses as $course)
                <div class="col-md-4">
                    <div class="suggested-course-card">
                        <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                            alt="Course" class="suggested-course-img mb-2">
                        <div class="suggested-course-title">{{ $course->title }}({{ $course->batch }})
                        </div>
                        <div class="suggested-course-meta mb-1"><i class="fa fa-calendar-alt"></i>
                            Starts:
                            {{ $course->start_date ? \Carbon\Carbon::parse($course->start_date)->format('d M Y') : 'N/A' }}
                        </div>
                        <div class="suggested-course-meta mb-1"><i class="fa fa-clock"></i> Lessons:
                            {{ $course->total_lessons }}
                        </div>
                        <div class="suggested-course-bottom d-flex align-items-center justify-content-between">
                            <span class="suggested-course-price text-primary">TK.
                                {{ $course->price }}</span>
                            <a href="{{ route('page.ssdi.course.enroll', $course) }}"
                                class="btn btn-primary btn-sm">Enroll Now</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-student>
