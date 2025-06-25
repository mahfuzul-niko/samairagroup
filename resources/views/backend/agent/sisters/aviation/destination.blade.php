<x-app>
    <x-slot name="title">Wecome To Aviation Destinations</x-slot>
    <section class="destination">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    From destination
                </div>
                <form action="{{ route('agent.aviation.store.from') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Destination Title</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">save</button>
                </form>
                <div class="card-title">
                    From destination List
                </div>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($froms as $key => $from)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $from->name }}</td>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                        data-bs-toggle="modal" data-bs-target="#from{{ $from->id }}"><i
                                            class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.aviation.delete.from', $from) }}" method="POST"
                                        class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="from{{ $from->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Destination</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('agent.aviation.update.from', $from) }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="">Destination Title</label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ $from->name }}">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">save</button>
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
    <section class="destination">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    To destination
                </div>
                <form action="{{ route('agent.aviation.store.to') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Destination Title</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">save</button>
                </form>
                <div class="card-title">
                    To destination List
                </div>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($tos as $key => $to)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $to->name }}</td>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                        data-bs-toggle="modal" data-bs-target="#to{{ $to->id }}"><i
                                            class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.aviation.delete.to', $to) }}" method="POST"
                                        class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="to{{ $to->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Destination</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('agent.aviation.update.to', $to) }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="">Destination Title</label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ $to->name }}">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">save</button>
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
