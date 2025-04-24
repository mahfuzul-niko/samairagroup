<x-app>
    <x-slot name="title">Wecome To Samaira Group</x-slot>

    <section class="banner-section">
        <div class="card">
            <div class="card-header ">
                <h5 class="card-title">Logo</h5>
            </div>
            <div class="card-body ">

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
            <div class="card-header ">
                <h5 class="card-title">Banner</h5>
            </div>
            <div class="card-body ">
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
                                        <a data-bs-toggle="modal" data-bs-target="#banner{{ $banner->id }}"
                                            class="btn btn-outline-primary btn-sm">Edit</a>
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
                                                                <textarea class="form-control" id="" name="title">{{ $banner->title }}</textarea>
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="">Banner Description</label>
                                                                <textarea class="form-control" id="" name="description">{{ $banner->description }}</textarea>
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="">Banner Image</label>
                                                                <input type="file" class="form-control"
                                                                    id="" name="image">
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="">Banner Button Link</label>
                                                                <input type="url" class="form-control"
                                                                    id="" name="link"
                                                                    value="{{ $banner->link }}">
                                                            </div>
                                                            <button class="btn btn-primary mt-3"
                                                                type="submit">Submit</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('agent.group.delete.banner', $banner->id) }}"
                                            method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
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
                                <th>Immage</th>
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
                                        <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Edit</a>



                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
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
                                                                    id="" name="concern_title"
                                                                    value="{{ $concern->concern_title }}">
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="">Concern Image</label>
                                                                <input type="file" class="form-control"
                                                                    id="" name="concern_image">
                                                            </div>
                                                            <div class="form-group mt-2">
                                                                <label for="">Concern Button Link</label>
                                                                <input type="url" class="form-control"
                                                                    id="" name="concern_link"
                                                                    value="{{ $concern->concern_link }}">
                                                            </div>
                                                            <button class="btn btn-primary mt-3"
                                                                type="submit">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <form action="{{ route('agent.group.delete.concern', $concern->id) }}"
                                            method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</x-app>
