<x-app>
    @push('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    @endpush
    <x-slot name="title">Wecome to Edit Works</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">Edit Work</div>

                <form action="{{ route('agent.job.update.work', $work) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Logo</label>
                        <input type="file" class="form-control" name="logo">
                    </div>
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" required value="{{ $work->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="">Sub Title</label>
                        <textarea name="subtitle" class="form-control" id="" rows="3" required>{{ $work->subtitle }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Salary</label>
                                <input type="number" class="form-control" name="salary" value="{{ $work->salary }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="">Deadline</label>
                                <input type="date" name="deadline" id="" class="form-control"
                                    value="{{ $work->deadline }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for=""> Description</label>
                        <textarea id="summernote" name="discription">{!! $work->discription !!}</textarea>
                    </div>
                    <button class="btn btn-sm btn-primary">save</button>
                </form>
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
