<x-app>
    <x-slot name="title">SPS</x-slot>
    <section class="logo-section">
        <div class="card">
            <div class="card-body ">
                <div class="card-title">Logo</div>

                <div class="text-center my-3">
                    <div class=" d-inline-block" style="height: 100px; width: auto;">
                        <img src="{{ system_key('samaira_sps_logo') ? Storage::url(system_key('samaira_sps_logo')) : asset('assets/img/no-profile.png') }}"
                            alt="Group Logo" class="img-fluid rounded " style="height: 100px; object-fit: cover;">

                        <form action="{{ route('agent.system.destroy.image', 'samaira_sps_logo') }}" method="POST"
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
                        value="samaira_sps_logo" required>
                    <div class="form-group my-3">
                        <label for="value">Logo</label>
                        <input type="file" name="value" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                </form>
            </div>

        </div>
    </section>

    <section class="benner">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Add New Banner
                </div>
                <form action="{{ route('agent.group.ssdi.store.banner') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="ssdi">
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Banner Image</label>
                        <input type="file" name="image" id="" class="form-control" required>

                    </div>
                    <div class="mb-3">
                        <label for="">Sub Title</label>
                        <textarea name="subtitle" class="form-control" rows="5" id="" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Url</label>
                        <input type="url" class="form-control" name="url">
                    </div>
                    <button class="btn btn-sm btn-primary" type="submit">
                        Submit
                    </button>
                </form>
                <div class="card-title">
                    Banner Info
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Url</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($banners as $banner)
                        <tr>
                            <td>
                                <img src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                    class="img-fluid" style="height: 100px ; width: auto;" alt="">
                            </td>
                            <td>{{ $banner->title }}</td>
                            <td>{{ $banner->subtitle }}</td>
                            <td>{{ $banner->url }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#banner{{ $banner->id }}"><i
                                            class="bi bi-pencil-square"></i></a>

                                    <form action="{{ route('agent.group.ssdi.delete.banner', $banner) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="banner{{ $banner->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('agent.group.ssdi.update.banner', $banner) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="key" value="ssdi">
                                                    <div class="mb-3">
                                                        <label for="">Title</label>
                                                        <input type="text" name="title" class="form-control"
                                                            required value="{{ $banner->title }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Banner Image</label>
                                                        <input type="file" name="image" id=""
                                                            class="form-control">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Sub Title</label>
                                                        <textarea name="subtitle" class="form-control" rows="5" id="" required>{{ $banner->subtitle }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Url</label>
                                                        <input type="url" class="form-control" name="url"
                                                            value="{{ $banner->url }}">
                                                    </div>
                                                    <button class="btn btn-sm btn-primary" type="submit">
                                                        Submit
                                                    </button>
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
