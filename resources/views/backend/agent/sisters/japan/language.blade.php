<x-app>
    <x-slot name="title"> To Samaira Language</x-slot>
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
    <section class="banner">
        <div class="card">
            <div class="card-body ">
                <h5 class="card-title">Banner</h5>
                <form action="{{ route('agent.content.store.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="language" class="form-control" required>
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
                                <td>{{ $banner->title }}</td>
                                <td>{{ $banner->subtitle }}</td>
                                <td><a href="{{ $banner->url }}" class="btn btn-success btn-sm"><i
                                            class="bi bi-eye"></i></a></td>
                                <td>
                                    <img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Banner Image" class="img-fluid" style="height: 100px; object-fit: cover;">
                                </td>
                                <td>
                                    <div class="text-nowrap">
                                        <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                            data-bs-toggle="modal" data-bs-target="#banner{{ $banner->id }}"><i
                                                class="bi bi-pen"></i></a>
                                        <form action="{{ route('agent.content.delete.banner', $banner) }}"
                                            method="POST" class="d-inline-block m-0 p-0">
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
                                                <input type="hidden" name="key" value="language"
                                                    class="form-control" required>
                                                <div class="form-group my-3">
                                                    <label for="banner">Banner Image</label>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        value="{{ $banner->title }}"
                                                        placeholder="Enter title"required>
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

                                                <form action="{{ route('agent.group.update.story', $story) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="">Title</label>
                                                        <input type="text" name="title" class="form-control"
                                                            value="{{ $story->title }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Student Of</label>
                                                        <input type="text" name="student_of" class="form-control"
                                                            value="{{ $story->student_of }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Image</label>
                                                        <input type="file" name="image" id=""
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Youtube Url</label>
                                                        <input type="url" name="url" id=""
                                                            value="{{ $story->url }}" class="form-control"
                                                            required>
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
    <section class="about-image">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    About Banner Image
                </div>
                <form action="{{ route('agent.content.about.store.banner') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="language">
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
                    Language About Section
                </div>
                @if (is_null($about))
                    <form action="{{ route('agent.content.store.about') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="key" value="language">
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
                                        <input type="hidden" name="key" value="language">
                                        <div class="mb-3">
                                            <div class="label">About Name</div>
                                            <input type="text" name="name"
                                                value="{{ $about ? $about->name : '' }}" required
                                                class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <div class="label">About Title</div>
                                            <input type="text" name="title" class="form-control" required
                                                value="{{ $about ? $about->title : '' }}">
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
                    <input type="hidden" name="key" value="language">
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
                    <input type="hidden" name="key" value="language">

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
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Concern Content
                </div>
                <form action="{{ route('agent.system.store.concern.content') }}" method="POST">
                    @csrf
                    <input type="hidden" name="key" value="language">
                    <div class="mb-3">
                        <label for="">Phone</label>
                        <input type="tel" class="form-control" name="phone"
                            value="{{ $content->phone ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email"
                            value="{{ $content->email ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address"
                            value="{{ $content->address ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Facebook</label>
                        <input type="url" class="form-control" name="facebook"
                            value="{{ $content->facebook ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Twitter</label>
                        <input type="url" class="form-control" name="twitter"
                            value="{{ $content->twitter ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Instagram</label>
                        <input type="url" class="form-control" name="instagram"
                            value="{{ $content->instagram ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Pinterest</label>
                        <input type="url" class="form-control" name="pinterst"
                            value="{{ $content->pinterst ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="map">Map Embed Code</label>
                        <textarea name="map" class="form-control" rows="5">{{ $content->map ?? '' }}</textarea>

                    </div>
                    <div class="mb-3">
                        <label for="office">Office</label>
                        <input type="text" class="form-control" name="office"
                            value="{{ $content->office ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="whatsapp">Whatsapp</label>
                        <input type="text" class="form-control" name="whatsapp"
                            value="{{ $content->whatsapp ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="youtube">Youtube</label>
                        <input type="url" class="form-control" name="youtube"
                            value="{{ $content->youtube ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="linkedin">Linkedin</label>
                        <input type="url" class="form-control" name="linkedin"
                            value="{{ $content->linkedin ?? '' }}">
                    </div>
                    
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>

</x-app>
