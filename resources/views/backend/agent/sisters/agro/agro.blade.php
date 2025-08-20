<x-app>
    <x-slot name="title"> Joypur Agro Limited</x-slot>

    <section class="logo-section">
        <div class="card">

            <div class="card-body ">
                <h5 class="card-title">Logo</h5>

                <div class="text-center my-3">
                    <div class=" d-inline-block" style="height: 150px; width: auto;">
                        <img src="{{ system_key('samaira_agro_logo') ? Storage::url(system_key('samaira_agro_logo')) : asset('assets/img/no-profile.png') }}"
                            alt="Group Logo" class="img-fluid rounded " style="height: 200px; object-fit: cover;">

                        <form action="{{ route('agent.system.destroy.image', 'samaira_agro_logo') }}" method="POST"
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
                        value="samaira_agro_logo" required>
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
                    <input type="hidden" name="key" value="agro" class="form-control" required>
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
                                            <input type="hidden" name="key" value="agro" class="form-control"
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
    <section class="Services">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Services Image
                </div>
                <form action="{{ route('agent.system.storeImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select social option</option>
                                <option value="system_agro_image_one">Image One</option>
                                <option value="system_agro_image_two">Image Two</option>
                                <option value="system_agro_image_three">Image Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="inputEmail4" name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 btn-sm">Submit</button>
                </form>
                <div class="card-title">
                    Services Image List
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Image One:</th>
                            <td><img src="{{ system_key('system_agro_image_one') ? Storage::url(system_key('system_agro_image_one')) : asset('asset/img/no-profile.png') }}"
                                    class="ing-fluid" style="height: 100px; width: auto;" alt=""></td>
                            <td>
                                <form action="{{ route('agent.system.destroy.image', 'system_agro_image_one') }}"
                                    method="POST" class="mt-2">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light">Image Two:</th>
                            <td><img src="{{ system_key('system_agro_image_two') ? Storage::url(system_key('system_agro_image_two')) : asset('asset/img/no-profile.png') }}"
                                    class="ing-fluid" style="height: 100px; width: auto;" alt=""></td>
                            <td>
                                <form action="{{ route('agent.system.destroy.image', 'system_agro_image_two') }}"
                                    method="POST" class="mt-2">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light">Image Three:</th>
                            <td><img src="{{ system_key('system_agro_image_three') ? Storage::url(system_key('system_agro_image_three')) : asset('asset/img/no-profile.png') }}"
                                    class="ing-fluid" style="height: 100px; width: auto;" alt=""></td>
                            <td>
                                <form action="{{ route('agent.system.destroy.image', 'system_agro_image_three') }}"
                                    method="POST" class="mt-2">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="card-body">
                <div class="card-title">
                    Services
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select social option</option>
                                <option value="system_agro_text_one">Text One</option>
                                <option value="system_agro_text_two">Text Two</option>
                                <option value="system_agro_text_three">Text Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 btn-sm">Submit</button>
                </form>
                <div class="card-title">
                    Services List
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Text One:</th>
                            <td>{{ system_key('system_agro_text_one') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Text Two:</th>
                            <td>{{ system_key('system_agro_text_two') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Text Three:</th>
                            <td>{{ system_key('system_agro_text_three') }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="Our Farm Introduction">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Our Farm Introduction
                </div>
                @if ($introduction == null)
                    <form action="{{ route('agent.agro.store.introduction') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" name="key">
                            <label for="">Image one</label>
                            <input type="file" class="form-control" name="image_1">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="key">
                            <label for="">Image Two</label>
                            <input type="file" class="form-control" name="image_2">
                        </div>
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="">Sub Title</label>
                            <textarea class="form-control" name="subtitle" id=""></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Discription</label>
                            <textarea class="form-control" name="discription" id=""></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Url</label>
                            <input type="text" class="form-control" name="url" id="url">
                        </div>
                        <button class="btn btn-primary mt-3 btn-sm">Submit</button>
                    </form>
                @else
                    <table class="table">
                        <tr>
                            <th>Image one</th>
                            <td><img src="{{ $introduction->image_1 ? Storage::url($introduction->image_1) : asset('asset/img/no-profile.png') }}"
                                    alt="" class="img-fluid" style="height: 150px; width: auto;"></td>
                        </tr>
                        <tr>
                            <th>Image two</th>
                            <td><img src="{{ $introduction->image_2 ? Storage::url($introduction->image_2) : asset('asset/img/no-profile.png') }}"
                                    alt="" class="img-fluid" style="height: 150px; width: auto;"></td>

                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ $introduction->title }}</td>
                        </tr>
                        <tr>
                            <th>Sub Title</th>
                            <td>{{ $introduction->subtitle }}</td>
                        </tr>
                        <tr>
                            <th>Discription</th>
                            <td>{{ $introduction->discription }}</td>
                        </tr>
                        <tr>
                            <th>Url</th>
                            <td>{{ $introduction->url }}</td>
                        </tr>
                        <tr>
                            <th>
                                Action
                            </th>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                        data-bs-toggle="modal"
                                        data-bs-target="#introduction{{ $introduction->id }}"><i
                                            class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.agro.delete.introduction', $introduction) }}"
                                        method="POST" class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                                <div class="modal fade" id="introduction{{ $introduction->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update
                                                    introduction</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form
                                                    action="{{ route('agent.agro.update.introduction', $introduction) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">

                                                        <label for="">Image one</label>
                                                        <input type="file" class="form-control" name="image_1">
                                                    </div>
                                                    <div class="mb-3">

                                                        <label for="">Image Two</label>
                                                        <input type="file" class="form-control" name="image_2">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            value="{{ $introduction->title }}" id="title">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Sub Title</label>
                                                        <textarea class="form-control" name="subtitle" id="">{{ $introduction->subtitle }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Discription</label>
                                                        <textarea class="form-control" name="discription" id="">{{ $introduction->discription }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Url</label>
                                                        <input type="text" class="form-control" name="url"
                                                            value="{{ $introduction->url }}" id="url">
                                                    </div>
                                                    <button class="btn btn-primary mt-3 btn-sm">Submit</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table>
                @endif
            </div>
        </div>
    </section>
    <section class="Our Farm Introduction">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Our Farm Benefit
                </div>
                @if ($benefit == null)
                    <form action="{{ route('agent.agro.store.benefit') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" name="key">
                            <label for="">Image one</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="">Sub Title</label>
                            <textarea class="form-control" name="subtitle" id=""></textarea>
                        </div>

                        <div class="row row-cols-2">
                            <div class="mb-3">
                                <label for="">List Title One</label>
                                <input type="text" class="form-control" name="list_1_title" id="list_1_title">
                            </div>
                            <div class="mb-3">
                                <label for="">List sub Title One</label>
                                <textarea class="form-control" name="list_1_subtitle" id=""></textarea>
                            </div>
                        </div>
                        <div class="row row-cols-2">
                            <div class="mb-3">
                                <label for="">List Title two</label>
                                <input type="text" class="form-control" name="list_2_title" id="list_2_title">
                            </div>
                            <div class="mb-3">
                                <label for="">List sub Title two</label>
                                <textarea class="form-control" name="list_2_subtitle" id=""></textarea>
                            </div>
                        </div>
                        <div class="row row-cols-2">
                            <div class="mb-3">
                                <label for="">List Title three</label>
                                <input type="text" class="form-control" name="list_3_title" id="list_3_title">
                            </div>
                            <div class="mb-3">
                                <label for="">List sub Title three</label>
                                <textarea class="form-control" name="list_3_subtitle" id=""></textarea>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Url</label>
                            <input type="text" class="form-control" name="url" id="url">
                        </div>
                        <button class="btn btn-primary mt-3 btn-sm">Submit</button>
                    </form>
                @else
                    <table class="table">
                        <tr>
                            <th>Image</th>
                            <td>
                                <img src="{{ $benefit->image ? Storage::url($benefit->image) : asset('asset/img/no-profile.png') }}"
                                    alt="" class="img-fluid" style="height: 150px; width: auto;">
                            </td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{ $benefit->title }}</td>
                        </tr>
                        <tr>
                            <th>Sub Title</th>
                            <td>{{ $benefit->subtitle }}</td>
                        </tr>
                        <tr>
                            <th>List 1</th>
                            <td>
                                <strong>{{ $benefit->list_1_title }}</strong><br>
                                {{ $benefit->list_1_subtitle }}
                            </td>
                        </tr>
                        <tr>
                            <th>List 2</th>
                            <td>
                                <strong>{{ $benefit->list_2_title }}</strong><br>
                                {{ $benefit->list_2_subtitle }}
                            </td>
                        </tr>
                        <tr>
                            <th>List 3</th>
                            <td>
                                <strong>{{ $benefit->list_3_title }}</strong><br>
                                {{ $benefit->list_3_subtitle }}
                            </td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td>{{ $benefit->url }}</td>
                        </tr>
                        <tr>
                            <th>Action</th>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" data-bs-toggle="modal"
                                        data-bs-target="#benefit{{ $benefit->id }}"><i class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.agro.delete.benefit', $benefit) }}" method="POST"
                                        class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="benefit{{ $benefit->id }}" tabindex="-1"
                                    aria-labelledby="benefitLabel{{ $benefit->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5">Update Benefit</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">
                                                <form action="{{ route('agent.agro.update.benefit', $benefit) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label>Image</label>
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            value="{{ $benefit->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Sub Title</label>
                                                        <textarea class="form-control" name="subtitle">{{ $benefit->subtitle }}</textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label>List Title One</label>
                                                        <input type="text" class="form-control"
                                                            name="list_1_title" value="{{ $benefit->list_1_title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>List Sub Title One</label>
                                                        <textarea class="form-control" name="list_1_subtitle">{{ $benefit->list_1_subtitle }}</textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label>List Title Two</label>
                                                        <input type="text" class="form-control"
                                                            name="list_2_title" value="{{ $benefit->list_2_title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>List Sub Title Two</label>
                                                        <textarea class="form-control" name="list_2_subtitle">{{ $benefit->list_2_subtitle }}</textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label>List Title Three</label>
                                                        <input type="text" class="form-control"
                                                            name="list_3_title" value="{{ $benefit->list_3_title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>List Sub Title Three</label>
                                                        <textarea class="form-control" name="list_3_subtitle">{{ $benefit->list_3_subtitle }}</textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label>URL</label>
                                                        <input type="text" class="form-control" name="url"
                                                            value="{{ $benefit->url }}">
                                                    </div>

                                                    <button class="btn btn-primary btn-sm mt-2">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                @endif
            </div>
        </div>
    </section>
    <section class="project">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Agro Project</div>
                <form action="{{ route('agent.agro.store.project') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <button class="btn btn-primary btn-sm mt-2">Submit</button>
                </form>
                <div class="card-title">Agro Project List</div>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($projects as $key => $project)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="{{ $project->image ? Storage::url($project->image) : asset('assets/img/no-profile.png') }}"
                                    class="img-fluid" style="height: 100px ; width: auto;" alt=""></td>
                            <td>{{ $project->title }}</td>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" data-bs-toggle="modal"
                                        data-bs-target="#project{{ $project->id }}"><i class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.agro.delete.project', $project) }}" method="POST"
                                        class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="project{{ $project->id }}" tabindex="-1"
                                    aria-labelledby="project{{ $project->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5">Update Project</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">
                                                <form action="{{ route('agent.agro.update.project', $project) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="">Image</label>
                                                        <input type="file" name="image" id=""
                                                            class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                            value="{{ $project->title }}" id="title">
                                                    </div>
                                                    <button class="btn btn-primary btn-sm mt-2">Submit</button>
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

    <section class="partners">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Partners store
                </div>
                <form action="{{ route('agent.agro.store.partner') }}" method="POST" enctype="multipart/form-data">
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
                                    <form action="{{ route('agent.agro.delete.partner', $partner) }}" method="POST">
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
                    <input type="hidden" name="key" value="agro">
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
                        <input type="hidden" name="key" value="agro">
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
                                        <input type="hidden" name="key" value="agro">
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
                    <input type="hidden" name="key" value="agro">
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
                    <input type="hidden" name="key" value="agro">

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
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Concern Content
                </div>
                <form action="{{ route('agent.system.store.concern.content') }}" method="POST">
                    @csrf
                    <input type="hidden" name="key" value="agro">
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
