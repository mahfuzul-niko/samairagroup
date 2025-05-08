<x-app>
    <x-slot name="title">All Trainers</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Add Trainer
                </div>
                <form action="{{ route('agent.course.store.trainer') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>


                    <div class="mb-3">
                        <label for="">Skills</label>
                        <input type="text" name="skills" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    List Of Trainer
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>skills</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($trainers as $trainer)
                        @php $contact = json_decode($trainer->contact, true); @endphp
                        <tr>
                            <td>
                                <img src="{{ $trainer->image ? Storage::url($trainer->image) : asset('assets/img/no-profile.png') }}"
                                    alt="" class="img-fluid" style="height: 100px">
                            </td>
                            <td>{{ $trainer->name }}</td>
                            <td>{{ $trainer->email }}</td>
                            <td>{{ $trainer->skills }}</td>
                            <td>{{ $trainer->phone }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#trainer{{ $trainer->id }}">edit</a>


                                <!-- Modal -->
                                <div class="modal fade" id="trainer{{ $trainer->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Trainer</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('agent.course.update.trainer', $trainer) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $trainer->name }}" required>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="">Image</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="">Skills</label>
                                                        <input type="text" name="skills" class="form-control"
                                                            value="{{ $trainer->skills }}" >
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Email</label>
                                                        <input type="email" name="email" class="form-control"
                                                            value="{{ $trainer->email }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="">Phone</label>
                                                        <input type="text" class="form-control" name="phone"
                                                            value="{{ $trainer->phone}}" required>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('agent.course.delete.trainer', $trainer) }}" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
</x-app>
