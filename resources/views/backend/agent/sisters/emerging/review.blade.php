<x-app>
    <x-slot name="title">Wecome Reviews</x-slot>
    <section class="reviews">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create Reviews
                </div>
                <form action="{{ route('agent.emerging.store.review') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Subtitle</label>
                        <input type="text" name="subtitle" id="subtitle" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-sm btn-success">Save</button>
                </form>
                <div class="card-title">
                    List Of Reviews
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Sub Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($reviews as $review)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $review->image ? Storage::url($review->image) : asset('assets/img/no-profile.png') }}"
                                    alt="review Image" class="img-fluid" style="height: 100px; object-fit: cover;">
                            </td>
                            <td>{{ $review->name }}</td>
                            <td>{{ $review->subtitle }}</td>
                            <td>{{ $review->description }}</td>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                        data-bs-toggle="modal" data-bs-target="#review{{ $review->id }}"><i
                                            class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.emerging.delete.review', $review) }}" method="POST"
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
                        <div class="modal fade" id="review{{ $review->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Review</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('agent.emerging.update.review' , $review) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="">Name</label>
                                                <input type="text" name="name" id="name" required
                                                    value="{{ $review->name }}" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Image</label>
                                                <input type="file" name="image" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Subtitle</label>
                                                <input type="text" name="subtitle" id="subtitle"
                                                    value="{{ $review->subtitle }}" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Description</label>
                                                <textarea name="description" id="description" class="form-control">{{ $review->description  }}</textarea>
                                            </div>
                                            <button class="btn btn-sm btn-success">Save</button>
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
</x-app>
