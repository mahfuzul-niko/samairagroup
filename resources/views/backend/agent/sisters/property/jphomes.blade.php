<x-app>
    <x-slot name="title">Wecome Joyput Homes</x-slot>

    <section class="logo-section">
        <div class="card">

            <div class="card-body ">
                <h5 class="card-title">Logo</h5>

                <div class="text-center my-3">
                    <div class=" d-inline-block" style="height: 150px; width: auto;">
                        <img src="{{ system_key('samaira_jphomes_logo') ? Storage::url(system_key('samaira_jphomes_logo')) : asset('assets/img/no-profile.png') }}"
                            alt="Group Logo" class="img-fluid rounded " style="height: 200px; object-fit: cover;">

                        <form action="{{ route('agent.system.destroy.image', 'samaira_jphomes_logo') }}" method="POST"
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
                        value="samaira_jphomes_logo" required>
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
                    <input type="hidden" name="key" value="jphomes" class="form-control" required>
                    <div class="form-group my-3">
                        <label for="banner">Banner Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">save</button>
                </form>
                <div class="card-title">
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($banners as $banner)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Banner Image" class="img-fluid" style="height: 100px; object-fit: cover;">
                                </td>
                                <td>
                                    <form action="{{ route('agent.content.delete.banner', $banner) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
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
                                <option value="system_jp_findrealestate">Find Real Estate</option>
                                <option value="system_jp_meetrelator">Meet Relator</option>
                                <option value="system_jp_takekey">Take The Keys</option>
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
                            <th class="bg-light">Find Real Estate:</th>
                            <td>{{ system_key('system_jp_findrealestate') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Meet Relator:</th>
                            <td>{{ system_key('system_jp_meetrelator') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Take The Keys:</th>
                            <td>{{ system_key('system_jp_takekey') }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="advertise-image">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Advertise Image
                </div>
                <form action="{{ route('agent.system.storeImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select social option</option>
                                <option value="system_jp_advertise_top_image">Top Image</option>
                                <option value="system_jp_advertise_bottom_image">Bottom Image</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 btn-sm">Submit</button>
                </form>
                <div class="card-title">
                    Advertise Images
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Top Image:</th>
                            <td>
                                <img src="{{ system_key('system_jp_advertise_top_image') ? Storage::url(system_key('system_jp_advertise_top_image')) : asset('assets/img/no-profile.png') }}"
                                    alt="Top Image" class="img-fluid" style="height: 100px; object-fit: cover;">
                            </td>
                            <td class="text-center align-middle">
                                <form
                                    action="{{ route('agent.system.destroy.image', 'system_jp_advertise_top_image') }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light">Bottom Image:</th>
                            <td>
                                <img src="{{ system_key('system_jp_advertise_bottom_image') ? Storage::url(system_key('system_jp_advertise_bottom_image')) : asset('assets/img/no-profile.png') }}"
                                    alt="Bottom Image" class="img-fluid" style="height: 100px; object-fit: cover;">
                            </td>
                            <td class="text-center align-middle">
                                <form
                                    action="{{ route('agent.system.destroy.image', 'system_jp_advertise_bottom_image') }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="advertise-text">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Advertise Text
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select social option</option>
                                <option value="system_jp_adtitle">Advertise Title</option>
                                <option value="system_jp_adsubtitle">Advertise Sub Title</option>
                                <option value="system_jp_adtext">Advertise Text</option>
                                <option value="system_jp_adurl">Advertise Url</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3 btn-sm">Submit</button>
                </form>
                <div class="card-title">
                    Advertise Text List
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Advertise Title:</th>
                            <td>{{ system_key('system_jp_adtitle') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Advertise Sub Title:</th>
                            <td>{{ system_key('system_jp_adsubtitle') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Advertise Text:</th>
                            <td>{{ system_key('system_jp_adtext') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Advertise Url:</th>
                            <td>{{ system_key('system_jp_adurl') }}</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </section>
    <section class="review">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Review
                </div>
                <form action="{{ route('agent.jphomes.store.review') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Review type</label>
                                <select class="form-select" aria-label="Default select example" name="type"
                                    required>
                                    <option selected>Select Review Type</option>
                                    <option value="customer">Customer</option>
                                    <option value="owner">Owner</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" class="form-control" id="inputEmail4" name="name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Review</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="review" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
                <div class="card-title">
                    Review List
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Review</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $review)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $review->type }}</td>
                                <td>{{ $review->name }}</td>
                                <td>
                                    <img src="{{ $review->image ? Storage::url($review->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Review Image" class="img-fluid"
                                        style="height: 100px; object-fit: cover;">
                                </td>
                                <td>{{ $review->review }}</td>
                                <td class="text-center">
                                    <form action="{{ route('agent.jphomes.delete.review', $review) }}"
                                        method="POST">
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
    <section class="partners">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Partners store
                </div>
                <form action="{{ route('agent.jphomes.store.partner') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Partner Name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name">
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
                                <td>{{ $partner->name }}</td>
                                <td>
                                    <img src="{{ $partner->image ? Storage::url($partner->image) : asset('assets/img/no-profile.png') }}"
                                        alt="Partner Image" class="img-fluid"
                                        style="height: 80px; object-fit: cover;">
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('agent.jphomes.delete.partner', $partner) }}"
                                        method="POST">
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


</x-app>
