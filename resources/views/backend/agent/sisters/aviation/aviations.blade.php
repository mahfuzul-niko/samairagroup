<x-app>
    <x-slot name="title"> To Aviation Requests</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Requests
                </div>
                <div class="table-responsive">

                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Journey</th>
                            <th>Return</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Traveler</th>
                            <th>Adult</th>
                            <th>Child</th>
                            <th>Class</th>
                            <th>Special Request</th>
                        </tr>
                        @foreach ($aviations as $aviation)
                            <tr>
                                <td>{{ $aviation->name }}</td>
                                <td>{{ $aviation->number }}</td>
                                <td>{{ $aviation->email }}</td>
                                <td>{{ $aviation->type }}</td>
                                <td>{{ $aviation->journey }}</td>
                                <td>{{ $aviation->return }}</td>
                                <td>{{ $aviation->from }}</td>
                                <td>{{ $aviation->to }}</td>
                                <td>{{ $aviation->travelers }}</td>
                                <td>{{ $aviation->adults }}</td>
                                <td>{{ $aviation->children }}</td>
                                <td>{{ $aviation->class }}</td>
                                <td>{{ $aviation->special_request }}</td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app>
