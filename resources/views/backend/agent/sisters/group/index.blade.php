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
                                                class="btn btn-outline-primary btn-sm"><i
                                                    class="bi bi-pencil-square"></i></a>

                                            <form action="{{ route('agent.group.delete.banner', $banner->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                        class="bi bi-trash"></i></button>
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
                        <label for="">Order</label>
                        <input type="number" class="form-control" id="" name="order">
                    </div>
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
                                        {{$concern->order}}
                                    </td>
                                    <td>
                                        <img src="{{ $concern->concern_image ? Storage::url($concern->concern_image) : asset('assets/img/no-profile.png') }}"
                                            alt="" style="height: 100px; width: 100px;">
                                    </td>
                                    <td>{{ $concern->concern_text }}</td>
                                    <td><a href="{{ $concern->concern_link }}">{{ $concern->concern_link }}</a></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#concern{{ $concern->id }}"><i
                                                    class="bi bi-pencil-square"></i></a>

                                            <form action="{{ route('agent.group.delete.concern', $concern->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                        class="bi bi-trash"></i></button>
                                            </form>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="concern{{ $concern->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content ">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update
                                                        </h1>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form
                                                            action="{{ route('agent.group.update.concern', $concern) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group mt-2">
                                                                <label for="">Order</label>
                                                                <input type="number" class="form-control"
                                                                    id="" name="order" value="{{ $concern->order }}">
                                                            </div>
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


    <section class="about-image">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Samaira Group About Banner Image
                </div>
                <form action="{{ route('agent.content.about.store.banner') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="samairagroup">
                    <div class="mb-3">
                        <label for="">Banner Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    <button type="submit" class="btn btnsm btn-primary">Save</button>
                </form>
                <div class="card-title">
                    View about Banner
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>action</th>
                    </tr>
                    @foreach ($aboutbanners as $key => $banner)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                    alt="" style="height: 100px; width: auto;"></td>
                            <td>
                                <form action="{{ route('agent.content.about.delete.banner', $banner) }}"
                                    method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
    <section class="about-section">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Samaira Group About Section
                </div>
                @if (is_null($about))
                    <form action="{{ route('agent.content.store.about') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="key" value="samairagroup">

                        <div class="mb-3">
                            <div class="label">About Name</div>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <div class="label">About Title</div>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="5" class="form-control" required></textarea>
                        </div>
                        <button class="btn btn-sm btn-primary" type="submit">save</button>
                    </form>
                @endif
                @if (!is_null($about))
                    <div class="text-end mb-2">
                        <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#about-modal"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('agent.content.delete.about', $about) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                    class="bi bi-trash"></i></button>
                        </form>
                    </div>
                    <div class="modal fade" id="about-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update About</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('agent.content.update.about', $about) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="key" value="samairagroup">
                                        <div class="mb-3">
                                            <div class="label">About Name</div>
                                            <input type="text" name="name"
                                                value="{{ $about ? $about->name : '' }}" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <div class="label">About Title</div>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ $about ? $about->title : '' }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Description</label>
                                            <textarea name="description" rows="5" class="form-control" required>{{ $about ? $about->description : '' }}</textarea>
                                        </div>
                                        <button class="btn btn-sm btn-primary" type="submit">save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{ $about ? $about->name : '' }}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ $about ? $about->title : '' }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $about ? $about->description : '' }}</td>
                        </tr>

                    </table>
                @endif

            </div>
        </div>
    </section>

    {{-- contact starts here   --}}
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Contact Banner
                </div>
                <form action="{{ route('agent.content.contact.store.banner') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="samairagroup">
                    <div class="mb-3">
                        <label for="">Banner Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    <button type="submit" class="btn btnsm btn-primary">Save</button>
                </form>
                <div class="card-title">
                    View Contact Banner
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>action</th>
                    </tr>
                    @foreach ($contactbanners as $key => $banner)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                    alt="" style="height: 100px; width: auto;"></td>
                            <td>
                                <form action="{{ route('agent.content.contact.delete.banner', $banner) }}"
                                    method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Contact Info
                </div>
                <form action="{{ route('agent.content.save.contact.info') }}" method="POST">
                    @csrf
                    <input type="hidden" name="key" value="samairagroup">

                    <div class="mb-3">
                        <label for="">Reach Email</label>
                        <input type="email" class="form-control" name="reach_mail"
                            value="{{ $info->reach_mail ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="">Careers Email</label>
                        <input type="email" class="form-control" name="careers_mail"
                            value="{{ $info->careers_mail ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="Phone">Phone Numbers</label>
                        <input type="text" class="form-control" name="phone"
                            placeholder="+8801xxxxxxxxx, +8801xxxxxxxxx"
                            value="{{ isset($info->phone) ? implode(', ', json_decode($info->phone, true)) : '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="">Address Title</label>
                        <input type="text" class="form-control" name="address_title"
                            value="{{ $info->address_title ?? '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="">Address</label>
                        <textarea name="address" class="form-control" rows="4">{{ $info->address ?? '' }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </form>

            </div>
        </div>
    </section>
    @if (!is_null($info))

        <section>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Contact Add Subject
                    </div>
                    <form action="{{ route('agent.content.contact.store.subject') }}" method="POST">
                        @csrf
                        <input type="hidden" name="info_id" value="{{ $info->id }}">
                        <div class="mb-3">
                            <label for="">Subject Title</label>
                            <input type="text" name="subject" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </form>
                    <div class="card-title">
                        View Subjects
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($info->subjects as $key => $subject)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $subject->subject }}</td>
                                <td>
                                    <form action="{{ route('agent.content.contact.delete.subject', $subject) }}"
                                        method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    @endif




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
