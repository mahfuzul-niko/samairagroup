<x-app>
    <x-slot name="title">Wecome Joyput Homes Property Create</x-slot>
    <section class="creat-property">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create Property
                </div>
                <form action="">
                    <div class="mb-3">
                        <label for="title" class="form-label">Property Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Enter property title" required>
                    </div>
                    <div class="mb-3">
                        
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" name="category_id" required>
                            <option value="" selected disabled>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <textarea name="address" rows="5" id="address" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    placeholder="Enter property price" required>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
</x-app>
