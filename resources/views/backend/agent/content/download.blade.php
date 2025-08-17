<x-app>
    <x-slot name="title"> Downloads</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create New Download
                </div>
                <form action="{{ route('agent.content.store.download') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">File</label>
                        <input type="file" class="form-control" name="file" required>
                    </div>
                    <button class="btn btn-sm btn-primary">save</button>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Download List
                </div>
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($downloads as $download)
                        <tr>
                            <td>{{ $download->title }}</td>
                            <td>
                                @if ($download->file)
                                    <a href="{{ Storage::url($download->file) }}" class="btn btn-success" target="_blank">Download</a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('agent.content.delete.download', $download) }}"
                                    method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </section>
</x-app>
