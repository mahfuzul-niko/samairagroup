<x-app>
    <x-slot name="title">Wecome Emerging Products</x-slot>
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
                                <a class="btn btn-primary btn-sm me-1"
                                    href="{{ route('agent.emerging.product.edit', $product) }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form class="d-inline" action="{{ route('agent.emerging.delete.product', $product) }}"
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
