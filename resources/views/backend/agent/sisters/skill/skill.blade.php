<x-app>
    @push('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    @endpush
    <x-slot name="title">Wecome To Samaira Skills Development</x-slot>
    <section class="logo-section">
        <div class="card">
            <div class="card-body ">
                <div class="card-title">Logo</div>

                <div class="text-center my-3">
                    <div class=" d-inline-block" style="height: 100px; width: auto;">
                        <img src="{{ system_key('samaira_skills_logo') ? Storage::url(system_key('samaira_skills_logo')) : asset('assets/img/no-profile.png') }}"
                            alt="Group Logo" class="img-fluid rounded " style="height: 100px; object-fit: cover;">

                        <form action="{{ route('agent.system.destroy.image', 'samaira_skills_logo') }}" method="POST"
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
                        value="samaira_skills_logo" required>
                    <div class="form-group my-3">
                        <label for="value">Logo</label>
                        <input type="file" name="value" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                </form>
            </div>

        </div>
    </section>
    <section class="banner">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Banner Image
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center my-3">
                            <div class=" d-inline-block" style="height: 100px; width: auto;">
                                <img src="{{ system_key('samaira_skills_banner') ? Storage::url(system_key('samaira_skills_banner')) : asset('assets/img/no-profile.png') }}"
                                    alt="Group Logo" class="img-fluid rounded "
                                    style="height: 100px; object-fit: cover;">

                                <form action="{{ route('agent.system.destroy.image', 'samaira_skills_banner') }}"
                                    method="POST" class="mt-2">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form action="{{ route('agent.system.storeImage') }}" class="mt-2" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="key" placeholder="Enter key" class="form-control"
                                value="samaira_skills_banner" required>
                            <div class="form-group my-3">
                                <label for="value">Banner Image</label>
                                <input type="file" name="value" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-secton">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Banner Section
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select social option</option>
                                <option value="system_skill_banner_title">Banner Title</option>
                                <option value="system_skill_banner_sub_title">Banner Subtitle</option>
                                <option value="system_skill_banner_count">Banner Count</option>
                                <option value="system_skill_banner_btn_link">Banner Button Link</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 btn-sm">Submit</button>
                </form>
                <div class="card-title">
                    Banner List
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Banner Title:</th>
                            <td>{{ system_key('system_skill_banner_title') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Banner Subtitle:</th>
                            <td>{{ system_key('system_skill_banner_sub_title') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Banner Count:</th>
                            <td>{{ system_key('system_skill_banner_count') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Banner Button Link:</th>
                            <td>{{ system_key('system_skill_banner_btn_link') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="how-it-works">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    How it works
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select social option</option>
                                <option value="system_skill_register">Register</option>
                                <option value="system_skill_new_course">New Course</option>
                                <option value="system_skill_success">Success</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 btn-sm">Submit</button>
                </form>
                <div class="card-title">
                    how it works List
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Register:</th>
                            <td>{{ system_key('system_skill_register') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">New Course:</th>
                            <td>{{ system_key('system_skill_new_course') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Success:</th>
                            <td>{{ system_key('system_skill_success') }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="logos">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Certificate Logo
                </div>
                <form action="{{ route('agent.group.store.certified') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="">Certificate Title</label>
                        <input type="text" class="form-control" id="" name="name">
                    </div>

                    <div class="form-gorup my-3">
                        <label for="logo">Logo</label>
                        <input type="file" class="form-control" id="logo" placeholder="logo"
                            name="logo">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
                <div class="card-title">
                    Certificate Logo List
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
                            @foreach ($certifieds as $certified)
                                <tr>
                                    <td>
                                        <img src="{{ $certified->logo ? Storage::url($certified->logo) : asset('assets/img/no-profile.png') }}"
                                            alt="" style="height: 100px; width: 100px;">
                                    </td>
                                    <td>{{ $certified->name }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#certified{{ $certified->id }}"><i
                                                    class="bi bi-pencil-square"></i></a>

                                            <form action="{{ route('agent.group.delete.certified', $certified->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                        class="bi bi-trash"></i></button>
                                            </form>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="certified{{ $certified->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('agent.group.update.certified', $certified) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group mt-2">
                                                                <label for="">Logo Title</label>
                                                                <input type="text" class="form-control"
                                                                    name="name" value="{{ $certified->name }}">
                                                            </div>
                                                            <div class="form-group my-3">
                                                                <label for="logo">Logo</label>
                                                                <input type="file" class="form-control"
                                                                    id="logo" name="logo">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-sm">Save
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

    <section class="single-page-info">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Single Page Image
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center my-3">
                            <div class=" d-inline-block" style="height: 100px; width: auto;">
                                <img src="{{ system_key('samaira_skills_single_image') ? Storage::url(system_key('samaira_skills_single_image')) : asset('assets/img/no-profile.png') }}"
                                    alt="Group Logo" class="img-fluid rounded "
                                    style="height: 100px; object-fit: cover;">

                                <form
                                    action="{{ route('agent.system.destroy.image', 'samaira_skills_single_image') }}"
                                    method="POST" class="mt-2">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form action="{{ route('agent.system.storeImage') }}" class="mt-2" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="key" placeholder="Enter key" class="form-control"
                                value="samaira_skills_single_image" required>
                            <div class="form-group my-3">
                                <label for="value">Single Page Image</label>
                                <input type="file" name="value" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                        </form>
                    </div>
                </div>
                <div class="card-title">
                    Single Page Contact
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select Contact option</option>
                                <option value="system_skill_number_top">Number Top</option>
                                <option value="system_skill_number_bottom">Number Bottom</option>
                                <option value="system_skill_email">Email</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 btn-sm">Submit</button>
                </form>
                <div class="card-title">
                    Single Page Contact List
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Number Top:</th>
                            <td>{{ system_key('system_skill_number_top') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Number Bottom:</th>
                            <td>{{ system_key('system_skill_number_bottom') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Email:</th>
                            <td>{{ system_key('system_skill_email') }}</td>
                        </tr>

                    </tbody>
                </table>
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
                    <input type="hidden" name="key" value="ssdi">
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
                    SSDI About Section
                </div>
                @if (is_null($about))
                    <form action="{{ route('agent.content.store.about') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="key" value="ssdi">
                        <div class="mb-3">
                            <div class="label">About Name</div>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <div class="label">About Title</div>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="5" class="form-control"></textarea>
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
                                        <input type="hidden" name="key" value="ssdi">
                                        <div class="mb-3">
                                            <div class="label">About Name</div>
                                            <input type="text" name="name" value="{{ $about ? $about->name : '' }}"
                                                class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <div class="label">About Title</div>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ $about ? $about->title : '' }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Description</label>
                                            <textarea name="description" rows="5" class="form-control">{{ $about ? $about->description : '' }}<</textarea>
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
                            <td>{{ $about->name }}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ $about->title }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $about->description }}</td>
                        </tr>

                    </table>
                @endif

            </div>
        </div>
    </section>

    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Contact Banner
                </div>
                <form action="{{ route('agent.content.contact.store.banner') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="ssdi">
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
                    <input type="hidden" name="key" value="ssdi">

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
