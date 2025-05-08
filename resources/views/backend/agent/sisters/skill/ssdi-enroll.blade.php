<x-app>
    <x-slot name="title">SSDI Enroll</x-slot>

    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    List of enrolls
                </div>
                <table class="table table-striped">
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Course Code</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td>
                            Approve
                        </td>
                        <td>Action</td>
                    </tr>
                    @foreach ($enrolls as $key => $enroll)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $enroll->name }}</td>
                            <td>{{ $enroll->course->course_code }}</td>
                            <td>{{ $enroll->email }}</td>
                            <td>{{ $enroll->phone }}</td>
                            <td>
                                <form action="{{ route('agent.course.enroll.mark', $enroll) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="switchCheckDefault" name="mark" value="1"
                                            {{ $enroll->mark == 1 ? 'checked' : '' }} onchange="this.form.submit()">
                                        <label class="form-check-label" for="switchCheckDefault">Approve</label>
                                    </div>
                                </form>

                            </td>
                            <td>
                                <a href="" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#enrol{{ $enroll->id }}">edit</a>


                                <!-- Modal -->
                                <div class="modal fade" id="enrol{{ $enroll->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Enroll Update</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('agent.course.update.enroll', $enroll) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="mb-2">
                                                        <label for="">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ $enroll->name }}">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="">email</label>
                                                        <input type="text" class="form-control" name="email"
                                                            value="{{ $enroll->email }}">
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="">phone</label>
                                                        <input type="text" class="form-control" name="phone"
                                                            value="{{ $enroll->phone }}">
                                                    </div>

                                                    <button type="submit" class="btn btn-primary btn-sm">Save
                                                        changes</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('agent.course.delete.enroll', $enroll) }}" method="POST"
                                    class="d-inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this enrollment?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
</x-app>
