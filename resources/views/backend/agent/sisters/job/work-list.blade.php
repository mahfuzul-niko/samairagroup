<x-app>
    <x-slot name="title"> Works list</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    list of works
                </div>
                <table class="table">
                    <tr>
                        <th>logo</th>
                        <th>Title</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($works as $work)
                        <tr>
                            <td><img src="{{ $work->logo ? Storage::url($work->logo) : asset('assets/img/no-profile.png') }}"
                                    class="img-fluid" style="height: 50px; width: auto;" alt=""></td>
                            <td>{{ $work->title }}</td>
                            <td>{{ $work->salary }}</td>
                            <td>
                                <div class="text-nowrap">
                                    <a href="{{ route('page.job.apply', $work) }}"
                                        class="btn btn-warning btn-sm d-inline-block" target="_blank"><i
                                            class="bi bi-eye"></i></a>
                                    <a href="{{ route('agent.job.edit.work', $work) }}"
                                        class="btn btn-primary btn-sm d-inline-block"><i class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.job.delete.work', $work) }}" method="POST"
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
