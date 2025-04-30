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
                    <button type="submit" class="btn btn-primary">Upload</button>
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
                    <button class="btn btn-primary mt-3" type="submit">Submit</button>
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
                                            alt="" style="height: 100px; width: 100px;">
                                    </td>
                                    <td>{{ $banner->title }}</td>
                                    <td>{{ $banner->description }}</td>
                                    <td><a href="{{ $banner->link }}">{{ $banner->link }}</a></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a data-bs-toggle="modal" data-bs-target="#banner{{ $banner->id }}"
                                                class="btn btn-outline-primary btn-sm">Edit</a>

                                            <form action="{{ route('agent.group.delete.banner', $banner->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-sm">Delete</button>
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
                                                            <button class="btn btn-primary mt-3"
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


    <section class="about">
        <div class="card">

            <div class="card-body ">
                <h5 class="card-title">About</h5>
                <form method="POST" action="{{ route('agent.group.store.about', $about) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="">About Title</label>
                        <input type="text" class="form-control" id="" name="title"
                            value="{{ $about->title }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Sub Title</label>
                        <input type="text" class="form-control" id="" name="subtitle"
                            value="{{ $about->subtitle }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">About Image</label>

                        <input type="hidden" class="form-control" id="" name="old_image" value="{{ $about->image }}">
                        <input type="file" class="form-control" id="" name="image">
                    </div>
                    <div class="my-3">
                        <label for="">About Description</label>
                        <textarea id="summernote" name="about">{{$about->about}}</textarea>
                    </div>
                    <div class="form-group my-2">
                        <label for="">About Button Link</label>
                        <input type="url" class="form-control" id="" name="link" value="{{ $about->link }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-body">
                <div class="card-title">
                    view About
                </div>
                <table class="table table-bordered rounded table-striped table-sm">
                    <tr>
                        <th class="w-25">Title</th>
                        <td>{{ $about->title }}</td>
                    </tr>
                    <tr>
                        <th>Sub Title</th>
                        <td>{{ $about->subtitle }}</td>
                    </tr>
                    <tr>
                        <th>About Image</th>
                        <td>
                            <img src="{{ $about->image ? Storage::url($about->image) : asset('assets/img/no-profile.png') }}"
                                alt="About Image" class="img-fluid" style="height: 200px; width: auto;">
                        </td>
                    </tr>
                    <tr>
                        <th>About Description</th>
                        <td>{!! $about->about !!}</td>
                    </tr>
                    <tr>
                        <th>About Button Link</th>
                        <td><a href="{{ $about->link }}" class="btn btn-link"
                                target="_blank">{{ $about->link }}</a></td>
                    </tr>
                </table>
                {{-- <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#editabout">Edit About</button> --}}



          
              
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
                        <label for="">Concern Title</label>
                        <input type="text" class="form-control" id="" name="concern_title">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Concern Image</label>
                        <input type="file" class="form-control" id="" name="concern_image">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Concern Button Link</label>
                        <input type="url" class="form-control" id="" name="concern_link">
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Submit</button>
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
                                    <td>{{ $concern->concern_title }}</td>
                                    <td><a href="{{ $concern->concern_link }}">{{ $concern->concern_link }}</a></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#concern{{ $concern->id }}">Edit</a>

                                            <form action="{{ route('agent.group.delete.concern', $concern->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-sm">Delete</button>
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
                                                                <input type="text" class="form-control"
                                                                    name="concern_title"
                                                                    value="{{ $concern->concern_title }}">
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
                                                            <button class="btn btn-primary mt-3"
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

    <section class="logos">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Partners Logo
                </div>
                <form action="{{ route('agent.group.store.partner') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="">Logo Title</label>
                        <input type="text" class="form-control" id="" name="name">
                    </div>

                    <div class="form-gorup my-3">
                        <label for="logo">Logo</label>
                        <input type="file" class="form-control" id="logo" placeholder="logo"
                            name="logo">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div class="card-title">
                    Partners Logo List
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $partner)
                                <tr>
                                    <td>
                                        <img src="{{ $partner->logo ? Storage::url($partner->logo) : asset('assets/img/no-profile.png') }}"
                                            alt="" style="height: 100px; width: 100px;">
                                    </td>
                                    <td>{{ $partner->name }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#partner{{ $partner->id }}">Edit</a>

                                            <form action="{{ route('agent.group.delete.partner', $partner->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-outline-danger btn-sm">Delete</button>
                                            </form>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="partner{{ $partner->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('agent.group.update.partner', $partner) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group mt-2">
                                                                <label for="">Logo Title</label>
                                                                <input type="text" class="form-control"
                                                                    name="name" value="{{ $partner->name }}">
                                                            </div>
                                                            <div class="form-group my-3">
                                                                <label for="logo">Logo</label>
                                                                <input type="file" class="form-control"
                                                                    id="logo" name="logo">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
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
    </section>


    <section class="social">
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
                    <button class="btn btn-primary mt-3">Submit</button>
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
