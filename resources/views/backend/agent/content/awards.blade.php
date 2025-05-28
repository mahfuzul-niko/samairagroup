<x-app>
    <x-slot name="title">Wecome Awards</x-slot>

    <section class="awards-banner">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Store Award Banner
                </div>
                <form action="{{ route('agent.content.store.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="award_banner">
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                </form>
                <div class="card-title">
                    Award Banner
                </div>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($banners as $key=> $banner)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> <img src="{{$banner->image ? Storage::url($banner->image) :asset('assets/img/no-profile.png')}}" class="img-fluid" style="height: 100px; width: auto;" alt=""> </td>
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
    <section class="awards">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Store Award
                </div>
                <form action="{{ route('agent.content.store.award') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                </form>
            </div>
        </div>
    </section>
    <section class="list-awards">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    List of Award
                </div>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($awards as $key => $award)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>{{ $award->title }}</td>
                            <td><img src="{{ $award->image ? Storage::url($award->image) : asset('assets/img/no-profile.png') }}"
                                    alt="" class="img-fluid" style="height: 100px; width: auto;"></td>
                            <td>
                                <a class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                    data-bs-target="#award{{ $award->id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form class="d-inline" action="{{ route('agent.content.delete.award', $award) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <div class="modal fade" id="award{{ $award->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Award
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('agent.content.update.award', $award) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group my-3">
                                                    <label for="award">Award Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="Enter award name" value="{{ $award->title }}"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Image</label>
                                                    <input type="file" name="image" class="form-control">
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
</x-app>
