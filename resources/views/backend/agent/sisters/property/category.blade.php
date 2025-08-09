<x-app>
    <x-slot name="title"> Joyput Homes Category</x-slot>

    <section class="category">
        <div class="card">
            <div class="card-body ">
                <h5 class="card-title">Category</h5>
                <form action="{{ route('agent.jphomes.store.category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="form-group my-3">
                        <label for="category">Category Name</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter category name"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
                <div class="card-title">List of categories</div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $category->image ? Storage::url($category->image) : asset('assets/img/no-profile.png') }}"
                                    alt="Property Image" class="img-fluid" style="height: 50px; object-fit: cover;">
                            </td>
                            <td>{{ $category->title }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                    data-bs-target="#category{{ $category->id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form class="d-inline" action="{{ route('agent.jphomes.delete.category', $category) }}"
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
                                            <form action="{{ route('agent.jphomes.update.category', $category) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="">Image</label>
                                                    <input type="file" name="image" class="form-control">
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
