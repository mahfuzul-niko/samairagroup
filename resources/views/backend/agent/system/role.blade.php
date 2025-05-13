<x-app>
    <x-slot name="title">Roles</x-slot>
    <section class="roles">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Add Role
                </div>
                <form action="{{ route('agent.system.store.role') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                            required>
                        <label for="name">Name</label>
                    </div>

                    <div class="form-group mb-3">
                        <select class="form-select" name="status" id="status" required>
                            <option value="active" selected>Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <section class="show-table">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Roles List
                </div>
                <div class="table-responsive">
                    <table class="table  table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <div
                                            class="badge rounded-pill text-bg-{{ $role->status == 'active' ? 'success' : 'danger' }}">
                                            {{ $role->status }}
                                        </div>
                                    </td>
                                    <td><a class="btn btn-success" href="#"><i class="bi bi-eye"></i></a>
                                        <a class="btn btn-primary" type="button" data-bs-toggle="modal"
                                            data-bs-target="#roleModal{{ $role->id }}"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('agent.system.destroy.role', $role->id) }}"
                                            method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="roleModal{{ $role->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header border-0">

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ route('agent.system.update.role', $role->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" name="name"
                                                                id="name" placeholder="Name"
                                                                value="{{ $role->name }}" required>
                                                            <label for="name">Name</label>
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <select class="form-select" name="status" id="status"
                                                                required>
                                                                <option value="active"
                                                                    {{ $role->status == 'active' ? 'selected' : '' }}>
                                                                    Active</option>
                                                                <option value="inactive"
                                                                    {{ $role->status == 'inactive' ? 'selected' : '' }}>
                                                                    Inactive</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app>
