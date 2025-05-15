<x-app>
    <x-slot name="title">Wecome To Samaira Language</x-slot>
    <section class="logo-section">
        <div class="card">
            <div class="card-body ">
                <div class="card-title">Logo</div>

                <div class="text-center my-3">
                    <div class=" d-inline-block" style="height: 100px; width: auto;">
                        <img src="{{ system_key('samaira_language_logo') ? Storage::url(system_key('samaira_language_logo')) : asset('assets/img/no-profile.png') }}"
                            alt="Group Logo" class="img-fluid rounded " style="height: 100px; object-fit: cover;">

                        <form action="{{ route('agent.system.destroy.image', 'samaira_language_logo') }}" method="POST"
                            class="mt-2">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                        </form>
                    </div>
                </div>
                <form action="{{ route('agent.system.storeImage') }}" class="mt-2" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" placeholder="Enter key" class="form-control"
                        value="samaira_language_logo" required>
                    <div class="form-group my-3">
                        <label for="value">Logo</label>
                        <input type="file" name="value" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                </form>
            </div>

        </div>
    </section>

    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Success Stories
                </div>
                <form action="{{ route('agent.group.store.story') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Student Of</label>
                        <input type="text" name="student_of" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Youtube Url</label>
                        <input type="url" name="url" id="" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
                <div class="card-title">
                    View Stories
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Student of</th>
                        <th>View Url</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($stories as $key => $story)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                <img src="{{ $story->image ? Storage::url($story->image) : asset('assets/img/no-profile.png') }}"
                                    alt="" class="img-fluid" style="height: 100px ; width: auto;">
                            </td>
                            <td>{{ $story->title }}</td>
                            <td>{{ $story->student_of }}</td>
                            <td><a href="{{ $story->url }}" target="_blank">view video</a></td>

                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#story{{ $story->id }}"><i
                                            class="bi bi-pencil-square"></i></a>

                                    <form action="{{ route('agent.group.delete.story', $story) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="story{{ $story->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <form action="{{ route('agent.group.update.story', $story) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="">Title</label>
                                                        <input type="text" name="title" class="form-control" value="{{$story->title}}"
                                                            required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Student Of</label>
                                                        <input type="text" name="student_of" class="form-control" value="{{$story->student_of}}"
                                                            required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Image</label>
                                                        <input type="file" name="image" id=""
                                                            class="form-control" >
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Youtube Url</label>
                                                        <input type="url" name="url" id="" value="{{$story->url}}"
                                                            class="form-control" required>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-primary btn-sm">Save</button>
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
