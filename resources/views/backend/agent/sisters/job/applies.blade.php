a<x-app>
    <x-slot name="title">Wecome Works apply list</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    list of works applies
                </div>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Work Title</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>CV</th>
                        <th>Approve</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($applies as $apply)
                        <tr>
                            <td>{{ $apply->name }}</td>
                            <td>{{ $apply->work->title ?? '' }}</td>
                            <td>{{ $apply->number }}</td>
                            <td>{{ $apply->email }}</td>
                            <td>
                                <a href="{{ Storage::url($apply->file) }}" class="btn btn-warning btn-sm d-inline-block"
                                    target="_blank"><i class="bi bi-eye"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('agent.job.apply.mark', $apply) }}" method="POST">
                                        @csrf
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="apply{{ $apply->id }}" name="mark" value="1"
                                                {{ $apply->mark == 1 ? 'checked' : '' }} onchange="this.form.submit()">
                                            <label class="form-check-label"
                                                for="apply{{ $apply->id }}">Approve</label>
                                        </div>
                                    </form>
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    
                                    <form action="{{ route('agent.job.delete.apply', $apply) }}" method="POST"
                                        class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
</x-app>
