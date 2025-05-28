<x-app>
    @push('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    @endpush
    <x-slot name="title">View A Course</x-slot>
    <section class="view-ourse">
        <div class="card">
            <div class="card-body">
                <div class="text-end p-3">
                    <a href="{{route('agent.course.edit',$course)}}" class="btn btn-primary btn-sm">Edit Course</a>
                    <form action="{{ route('agent.course.delete', $course) }}"
                        method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this course?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
                <div class="text-center my-3">
                    <img src="{{ $course->image ? Storage::url($course->image) : asset('assets/img/no-profile.png') }}"
                        alt="" class="img-fluid rounded" style="height: 300px; width: auto;">
                </div>

                <table class="table table-striped">
                    <tr>
                        <th>Course Title</th>
                        <td>{{ $course->title }}</td>
                    </tr>
                    <tr>
                        <th>Course Code</th>
                        <td>{{ $course->course_code }}</td>
                    </tr>
                    <tr>
                        <th>Subtitle</th>
                        <td>{{ $course->subtitle ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Category ID</th>
                        <td>{{ $course->category->title }}</td>
                    </tr>
                    <tr>
                        <th>Trainer</th>
                        <td>{{ optional($course->trainer)->name ?? 'Unknown Trainer' }}</td>
                    </tr>
                    <tr>
                        <th>Course For</th>
                        <td>{{ strtoupper($course->course_for) }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $course->slug }}</td>
                    </tr>
                    <tr>
                        <th>Start Date</th>
                        <td>{{ $course->start_date->format('d M Y') }}</td>
                    </tr>
                    <tr>
                        <th>Registration Date</th>
                        <td>{{ $course->registration_date->format('d M Y') }}</td>
                    </tr>
                    <tr>
                        <th>Deadline</th>
                        <td>{{ $course->deadline->format('d M Y') }}</td>
                    </tr>
                    <tr>
                        <th>Duration</th>
                        <td>{{ $course->duration ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Batch</th>
                        <td>{{ $course->batch ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{ $course->price ?? 'Free' }}</td>
                    </tr>
                    <tr>
                        <th>Total Lessons</th>
                        <td>{{ $course->total_lessons ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>File</th>
                        <td>
                            @if (!empty($course->file))
                                <a href="{{ asset('storage/' . $course->file) }}" target="_blank">View File</a>
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                    
                    <tr>
                        <th>Status</th>
                        <td class="text-{{ $course->status == 'active' ? 'success' : 'danger' }}">
                            {{ ucfirst($course->status) }}</td>
                    </tr>
                    <tr>
                        <th>Class Schedule</th>
                        <td>{{ $course->class_schedule ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Keywords</th>
                        <td>{{ $course->keywords ? implode(', ', json_decode($course->keywords)) : 'N/A' }}</td>
                    </tr>

                </table>

                <div class="mt-4">
                    <h5>Description</h5>
                    <div class="border rounded p-3">
                        {!! $course->description !!}
                    </div>
                </div>
                <h4 class=" mt-3">
                    Moduls
                </h4>
                <div class="mt-3">
                    @foreach ($course->modules as $module)
                    <div class="border p-3 rounded mt-3">
                        <div class="d-flex justify-content-between">
                          <h5 class="fw-bold">
                            {{$module->title}}
                          </h5>
                          <form action="{{ route('agent.course.delete.module', $module) }}"
                            method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </form>
                        </div>
                          
                          <div class="">
                            {!! $module->description !!}
                          </div>
                      </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <section class="module-setion">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Add module
                </div>
                <form action="{{route('agent.course.store.module')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <div class="form-gorup">
                        <label for="">Module Titile</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="">Module Details</label>
                        <textarea id="summernote" name="description"></textarea>
                    </div>
                    <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 200 // Set editor height
                });
            });
        </script>
    @endpush
</x-app>
