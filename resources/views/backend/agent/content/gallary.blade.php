<x-app>
    <x-slot name="title"> Gallary</x-slot>
    <section class="news_banner-banner">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Store Gallary Banner
                </div>
                <form action="{{ route('agent.content.store.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="gallary_banner">
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                </form>
                <div class="card-title">
                    Gallary Banner
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($banners as $key => $banner)
                        <tr>
                            <td> {{ $key + 1 }} </td>
                            <td> <img
                                    src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                    class="img-fluid" style="height: 100px; width: auto;" alt=""> </td>
                            <td>
                                <form class="d-inline" action="{{ route('agent.content.delete.banner', $banner) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
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
                <div class="card-title">Create New Gallary Item</div>
                <form action="{{ route('agent.content.store.gallary') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Type</label>
                        <select name="type" id="" class="form-control" required>
                            <option disabled>Select Type</option>
                            <option value="award">Award</option>
                            <option value="certificate">Certificate</option>
                            <option value="event">Events</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <button class="btn btn-primary btn-sm">
                        save
                    </button>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Gallary List
                </div>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($gallaries as $key => $gallary)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img src="{{ $gallary->image ? Storage::url($gallary->image) : asset('assets/img/no-profile.png') }}"
                                    class="img-fluid" style="height:100px; width: auto;" alt="">
                            </td>
                            <td>{{ $gallary->title }}</td>
                            <td>{{ $gallary->type }}</td>
                            <td>
                                <form class="d-inline" action="{{ route('agent.content.delete.gallary', $gallary) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
</x-app>
