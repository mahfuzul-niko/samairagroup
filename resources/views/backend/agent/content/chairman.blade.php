<x-app>
    @push('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    @endpush
    <x-slot name="title"> Chairman and Managing Director</x-slot>
    <section class="chairman-banner">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Store Chairman Banner
                </div>
                <form action="{{ route('agent.content.store.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="key" value="chairman_banner">
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                </form>
                <div class="card-title">
                    Chairman Banner
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

    <section class="chairman-infos">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Chairman image section
                </div>
                <form action="{{ route('agent.content.store.chairman.image') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Select Image</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="key"
                                required>
                                <option selected disabled>Select Where Image goes</option>
                                <option value="chairman_top_image">Top Image</option>
                                <option value="chairman_bottom_image">Bottom Image</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="label">Image</div>
                                <input type="file" class="form-control" name="value">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-success">Save</button>
                </form>
                <div class="card-title">
                    View Images
                </div>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            Top Image
                        </th>
                        <td>
                            <img src="{{ isset($chairman['chairman_top_image']) && $chairman['chairman_top_image'] ? Storage::url($chairman['chairman_top_image']) : asset('assets/img/no-profile.png') }}"
                                alt="" class="img-fluid" style="height: 100px; width: auto;">


                        </td>
                    </tr>
                    <tr>
                        <th>
                            Bottom Image
                        </th>
                        <td>

                            <img src="{{ isset($chairman['chairman_bottom_image']) && $chairman['chairman_bottom_image'] ? Storage::url($chairman['chairman_bottom_image']) : asset('assets/img/no-profile.png') }}"
                                alt="" class="img-fluid" style="height: 100px; width: auto;">
                        </td>

                    </tr>

                </table>
            </div>
        </div>
    </section>
    <section class="contex">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Chairman Info
                </div>
                <form action="{{ route('agent.content.store.chairman') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Select Info</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="key" required>
                            <option selected disabled>Select Where Info goes</option>
                            <option value="chairman_top_info">Top Info</option>
                            <option value="chairman_bottom_info">Bottom Info</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Wright Info</label>
                        <textarea id="summernote" name="value"></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">save</button>
                </form>
                <div class="card-title">
                    Chairman Info View
                </div>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            Top Info
                        </th>
                        <td>

                            {!! $chairman['chairman_top_info'] ?? '' !!}

                        </td>
                    </tr>
                    <tr>
                        <th>
                            Bottom Info
                        </th>
                        <td>

                            {!! $chairman['chairman_bottom_info'] ?? '' !!}

                        </td>

                    </tr>

                </table>
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
