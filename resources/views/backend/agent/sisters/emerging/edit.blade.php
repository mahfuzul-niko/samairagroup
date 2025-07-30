<x-app>
    <x-slot name="title">Wecome Edit Product</x-slot>

    <section class="product">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Edit Product</div>
                
                <div class="mb-3">
                    <img src="{{ $product->image ? Storage::url($product->image) : asset('assets/img/no-profile.png') }}"
                        class="img-fluid" style="height: 300px; width: auto;" alt="">
                </div>
                <form action="{{ route('agent.emerging.update.product', $product) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" id="title" required
                            value="{{ $product->title }}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" id="category" name="category_id" required>
                                    <option value="" selected disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Price</label>
                                <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Descount price</label>
                                <input type="number" class="form-control" name="descount_price" required
                                    value="{{ $product->descount_price }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Weight</label>
                                <input type="text" class="form-control" name="weight"
                                    value="{{ $product->weight ? implode(', ', json_decode($product->weight, true)) : '' }}">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Size</label>
                                <input type="text" class="form-control" name="size"
                                    value="{{ $product->size ? implode(', ', json_decode($product->size, true)) : '' }}">

                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="" class="form-control" rows="5">{{ $product->description }}</textarea>
                    </div>
                    <button class="btn btn-sm btn-success">save</button>
                </form>
            </div>
        </div>
    </section>

    <section class="multi-image">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Product Images
                </div>
                <div class="row g-2">
                    @forelse ($product->images as $image)
                        <div class="col-md-4 position-relative">
                            <img src="{{ asset('storage/' . $image->image) }}" class="img-fluid rounded" alt=""
                                style="height: 200px; object-fit: cover; width: 100%;">

                            <form action="{{ route('agent.emerging.delete.images', $image->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this image?')"
                                class="position-absolute top-0 end-0 m-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger p-1" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    @empty
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/no-profile.png') }}" class="img-fluid" alt="">
                        </div>
                    @endforelse
                </div>

                <div class="card-title">
                    Upload Multi Images
                </div>
                <form action="{{ route('agent.emerging.store.images') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <div class="mb-3">
                        <label for="multi_images">Multi Images</label>
                        <input type="file" class="form-control" id="multi_images" name="multi_images[]" multiple>
                    </div>

                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>

    </section>
</x-app>
