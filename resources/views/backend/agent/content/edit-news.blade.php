<x-app>
    @push('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    @endpush
    <x-slot name="title"> Edit News & Events</x-slot>

    <section class="create-news">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create News
                </div>
                <form action="{{ route('agent.content.update.news', $news) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $news->title }}" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <img src="{{ $news->image ? Storage::url($news->image) : asset('assets/img/no-profile.png') }}"
                                style="height: 200px; width: auto;" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea id="summernote" name="description" required>{!! $news->description !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Posted By</label>
                        <input type="text" name="name" class="form-control" value="{{ $news->name }}" required>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                </form>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 300
                });
            });
        </script>
    @endpush
</x-app>
