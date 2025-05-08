<x-app>
    <x-slot name="title">Course Category</x-slot>
    <section class="add-category">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Add Course Category
                </div>
                <form action="{{ route('agent.course.category.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class=" mb-3">
                        <label for="name">Category</label>
                        <input type="text" class="form-control" name="title" placeholder="Category title" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

        <div class="card-body">
            <div class="card-title">
                Course Category List
            </div>
            <div class="table-responsive">
                <table class="table  table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->title }}</td>
                                <td><a class="btn btn-primary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#categoryModal{{ $category->id }}">Edit</a>
                                    <form action="{{ route('agent.course.category.delete', $category->id) }}"
                                        method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>


                                <!-- Modal -->
                                <div class="modal fade" id="categoryModal{{ $category->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Category</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">
                                                <form
                                                    action="{{ route('agent.course.category.update', $category->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class=" mb-3">
                                                        <label for="name">Category</label>
                                                        <input type="text" class="form-control" name="title"
                                                            placeholder="Category title" value="{{ $category->title }}"
                                                            required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-app>
