<x-app>
    @push('styles')
        <link rel="stylesheet" href="https://samairagroup.test/assets/frontassets/fonts/css/all.min.css">
    @endpush
    <x-slot name="title"> emerging Categories</x-slot>
    <section class="category-store">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create Category
                </div>
                <form action="{{ route('agent.emerging.store.category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" class="form-control" required>

                    </div>
                    <div class="mb-3">
                        <label for="">Icon</label>
                        <input type="file" name="icon" id="" class="form-control">

                    </div>
                    <button class="btn btn-sm btn-success">Save</button>
                </form>
                <div class="card-title">
                    Categories Table
                </div>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($categories as $key => $category)
                        <tr>
                            <td> {{ $key + 1 }} </td>
                            <td><img src="{{ $category->icon ? Storage::url($category->icon) : asset('assets/img/no-profile.png') }}"
                                    style="height: 100px; width: auto;" alt=""></td>
                            <td> {{ $category->title }} </td>
                            <td>
                                <a class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                    data-bs-target="#category{{ $category->id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form class="d-inline" action="{{ route('agent.emerging.delete.category', $category) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>

                            <div class="modal fade" id="category{{ $category->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Category
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('agent.emerging.update.category', $category) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="">Icon</label>
                                                    <input type="file" name="icon" id=""
                                                        class="form-control">
                                                </div>
                                                <div class="form-group my-3">
                                                    <label for="category">Category Name</label>
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="Enter category name" value="{{ $category->title }}"
                                                        required>
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
