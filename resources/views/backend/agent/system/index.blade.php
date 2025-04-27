<x-app>
    <x-slot name="title">System Edit</x-slot>
    <section class="system from">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">System Edit</h5>
                <div class="card-body">
                    <div class="card-body">
                        <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="key" id="key"
                                    placeholder="Key" required>
                                <label for="key">Key</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="value" id="value"
                                    placeholder="Value" required>
                                <label for="value">Value</label>
                            </div>

                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <h5 class="card-title">System Edit Image</h5>
                <div class="card-body">
                    <div class="card-body">
                        <form action="{{ route('agent.system.storeImage') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <label for="key">Key</label>
                            <input type="text" name="key" placeholder="Enter key" class="form-control" required>
                        </div>
                        <div class="form-group my-3">
                            <label for="value">Value</label>
                            <input type="file" name="value" class="form-control" required>
                        </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="show-table">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">System View</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Key</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($system as $item)
                                <tr>
                                    <td>{{ $item->key }}</td>
                                    <td>{{ $item->value }}</td>

                                    <td class="d-flex gap-2">
                                        <a href="" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#systemmodal{{ $item->id }}">Edit</a>


                                        <!-- Modal -->
                                        <div class="modal fade" id="systemmodal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('agent.system.update', $item->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf

                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    name="key" id="key" placeholder="Key"
                                                                    value="{{ $item->key }}">
                                                                <label for="key">Key</label>
                                                            </div>

                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control"
                                                                    name="value" id="value" placeholder="Value"
                                                                    value="{{ $item->value }}">
                                                                <label for="value">Value</label>
                                                            </div>


                                                            <div class="text-end">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('agent.system.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $system->links() }}

                </div>
            </div>
        </div>
    </section>

</x-app>
