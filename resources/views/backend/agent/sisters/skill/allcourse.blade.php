<x-app>
    <x-slot name="title">All Courses</x-slot>
    <section class="both-course">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Both Courses
                </div>
                <div class="row">
                    @foreach ($bothCourses as $course)
                        {{-- @dd($course) --}}
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body d-flex flex-column">
                                    <!-- Image -->
                                    <div class="text-center mb-3">
                                        <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                                            class="img-fluid rounded" style="max-height: 200px; object-fit: cover;"
                                            alt="Course Image">
                                    </div>

                                    <!-- Title & Subtitle -->
                                    <h5 class=" mb-1">{{ $course->title }}</h5>
                                    <p class="text-muted mb-2" style="font-size: 0.9rem;">{{ $course->subtitle }}</p>

                                    <!-- Category & Price -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-secondary">{{ $course->category->title }}</span>
                                        <span class="text-success font-weight-bold">{{ $course->price }} BDT</span>
                                    </div>

                                    <!-- Trainer -->
                                    <p class="mb-1"><strong>Trainer:</strong> {{ $course->user->name ?? 'N/A' }}</p>

                                    <!-- Start Date, Deadline -->
                                    <p class="mb-1"><strong>Start Date:</strong>
                                        {{ $course->start_date ? \Carbon\Carbon::parse($course->start_date)->format('d M Y') : 'N/A' }}
                                    </p>
                                    <p class="mb-1"><strong>Deadline:</strong>
                                        {{ $course->deadline ? $course->deadline->format('d M Y') : 'N/A' }}</p>

                                    <!-- Lessons, Batch -->
                                    <p class="mb-1"><strong>Lessons:</strong> {{ $course->total_lessons }}</p>
                                    <p class="mb-1"><strong>Batch:</strong> {{ $course->batch }}</p>

                                    <!-- View Button -->
                                    <a href="" class="mt-auto btn btn-outline-primary btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    SSDI Courses
                </div>
                <div class="row">
                    @foreach ($ssdiCourses as $course)
                        {{-- @dd($course) --}}
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body d-flex flex-column">
                                    <!-- Image -->
                                    <div class="text-center mb-3">
                                        <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                                            class="img-fluid rounded" style="max-height: 200px; object-fit: cover;"
                                            alt="Course Image">
                                    </div>

                                    <!-- Title & Subtitle -->
                                    <h5 class=" mb-1">{{ $course->title }}</h5>
                                    <p class="text-muted mb-2" style="font-size: 0.9rem;">{{ $course->subtitle }}</p>

                                    <!-- Category & Price -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-secondary">{{ $course->category->title }}</span>
                                        <span class="text-success font-weight-bold">{{ $course->price }} BDT</span>
                                    </div>

                                    <!-- Trainer -->
                                    <p class="mb-1"><strong>Trainer:</strong> {{ $course->user->name ?? 'N/A' }}</p>

                                    <!-- Start Date, Deadline -->
                                    <p class="mb-1"><strong>Start Date:</strong>
                                        {{ $course->start_date ? \Carbon\Carbon::parse($course->start_date)->format('d M Y') : 'N/A' }}
                                    </p>
                                    <p class="mb-1"><strong>Deadline:</strong>
                                        {{ $course->deadline ? $course->deadline->format('d M Y') : 'N/A' }}</p>

                                    <!-- Lessons, Batch -->
                                    <p class="mb-1"><strong>Lessons:</strong> {{ $course->total_lessons }}</p>
                                    <p class="mb-1"><strong>Batch:</strong> {{ $course->batch }}</p>

                                    <!-- View Button -->
                                    <a href="" class="mt-auto btn btn-outline-primary btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Language Courses
                </div>
                <div class="row">
                    @foreach ($lagCourses as $course)
                        {{-- @dd($course) --}}
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body d-flex flex-column">
                                    <!-- Image -->
                                    <div class="text-center mb-3">
                                        <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                                            class="img-fluid rounded" style="max-height: 200px; object-fit: cover;"
                                            alt="Course Image">
                                    </div>

                                    <!-- Title & Subtitle -->
                                    <h5 class=" mb-1">{{ $course->title }}</h5>
                                    <p class="text-muted mb-2" style="font-size: 0.9rem;">{{ $course->subtitle }}</p>

                                    <!-- Category & Price -->
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="badge bg-secondary">{{ $course->category->title }}</span>
                                        <span class="text-success font-weight-bold">{{ $course->price }} BDT</span>
                                    </div>

                                    <!-- Trainer -->
                                    <p class="mb-1"><strong>Trainer:</strong> {{ $course->user->name ?? 'N/A' }}</p>

                                    <!-- Start Date, Deadline -->
                                    <p class="mb-1"><strong>Start Date:</strong>
                                        {{ $course->start_date ? \Carbon\Carbon::parse($course->start_date)->format('d M Y') : 'N/A' }}
                                    </p>
                                    <p class="mb-1"><strong>Deadline:</strong>
                                        {{ $course->deadline ? $course->deadline->format('d M Y') : 'N/A' }}</p>

                                    <!-- Lessons, Batch -->
                                    <p class="mb-1"><strong>Lessons:</strong> {{ $course->total_lessons }}</p>
                                    <p class="mb-1"><strong>Batch:</strong> {{ $course->batch }}</p>

                                    <!-- View Button -->
                                    <a href="" class="mt-auto btn btn-outline-primary btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

    </section>
</x-app>
