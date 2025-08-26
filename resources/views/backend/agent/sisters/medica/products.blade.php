<x-app>
    <x-slot name="title"> Medica Products</x-slot>
    <section class="product-list">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    list of Products
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Best Selling</th>
                        <th>Hot Selling</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $product->image ? Storage::url($product->image) : asset('assets/img/no-profile.png') }}"
                                    alt="product Image" class="img-fluid" style="height: 100px; object-fit: cover;">
                            </td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->category->title ?? '' }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->descount_price }}</td>
                            <td>
                                <form action="{{ route('agent.medica.product.bestselling', $product) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="product{{ $product->id }}" name="best" value="1"
                                            {{ $product->best == 1 ? 'checked' : '' }} onchange="this.form.submit()">
                                        <label class="form-check-label" for="product{{ $product->id }}">Best
                                            Selling</label>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('agent.medica.product.hotselling', $product) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="producthot{{ $product->id }}" name="hot" value="1"
                                            {{ $product->hot == 1 ? 'checked' : '' }} onchange="this.form.submit()">
                                        <label class="form-check-label" for="producthot{{ $product->id }}">Hot
                                            Selling</label>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm me-1"
                                    href="{{ route('agent.medica.product.edit', $product) }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form class="d-inline" action="{{ route('agent.medica.delete.product', $product) }}"
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
                {{ $products->links() }}
            </div>
        </div>
    </section>
</x-app>
