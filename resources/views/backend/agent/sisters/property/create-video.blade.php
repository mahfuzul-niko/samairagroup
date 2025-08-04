<x-app>
    <x-slot name="title"> Joyput Homes Video Property Create</x-slot>
    <section class="creat-property">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create Video Property
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Whoops!</strong> There were some problems with your input:
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('agent.jphomes.store.property.video') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Property Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Enter property title" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Thumbnail</label>
                        <input type="file" class="form-control" id="thumbnail" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="video" class="form-label">Video URL</label>
                        <input type="text" class="form-control" id="video" name="video_url"
                            placeholder="Enter video URL" required>
                    </div>
                    <div class="mb-3">
                        <label for="video" class="form-label">Custom Url</label>
                        <input type="text" class="form-control" id="video" name="url"
                            placeholder="Enter video URL" required>
                    </div>
                    <button class="btn btn-primary btn-sm">Save</button>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Video Property List
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Thumbnail</th>
                            <th>Video URL</th>
                            <th>Custom URL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videoProperties as $videoProperty)
                            <tr>
                                <td>{{ $videoProperty->title }}</td>
                                <td><img src="{{ Storage::url($videoProperty->image) }}" alt="Thumbnail" width="100">
                                </td>
                                <td>{{ $videoProperty->video_url }}</td>
                                <td>{{ $videoProperty->url }}</td>
                                <td>
                                    <span class="me-1">
                                        <a class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                            data-bs-target="#property{{ $videoProperty->id }}"> <i
                                                class="bi bi-pencil-square"></i></a>
                                    </span>
                                    <span>
                                        <form
                                            action="{{ route('agent.jphomes.delete.property.video', $videoProperty) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"> <i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </span>
                                </td>

                            </tr>


                            <!-- Modal -->
                            <div class="modal fade" id="property{{ $videoProperty->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit property</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form
                                                action="{{ route('agent.jphomes.update.property.video', $videoProperty) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Property Title</label>
                                                    <input type="text" class="form-control" id="title"
                                                        name="title" placeholder="Enter property title"
                                                        value="{{ $videoProperty->title }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Thumbnail</label>
                                                    <input type="file" class="form-control" id="thumbnail"
                                                        name="image">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="video" class="form-label">Video URL</label>
                                                    <input type="text" class="form-control" id="video"
                                                        value="{{ $videoProperty->video_url }}" name="video_url"
                                                        placeholder="Enter video URL" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="video" class="form-label">Custom Url</label>
                                                    <input type="text" class="form-control" id="video"
                                                        value="{{ $videoProperty->url }}" name="url"
                                                        placeholder="Enter video URL" required>
                                                </div>
                                                <button class="btn btn-primary btn-sm">Save</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-app>
