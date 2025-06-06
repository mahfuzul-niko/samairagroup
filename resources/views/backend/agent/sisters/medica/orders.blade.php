<x-app>
    <x-slot name="title">Wecome to Medica Product Orders</x-slot>
    <section class="orders">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Medica Orders
                </div>
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <tr>
                            <th>Customer Name</th>
                            <th>Customer Phone</th>
                            <th>Total order Price</th>
                            <th>
                                Products
                            </th>
                            <th>
                                action
                            </th>
                        </tr>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->total }}</td>
                                <td>
                                    <ul>

                                        @foreach ($order->products as $product)
                                            <li>{{$product->title}}</li>
                                            <li>{{$order->size}}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app>
