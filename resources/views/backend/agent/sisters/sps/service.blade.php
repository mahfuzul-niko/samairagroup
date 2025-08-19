<x-app>
    <x-slot name="title">SPS</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title" for="">Create sps service</div>
                <form action="{{ route('agent.sps.store.service') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Icon</label>
                        <input type="file" class="form-control" name="icon">
                    </div>
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Url</label>
                        <input type="url" name="url" id="" class="form-control">
                    </div>
                    <button class="btn btn-sm btn-primary">save</button>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">Service Title</div>
                <table class="table">
                    <tr>
                        <th>icon</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Url</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($services as $service)
                        <tr>
                            <td>
                                <img src="{{ $service->icon ? Storage::url($service->icon) : asset('assets/img/no-profile.png') }}"
                                    alt="" style="height: 100px ;  width: auto;">
                            </td>
                            <td>
                                {{ $service->title ?? 'title' }}
                            </td>
                            <td>
                                {{ $service->description ?? 'Description' }}
                            </td>
                            <td>
                                {{ $service->url ?? 'url' }}
                            </td>
                            <td>
                                <div class="text-nowrap">
                                    <a class="btn btn-primary btn-sm d-inline-block" type="button"
                                        data-bs-toggle="modal" data-bs-target="#service{{ $service->id }}"><i
                                            class="bi bi-pen"></i></a>
                                    <form action="{{ route('agent.sps.delete.service', $service) }}" method="POST"
                                        class="d-inline-block m-0 p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                            <div class="modal fade" id="service{{ $service->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update baneer</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('agent.sps.update.service',$service) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="">Icon</label>
                                                    <input type="file" class="form-control" name="icon">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Title</label>
                                                    <input type="text" name="title" id=""
                                                        class="form-control" value="{{ $service->title }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Description</label>
                                                    <textarea name="description" id="" class="form-control">{{ $service->description }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Url</label>
                                                    <input type="url" name="url" id=""
                                                        value="{{ $service->url }}" class="form-control">
                                                </div>
                                                <button class="btn btn-sm btn-primary">save</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>

</x-app>
