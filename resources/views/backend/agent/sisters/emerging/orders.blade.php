<x-app>
    <x-slot name="title">Wecome to Emergin Product Orders</x-slot>
    <section class="orders">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Emergin Orders
                </div>
                <div class="table-responsive">

                    <table class="table table-striped ">
                        <tr>
                            <th>Customer Name</th>
                            <th>Customer Phone</th>
                            <th>Total order Price</th>
                            <th>Approve</th>
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
                                    <form action="{{ route('agent.emerging.order.mark', $order) }}" method="POST">
                                        @csrf
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="order{{ $order->id }}" name="mark" value="1"
                                                {{ $order->mark == 1 ? 'checked' : '' }} onchange="this.form.submit()">
                                            <label class="form-check-label"
                                                for="order{{ $order->id }}">Approve</label>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('agent.emerging.order', $order) }}"
                                        class="btn btn-sm btn-success"><i class="bi bi-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </section>
</x-app>
