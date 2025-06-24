<x-app>
    <x-slot name="title">Wecome Single Order</x-slot>
    <section class="order">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Order Detels
                </div>
                <table class="table">
                    <tr>
                        <th>Customer Name</th>
                        <td>{{ $order->name }}</td>
                    </tr>
                    <tr>
                        <th>Customer phone Number</th>
                        <td>{{ $order->phone }}</td>
                    </tr>
                    <tr>
                        <th>Customer Email</th>
                        <td>{{ $order->email }}</td>
                    </tr>
                    <tr>
                        <th>Customer Address</th>
                        <td>{{ $order->address }}</td>
                    </tr>
                    <tr>
                        <th>Customer City</th>
                        <td>{{ $order->city }}</td>
                    </tr>
                    <tr>
                        <th>Customer State</th>
                        <td>{{ $order->state }}</td>
                    </tr>
                    <tr>
                        <th>Customer Landmark</th>
                        <td>{{ $order->landmark }}</td>
                    </tr>
                    <tr>
                        <th>Customer Postal Code</th>
                        <td>{{ $order->postal_code }}</td>
                    </tr>
                    <tr>
                        <th>Customer Total Payable</th>
                        <td>{{ $order->total }} taka</td>
                    </tr>
                    <tr>
                        <th>Products</th>
                        <td>
                            <ul class="list-unstyled">
                                @foreach ($order->products as $product)
                                    <li class="mb-3">
                                        <div class="d-flex">
                                            <strong class="me-2 w-25">Name:</strong>
                                            <span>{{ $product->title }}</span>
                                        </div>
                                        <div class="d-flex">
                                            <strong class="me-2 w-25">Quantity:</strong>
                                            <span>{{ $product->pivot->quantity }}</span>
                                        </div>
                                        <div class="d-flex">
                                            <strong class="me-2 w-25">Price of single unit:</strong>
                                            <span>{{ $product->pivot->price }}</span>
                                        </div>
                                        <div class="d-flex">
                                            <strong class="me-2 w-25">Size:</strong>
                                            <span>{{ $product->pivot->size }}</span>
                                        </div>
                                        <div class="d-flex">
                                            <strong class="me-2 w-25">Weight:</strong>
                                            <span>{{ $product->pivot->weight }}</span>
                                        </div>
                                    </li>
                                    <hr>
                                @endforeach
                            </ul>


                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</x-app>
