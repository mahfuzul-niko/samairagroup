<x-student>
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Certificate Title</th>
                        <th>Certificate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($certificates as $key => $certificate)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $certificate->name }}</td>
                            <td>
                                @if ($certificate->file)
                                    <a href="{{ Storage::url($certificate->file) }}" target="_blank"
                                        class="btn btn-sm btn-primary">View</a>
                                @else
                                    <span class="text-danger">No certificate available</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-student>
