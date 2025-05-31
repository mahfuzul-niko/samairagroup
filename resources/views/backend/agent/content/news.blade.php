<x-app>
    @push('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    @endpush
    <x-slot name="title">Wecome News & Events</x-slot>
    <section class="news_banner-banner">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Store News & Events Banner
                </div>
                <form action="{{ route('agent.content.store.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="news_banner">
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                </form>
                <div class="card-title">
                    News & Events Banner
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($banners as $key => $banner)
                        <tr>
                            <td> {{ $key + 1 }} </td>
                            <td> <img
                                    src="{{ $banner->image ? Storage::url($banner->image) : asset('assets/img/no-profile.png') }}"
                                    class="img-fluid" style="height: 100px; width: auto;" alt=""> </td>
                            <td>
                                <form class="d-inline" action="{{ route('agent.content.delete.banner', $banner) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
    <section class="create-news">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create News
                </div>
                <form action="{{ route('agent.content.store.news') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea id="summernote" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Posted By</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                </form>
                <div class="card-title">
                    Latest Newses
                </div>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Posted by</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($newses as $key => $news)
                        <tr>
                            <td> {{ $key + 1 }} </td>
                            <td> <img
                                    src="{{ $news->image ? Storage::url($news->image) : asset('assets/img/no-profile.png') }}"
                                    class="img-fluid" style="height:100px; width: auto;" alt=""> </td>
                            <td>{{ $news->title }}</td>
                            <td>{{ $news->name }}</td>

                            <td>
                                <a class="btn btn-primary btn-sm me-2"
                                    href="{{ route('agent.page.edit.news', $news) }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form class="d-inline" action="{{ route('agent.content.delete.news', $news) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
                {{ $newses->links() }}
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 300 // Set editor height
                });
            });
        </script>
    @endpush
</x-app>
