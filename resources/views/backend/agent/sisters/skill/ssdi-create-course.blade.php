<x-app>
    @push('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    @endpush
    <x-slot name="title">SSDi Create Course</x-slot>
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

                <form action="{{ route('agent.course.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Course Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Course title" required>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group mb-3">
                                <label for="title">Course Code</label>
                                <input type="text" class="form-control" name="course_code" placeholder="Course code" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="price">Course Price</label>
                                <input type="text" class="form-control" name="price"
                                    placeholder="Course price in Taka" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Subtitle</label>
                        <textarea class="form-control" name="subtitle" id="" rows="2"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group mb-3">
                                <label for="category">Category</label>
                                <select class="form-select" name="category_id" id="category" required>
                                    <option value="" selected>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="course_for" value="ssdi">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="level">Course type</label>
                                <select class="form-select" name="course_type" id="level" required>
                                    <option selected disabled>Select Course type</option>
                                    <option value="online">Online</option>
                                    <option value="offline">Offline</option>
                                    <option value="both">Both</option>
                                    <option value="workshop">Workshop</option>
                                    <option value="event">Event</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <img id="preview-image" src="{{ asset('assets/img/no-profile.png') }}"
                                class="img-fluid mb-3" alt="" style="height: 200px">
                        </div>
                        <div class="col-md-7 align-self-center">
                            <div class="form-group mb-3">
                                <label for="image">Course Image</label>
                                <input type="file" class="form-control" name="image" id="image" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="inputDate" class="">Registration Start Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="registration_date" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="inputDate" class="">Registration End Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="deadline" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="inputDate" class="">Course Start Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="start_date" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="inputDate" class="">Batch Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Batch number" name="batch"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="inputDate" class="">Course Duration</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Duration in days"
                                    name="duration" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="inputDate" class="">Total Lesson</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Total Lesson"
                                    name="total_lessons" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">Course Schedule</label>
                                <input class="form-control" type="text" name="class_schedule"></input>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">Course File</label>
                                <input class="form-control" type="file" name="file"></input>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Course Description</label>
                        <textarea id="summernote" name="description"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputDate" class="">Course Status</label>
                                <select class="form-select" name="status" id="status" required>
                                    <option value="active" selected>Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputDate" class="">Assign Trainer</label>
                                <select class="form-select" name="trainer_id" id="trainer" required>
                                    <option value="" selected>Select Trainer</option>
                                    @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="keywords" class="form-label">Keywords</label>
                        <textarea class="form-control" name="keywords" id="keywords" rows="2" placeholder="keyword1, keyword2"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>

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
