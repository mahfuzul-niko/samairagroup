<x-app>
    <x-slot name="title"> Princess Gold and Diamond Cottation</x-slot>

    <section class="logo-section">
        <div class="card">

            <div class="card-body ">
                <h5 class="card-title">Logo</h5>

                <div class="text-center my-3">
                    <div class=" d-inline-block" style="height: 150px; width: auto;">
                        <img src="{{ system_key('samaira_gold_logo') ? Storage::url(system_key('samaira_gold_logo')) : asset('assets/img/no-profile.png') }}"
                            alt="Group Logo" class="img-fluid rounded " style="height: 200px; object-fit: cover;">

                        <form action="{{ route('agent.system.destroy.image', 'samaira_gold_logo') }}" method="POST"
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
                        value="samaira_gold_logo" required>
                    <div class="form-group my-3">
                        <label for="value">Logo</label>
                        <input type="file" name="value" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                </form>
            </div>

        </div>
    </section>
    <section class="banner">
        <div class="card">
            <div class="card-body ">
                <h5 class="card-title">Banner</h5>
                <form action="{{ route('agent.content.store.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="gold" class="form-control" required>
                    <div class="form-group my-3">
                        <label for="banner">Banner Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter title"required>
                    </div>
                    <div class="mb-3">
                        <label for="">Sub Title</label>
                        <textarea name="subtitle" class="form-control" rows="5" id=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Url</label>
                        <input type="url" name="url" class="form-control" placeholder="Enter Url"required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">save</button>
                </form>
                <div class="card-title">
                    Table
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Url</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($banners as $banner)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                    alt="Banner Image" class="img-fluid" style="height: 100px; object-fit: cover;">
                            </td>
                            <td>{{ $banner->title }}</td>
                            <td>{{ $banner->subtitle }}</td>
                            <td><a href="{{ $banner->url }}" class="btn btn-success btn-sm"><i
                                        class="bi bi-eye"></i></a></td>

                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                        data-bs-toggle="modal" data-bs-target="#banner{{ $banner->id }}"><i
                                            class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.content.delete.banner', $banner) }}" method="POST"
                                        class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>


                        <!-- Modal -->
                        <div class="modal fade" id="banner{{ $banner->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update baneer</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('agent.content.update.banner', $banner) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="key" value="gold" class="form-control"
                                                required>
                                            <div class="form-group my-3">
                                                <label for="banner">Banner Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ $banner->title }}" placeholder="Enter title"required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="">Sub Title</label>
                                                <textarea name="subtitle" class="form-control" rows="5" id="">{{ $banner->subtitle }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Url</label>
                                                <input type="url" name="url" class="form-control"
                                                    value="{{ $banner->url }}" placeholder="Enter Url"required>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">save</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </table>
            </div>
        </div>
    </section>


    <section class="servises">
        <div class="card">
            <div class="card-body">
                <div class="card-title"> Add Services</div>
                <form action="{{ route('agent.gold.store.service') }}" method="POST">
                    @csrf
                    <input type="hidden" name="key" value="service">
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Discretion</label>
                        <textarea name="discretion" id="discretion" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Icon</label>
                        <input type="text" name="icon" id="" class="form-control" required>
                        <i class="text-secondary fs-6">looking for icon? <a href="https://fontawesome.com/search"
                                target="_blank">Click here</a></i>
                    </div>
                    <button class="btn btn-primary btn-sm">Save</button>
                </form>
                <div class="card-title"> Services Table</div>
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Discretion</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->discretion }}</td>
                            <td>{{ $service->icon }}</td>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                        data-bs-toggle="modal" data-bs-target="#service{{ $service->id }}"><i
                                            class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.gold.delete.service', $service) }}" method="POST"
                                        class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                            <div class="modal fade" id="service{{ $service->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Service</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('agent.gold.update.service', $service) }}"
                                                method="POST">
                                                @csrf
                                                <input type="hidden" name="key" value="service">
                                                <div class="mb-3">
                                                    <label for="">Title</label>
                                                    <input type="text" id="title" name="title"
                                                        class="form-control" required value="{{ $service->title }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Discretion</label>
                                                    <textarea name="discretion" id="discretion" rows="5" class="form-control">{{ $service->discretion }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Icon</label>
                                                    <input type="text" name="icon" id=""
                                                        class="form-control" required value="{{ $service->icon }}">
                                                    <i class="text-secondary fs-6">looking for icon? <a
                                                            href="https://fontawesome.com/search"
                                                            target="_blank">Click here</a></i>
                                                </div>
                                                <button class="btn btn-primary btn-sm">Save</button>
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
    <section class="why_us">
        <div class="card">
            <div class="card-body">
                <div class="card-title"> Why Us </div>
                <form action="{{ route('agent.gold.store.service') }}" method="POST">
                    @csrf
                    <input type="hidden" name="key" value="why_us">
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="discretion" id="discretion" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Icon</label>
                        <input type="text" name="icon" id="" class="form-control">
                        <i class="text-secondary fs-6">looking for icon? <a href="https://fontawesome.com/search"
                                target="_blank">Click here</a></i>
                    </div>
                    <button class="btn btn-primary btn-sm">Save</button>
                </form>
                <div class="card-title"> Why Us Table</div>
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Discretion</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($why_we as $why_us)
                        <tr>
                            <td>{{ $why_us->title }}</td>
                            <td>{{ $why_us->discretion }}</td>
                            <td>{{ $why_us->icon }}</td>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                        data-bs-toggle="modal" data-bs-target="#why_us{{ $why_us->id }}"><i
                                            class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.gold.delete.service', $why_us) }}" method="POST"
                                        class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                            <div class="modal fade" id="why_us{{ $why_us->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update why us</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('agent.gold.update.service', $why_us) }}"
                                                method="POST">
                                                @csrf
                                                <input type="hidden" name="key" value="why_us">
                                                <div class="mb-3">
                                                    <label for="">Title</label>
                                                    <input type="text" id="title" name="title"
                                                        class="form-control" required value="{{ $why_us->title }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Discretion</label>
                                                    <textarea name="discretion" id="discretion" rows="5" class="form-control">{{ $why_us->discretion }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Icon</label>
                                                    <input type="text" name="icon" id=""
                                                        class="form-control" required value="{{ $why_us->icon }}">
                                                    <i class="text-secondary fs-6">looking for icon? <a
                                                            href="https://fontawesome.com/search"
                                                            target="_blank">Click here</a></i>
                                                </div>
                                                <button class="btn btn-primary btn-sm">Save</button>
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

    <section class="review">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Gold Review</div>
                <form action="{{ route('agent.gold.store.review') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Profile Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="">Review</label>
                        <textarea name="review" id="" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
                <div class="card-title">Gold Review Table</div>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Review</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($reviews as $review)
                        <tr>
                            <td>{{ $review->name }}</td>
                            <td>
                                <img src="{{ $review->image ? Storage::url($review->image) : asset('assets/img/no-profile.png') }}"
                                    alt="Banner Image" class="img-fluid" style="height: 100px; object-fit: cover;">
                            </td>
                            <td>{{ $review->review }}</td>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                        data-bs-toggle="modal" data-bs-target="#review{{ $review->id }}"><i
                                            class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.gold.delete.review', $review) }}" method="POST"
                                        class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                            <div class="modal fade" id="review{{ $review->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Review</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('agent.gold.update.review', $review) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $review->name }}" id="name" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Profile Image</label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Review</label>
                                                    <textarea name="review" id="" class="form-control" rows="5" required>{{ $review->review }}</textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-sm">Save</button>
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




    <section class="partners">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Partners store
                </div>
                <form action="{{ route('agent.gold.store.partner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Partner Name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
                <div class="card-title">
                    Partners List
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partners as $partner)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $partner->title }}</td>
                                <td>
                                    <img src="{{ $partner->image ? Storage::url($partner->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Partner Image" class="img-fluid"
                                        style="height: 80px; object-fit: cover;">
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('agent.gold.delete.partner', $partner) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- //about and contact   --}}

    <section class="about-image">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    About Banner Image
                </div>
                <form action="{{ route('agent.content.about.store.banner') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="gold">
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
                    About Section
                </div>
                @if (is_null($about))
                    <form action="{{ route('agent.content.store.about') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="key" value="gold">
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
                                        <input type="hidden" name="key" value="gold">
                                        <div class="mb-3">
                                            <div class="label">About Name</div>
                                            <input type="text" name="name"
                                                value="{{ $about ? $about->name : '' }}" class="form-control"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <div class="label">About Title</div>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ $about ? $about->title : '' }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Description</label>
                                            <textarea name="description" rows="5" class="form-control" required>{{ $about ? $about->description : '' }}<</textarea>
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
                    <input type="hidden" name="key" value="gold">
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
                    <input type="hidden" name="key" value="gold">

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
</x-app>
