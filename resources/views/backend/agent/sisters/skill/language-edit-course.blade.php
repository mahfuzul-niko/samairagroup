<x-app>
    @push('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    @endpush
    <x-slot name="title">Update Language Course</x-slot>
    <section class="createcourse">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create Course
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Whoops!</strong> There were some problems with your input:
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('agent.course.update', $course) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    
                        <div class="form-group mb-3">
                            <label for="title">Course Title</label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $course->title) }}" placeholder="Course title" required>
                        </div>
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group mb-3">
                                <label for="title">Course Code</label>
                                <input type="text" class="form-control" name="course_code" value="{{ old('title', $course->course_code) }}" placeholder="Course code" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="price">Course Price</label>
                                <input type="text" class="form-control" name="price"
                                    value="{{ old('price', $course->price) }}" placeholder="Course price in Taka"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subtitle</label>
                        <textarea class="form-control" name="subtitle" rows="2">{{ old('subtitle', $course->subtitle) }}</textarea>
                    </div>

                    <div class="row">
                        
                        <input type="hidden" name="course_for" value="language">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="course_type">Course Type</label>
                                <select class="form-select" name="course_type" id="course_type" required>
                                    <option disabled {{ is_null($course->course_type) ? 'selected' : '' }}>Select
                                        Course type</option>
                                    <option value="online" {{ $course->course_type == 'online' ? 'selected' : '' }}>
                                        Online</option>
                                    <option value="offline" {{ $course->course_type == 'offline' ? 'selected' : '' }}>
                                        Offline</option>
                                    <option value="both" {{ $course->course_type == 'both' ? 'selected' : '' }}>Both
                                    </option>
                                    <option value="workshop"
                                        {{ $course->course_type == 'workshop' ? 'selected' : '' }}>Workshop</option>
                                    <option value="event" {{ $course->course_type == 'event' ? 'selected' : '' }}>
                                        Event</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <img id="preview-image"
                                src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                                class="img-fluid mb-3" alt="" style="height: 200px">
                        </div>
                        <div class="col-md-7 align-self-center">
                            <div class="form-group mb-3">
                                <label for="image">Course Image</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Registration Start Date</label>
                            <input type="date" class="form-control" name="registration_date"
                                value="{{ old('registration_date', $course->registration_date->format('Y-m-d')) }}"required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Registration End Date</label>
                            <input type="date" class="form-control" name="deadline"
                                value="{{ old('deadline', $course->deadline->format('Y-m-d')) }}" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Course Start Date</label>
                            <input type="date" class="form-control" name="start_date"
                                value="{{ old('start_date', $course->start_date->format('Y-m-d')) }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Batch Number</label>
                            <input type="text" class="form-control" name="batch"
                                value="{{ old('batch', $course->batch) }}" placeholder="Batch number" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Course Duration</label>
                            <input type="text" class="form-control" name="duration"
                                value="{{ old('duration', $course->duration) }}" placeholder="Duration in days"
                                required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Total Lesson</label>
                            <input type="text" class="form-control" name="total_lessons"
                                value="{{ old('total_lessons', $course->total_lessons) }}" placeholder="Total Lesson"
                                required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Course Schedule</label>
                                <input class="form-control" type="text" name="class_schedule"
                                    value="{{ old('class_schedule', $course->class_schedule) }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Course File</label>
                                <input class="form-control" type="file" name="file">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Course Description</label>
                        <textarea id="summernote" name="description">{{ old('description', $course->description) }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Status</label>
                                <select class="form-select" name="status" required>
                                    <option value="active" {{ $course->status == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $course->status == 'inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Assign Trainer</label>
                                <select class="form-select" name="trainer_id" required>
                                    <option value="">Select Trainer</option>
                                    @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}"
                                            {{ $course->trainer_id == $trainer->id ? 'selected' : '' }}>
                                            {{ $trainer->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <label for="keywords" class="form-label">Keywords</label>
                        <textarea class="form-control" name="keywords" id="keywords" rows="2" placeholder="keyword1, keyword2">{{ old('keywords', implode(', ', json_decode($course->keywords ?? '[]'))) }}</textarea>

                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>

            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            document.getElementById("image").addEventListener("change", function(event) {
                const reader = new FileReader();
                reader.onload = function() {
                    document.getElementById("preview-image").src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 300 // Set editor height
                });
            });
        </script>
    @endpush
</x-app>
