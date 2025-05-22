<x-app>
    <x-slot name="title">Certificate</x-slot>
    <section class="certificate">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Confirm Enrollments
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Course Code</th>
                        <th>Phone</th>
                        <th>Certificate</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($enrolls as $key => $enroll)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $enroll->name }}</td>
                            <td>{{ $enroll->course->course_code }}</td>
                            <td>{{ $enroll->phone }}</td>
                            <td>
                                @if ($enroll->certificate)
                                    <span class="text-success" title="Certificate available">
                                        <i class="bi bi-check-circle-fill"></i> Certificate available
                                    </span>
                                @else
                                    <span class="text-danger" title="No certificate">
                                        <i class="bi bi-x-circle-fill"></i> No certificate
                                    </span>
                                @endif
                            </td>

                            <td>
                                <a data-bs-toggle="modal" data-bs-target="#certificate{{$enroll->id}}" type="button"
                                    class="btn btn-sm btn-warning text-light"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="certificate{{$enroll->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @if ($enroll->certificate)
                                            <div class="mb-3">
                                                <strong>Name:</strong>
                                                <p class="mb-2">{{ $enroll->certificate->name }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Certificate:</strong>
                                                <p class="mb-2">
                                                    <a href="{{ asset('storage/' . $enroll->certificate->file) }}"
                                                        target="_blank" class="btn btn-sm btn-primary">
                                                        View Certificate
                                                    </a>
                                                </p>
                                            </div>
                                            <form
                                                action="{{ route('agent.content.delete.certificate', $enroll->certificate) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        @else
                                            <form action="{{ route('agent.content.store.certificate') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="enroll_id" value="{{ $enroll->id }}">
                                            
                                                <div class="mb-3">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Certificate</label>
                                                    <input type="file" class="form-control" name="file" required>
                                                </div>

                                                <button class="btn btn-sm btn-primary">Save</button>
                                            </form>
                                        @endif
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
