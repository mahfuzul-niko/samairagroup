<x-app>
    <x-slot name="title">Reviews</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Add Review
                </div>
                <form action="{{ route('agent.content.store.review') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="course_id" required>
                            <option disabled selected>Select Course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_code }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Review text</label>
                        <textarea id="" rows="5" name="review" class="form-control" required></textarea>
                    </div>
                    <button class="btn btn-sm btn-primary">save</button>
                </form>
                <div class="card-title">
                    All Review
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>image</th>
                        <th>name</th>
                        <th>course code</th>
                        <th>review</th>
                        <th>Approve</th>
                        <th>action</th>
                    </tr>
                    @foreach ($reviews as $review)
                        <tr>
                            <td><img src="{{ $review->image ? Storage::url($review->image) : asset('assets/img/no-profile.png') }}"
                                    class="img-fluid" style="height: 100px; width: auto;" alt=""></td>
                            <td>{{ $review->name }}</td>
                            <td>{{ $review->course->course_code }}</td>
                            <td>{{ $review->review }}</td>
                            <td>
                                <form action="{{ route('agent.content.review.mark', $review) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="review{{ $review->id }}" name="mark" value="1"
                                            {{ $review->mark == 1 ? 'checked' : '' }} onchange="this.form.submit()">
                                        <label class="form-check-label" for="review{{ $review->id }}">Approve</label>
                                    </div>
                                </form>

                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modal{{ $review->id }}"><i
                                            class="bi bi-pencil-square"></i></a>

                                    <form action="{{ route('agent.content.delete.review', $review) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modal{{ $review->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Review</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('agent.content.update.review', $review) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $review->name }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="">Image</label>
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                    <div class="mb-3">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="course_id" required>
                                                            <option disabled selected>Select Course</option>
                                                            @foreach ($courses as $course)
                                                                <option value="{{ $course->id }}"
                                                                    {{ $course->id == $review->course_id ? 'selected' : '' }}>
                                                                    {{ $course->course_code }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Review text</label>
                                                        <textarea id="" rows="5" name="review" class="form-control" required>{{ $review->review }}</textarea>
                                                    </div>
                                                    <button class="btn btn-sm btn-primary">save</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
</x-app>
