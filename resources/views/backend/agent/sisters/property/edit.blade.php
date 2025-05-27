<x-app>
    <x-slot name="title">Wecome Joyput Homes Property Create</x-slot>
    <section class="creat-property">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create Property
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Whoops!</strong> There were some problems with your input:
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('agent.jphomes.update.property', $property) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Property Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Enter property title" value="{{ $property->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" name="category_id" required>
                            <option value="" disabled>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $property->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Enter property address" value="{{ $property->address }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    placeholder="Enter property price" value="{{ $property->price }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" rows="5" id="description" class="form-control">{{ $property->description }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="bedrooms" class="form-label">Bedrooms</label>
                                <input type="number" class="form-control" id="bedrooms" name="bed"
                                    value="{{ $property->bed }}" placeholder="Enter number of bedrooms" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="bathrooms" class="form-label">Bathrooms</label>
                                <input type="number" class="form-control" id="bathrooms" name="bath"
                                    value="{{ $property->bath }}" placeholder="Enter number of bathrooms" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="area" class="form-label">Area (in sqft)</label>
                                <input type="number" class="form-control" id="area" name="area"
                                    value="{{ $property->area }}" placeholder="Enter area in square feet" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $property->start_date }}"
                                    placeholder="Enter start date" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Complie Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $property->end_date }}"
                                    placeholder="Enter Complite date" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Whats App Number</label>
                                <input type="text" class="form-control" id="whats_app" name="whats_app" value="{{ $property->whats_app }}"
                                    placeholder="Enter Whats App number" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm">Save</button>
                </form>
            </div>
        </div>
    </section>
    <section class="multi-image">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Property Images
                </div>
                <div class="row g-2">
                    @forelse ($property->images as $image)
                        <div class="col-md-4 position-relative">
                            <img src="{{ asset('storage/' . $image->image) }}" class="img-fluid rounded"
                                alt="" style="height: 200px; object-fit: cover; width: 100%;">

                            <form action="{{ route('agent.jphomes.delete.images', $image->id) }}" method="POST"
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
                <form action="{{ route('agent.jphomes.store.images') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="property_id" value="{{ $property->id }}">

                    <div class="mb-3">
                        <label for="multi_images">Multi Images</label>
                        <input type="file" class="form-control" id="multi_images" name="multi_images[]" multiple>
                    </div>

                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>

    </section>
</x-app>
