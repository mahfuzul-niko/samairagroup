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
                <form action="{{ route('agent.medica.update.product', $product) }}" method="POST"
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
                                <input type="number" class="form-control" name="price" value="{{ $product->price }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Descount price</label>
                                <input type="number" class="form-control" name="descount_price"
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
</x-app>
