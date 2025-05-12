<x-app>
    @push('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    @endpush
    <x-slot name="title">Wecome To Samaira Group</x-slot>

    <section class="logo-section">
        <div class="card">

            <div class="card-body ">
                <h5 class="card-title">Logo</h5>

                <div class="text-center my-3">
                    <div class=" d-inline-block" style="height: 150px; width: auto;">
                        <img src="{{ system_key('samaira_group_logo') ? Storage::url(system_key('samaira_group_logo')) : asset('assets/img/no-profile.png') }}"
                            alt="Group Logo" class="img-fluid rounded " style="height: 200px; object-fit: cover;">

                        <form action="{{ route('agent.system.destroy.image', 'samaira_group_logo') }}" method="POST"
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
                        value="samaira_group_logo" required>
                    <div class="form-group my-3">
                        <label for="value">Logo</label>
                        <input type="file" name="value" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                </form>
            </div>

        </div>
    </section>
    <section>
        <div class="card">

            <div class="card-body ">
                <h5 class="card-title">Banner</h5>
                <form action="{{ route('agent.group.store.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="">Banner title</label>
                        <textarea class="form-control" id="" name="title"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Banner Description</label>
                        <textarea class="form-control" id="" name="description"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Banner Image</label>
                        <input type="file" class="form-control" id="" name="image">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Banner Button Link</label>
                        <input type="url" class="form-control" id="" name="link">
                    </div>
                    <button class="btn btn-sm btn-primary mt-3" type="submit">Submit</button>
                </form>
            </div>
            <div class="card-body">
                <div class="card-title">
                    Banner Info
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Immage</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)
                                <tr>
                                    <td>
                                        <img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                            alt="" style="height: 50px; width: auto;">
                                    </td>
                                    <td>{{ $banner->title }}</td>
                                    <td>{{ $banner->description }}</td>
                                    <td><a href="{{ $banner->link }}">{{ $banner->link }}</a></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a data-bs-toggle="modal" data-bs-target="#banner{{ $banner->id }}"
                                                class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></a>

                                            <form action="{{ route('agent.group.delete.banner', $banner->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="banner{{ $banner->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Banner
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('agent.group.update.banner', $banner) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group mt-2">
                                                                <label for="">Banner title</label>
                                                                <textarea class="form-control" name="title">{{ $banner->title }}</textarea>
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="">Banner Description</label>
                                                                <textarea class="form-control" name="description">{{ $banner->description }}</textarea>
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="">Banner Image</label>
                                                                <input type="file" class="form-control"
                                                                    name="image">
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="">Banner Button Link</label>
                                                                <input type="url" class="form-control"
                                                                    name="link" value="{{ $banner->link }}">
                                                            </div>
                                                            <button class="btn btn-sm btn-primary mt-3"
                                                                type="submit">Submit</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="sister-concern">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Sister Concern
                </div>
                <form action="{{ route('agent.group.store.concern') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="">Concern Image</label>
                        <input type="file" class="form-control" id="" name="concern_image">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Concern Decsription</label>
                        <textarea name="concern_text" id="" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Concern Button Link</label>
                        <input type="url" class="form-control" id="" name="concern_link">
                    </div>
                    <button class="btn btn-sm btn-primary mt-3" type="submit">Submit</button>
                </form>
            </div>
            <div class="card-body">
                <div class="card-title">
                    Sister Concern List
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($concerns as $concern)
                                <tr>
                                    <td>
                                        <img src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}"
                                            alt="" style="height: 100px; width: 100px;">
                                    </td>
                                    <td>{{ $concern->concern_text }}</td>
                                    <td><a href="{{ $concern->concern_link }}">{{ $concern->concern_link }}</a></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#concern{{ $concern->id }}"><i class="bi bi-pencil-square"></i></a>

                                            <form action="{{ route('agent.group.delete.concern', $concern->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="concern{{ $concern->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal
                                                            title</h1>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form
                                                            action="{{ route('agent.group.update.concern', $concern) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group mt-2">
                                                                <label for="">Concern Title</label>
                                                                <textarea name="concern_text" id="" rows="4" class="form-control">{{ $concern->concern_text }}</textarea>
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="">Concern Image</label>
                                                                <input type="file" class="form-control"
                                                                    name="concern_image">
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="">Concern Button Link</label>
                                                                <input type="url" class="form-control"
                                                                    name="concern_link"
                                                                    value="{{ $concern->concern_link }}">
                                                            </div>
                                                            <button class="btn btn-sm btn-primary mt-3"
                                                                type="submit">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

   
    {{-- <section class="social">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Social Section
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select social option</option>
                                <option value="samaira_group_facebook">Facebook</option>
                                <option value="samaira_group_instagram">Instagram</option>
                                <option value="samaira_group_twitter">Twitter</option>
                                <option value="samaira_group_linkedin">Linkedin</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="url" class="form-control" id="inputEmail4" placeholder="Enter social url"
                                name="value" required value="https://">
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary mt-3">Submit</button>
                </form>
                <div class="card-title">
                    Soccial List
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Facebook:</th>
                            <td>{{ system_key('samaira_group_facebook') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Instagram:</th>
                            <td>{{ system_key('samaira_group_instagram') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Twitter:</th>
                            <td>{{ system_key('samaira_group_twitter') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">linkedin:</th>
                            <td>{{ system_key('samaira_group_linkedin') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    --}}

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 300 // Set editor height
                });
            });
        </script>
    @endpush
</x-app>
