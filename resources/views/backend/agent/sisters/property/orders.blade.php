<x-app>
    <x-slot name="title">Wecome Jphomes Orders</x-slot>
    <section class="orders">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Property Orders</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th>View Property</th>
                                <th>Approval</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->comment }}</td>
                                    <td>
                                        <a href="{{ route('page.jphomes.SingleProperty', $order->property) }}"
                                            class="btn btn-success"><i class="bi bi-eye"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('agent.jphomes.order.approve', $order) }}"
                                            method="POST">
                                            @csrf
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="order{{ $order->id }}" name="mark" value="1"
                                                    {{ $order->mark == 1 ? 'checked' : '' }}
                                                    onchange="this.form.submit()">
                                                <label class="form-check-label"
                                                    for="order{{ $order->id }}">Approve</label>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('agent.jphomes.delete.order', $order) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this order?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</x-app>
