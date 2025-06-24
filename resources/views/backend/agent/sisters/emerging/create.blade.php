<x-app>
    <x-slot name="title">Wecome Create Product</x-slot>

    <section class="product">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Create Product</div>
                <form action="{{ route('agent.emerging.store.product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" id="category" name="category_id" required>
                                    <option value="" selected disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Price</label>
                                <input type="number" class="form-control" name="price" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Descount price</label>
                                <input type="number" class="form-control" name="descount_price"required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Weight</label>
                                <input type="text" class="form-control" name="weight" placeholder="xxx, xxx">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Size</label>
                                <input type="text" class="form-control" name="size" placeholder="xxx, xxx">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="" class="form-control" rows="5"></textarea>
                    </div>
                    <button class="btn btn-sm btn-success">save</button>
                </form>
            </div>
        </div>
    </section>
</x-app>
