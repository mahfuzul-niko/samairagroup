<x-app>
    <x-slot name="title">Wecome to Completed Projects</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create Completed Projects
                </div>
                <form action="{{ route('agent.job.store.project') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Order</label>
                        <input type="number" class="form-control" name="order" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <button class="btn btn-sm btn-primary">save</button>
                </form>
                <div class="card-title">
                    List Completed Projects
                </div>
                <table class="table">
                    <tr>
                        <th>Order</th>
                        <th>Image</th>
                        <th>title</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->order }}</td>
                            <td><img src="{{ $project->image ? Storage::url($project->image) : asset('assets/img/no-profile.png') }}"
                                    alt="" style="height: 100px; width: auto;"></td>
                            <td>{{ $project->title }}</td>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                        data-bs-toggle="modal" data-bs-target="#project{{ $project->id }}"><i
                                            class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.job.delete.project', $project) }}" method="POST" class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="project{{ $project->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Projects</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('agent.job.update.project', $project) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="">Order</label>
                                                <input type="number" class="form-control" name="order" required
                                                    value="{{ $project->order }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Title</label>
                                                <input type="text" class="form-control" name="title" required
                                                    value="{{ $project->title }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Image</label>
                                                <input type="file" class="form-control" name="image" >
                                            </div>
                                            <button class="btn btn-sm btn-primary">save</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
</x-app>
