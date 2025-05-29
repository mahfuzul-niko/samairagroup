<x-app>
    <x-slot name="title">Featured Course</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create featured post
                </div>
                <form action="{{ route('agent.course.store.feature') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="">Post title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="nice" name="course_id" required>
                            <option selected>Open this select menu</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_code }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Featured post Table
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Course Code</th>
                        <th>For</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($features as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img class="img-fluid"
                                    src="{{ $item->image ? Storage::url($item->image) : asset('assets/img/no-profile.png') }}"
                                    alt="" style="height: 100px; width: auto;"></td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->course->course_code }}</td>
                            <td>{{ $item->for }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#item{{ $item->id }}"><i
                                            class="bi bi-pencil-square"></i></a>

                                    <form action="{{ route('agent.course.delete.feature', $item) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                            <div class="modal fade" id="item{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Feature
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('agent.course.update.feature', $item) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="">Post title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        value="{{ $item->title }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Image</label>
                                                    <input type="file" name="image" class="form-control" >
                                                </div>
                                                <div class="mb-3">
                                                    <select class="form-select" name="course_id" required
                                                        aria-label="nice">
                                                        <option disabled {{ $item->course_id ? '' : 'selected' }}>Select Course</option>
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}"
                                                                {{ $item->course_id == $course->id ? 'selected' : '' }}>
                                                                {{ $course->course_code }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>

</x-app>
