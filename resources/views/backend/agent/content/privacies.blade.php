<x-app>
    <x-slot name="title">Wecome Privacies</x-slot>

    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Privacy Background Update
                </div>
                <img src="{{ isset($privacy['background_image']) ? asset('storage/' . $privacy['background_image']) : '' }}" class="img-fluid"
                    style="max-height: 400px;">
                <form action="{{ route('agent.content.privacy.update.image') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Background Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                </form>

            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Privacy Update
                </div>

                <form action="{{ route('agent.content.privacy.update.content') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $privacy['title'] ?? '' }}">
                    </div>
                    <div class="mb-3">
                        <label for="">Discription</label>
                        <textarea name="discription" class="form-control" rows="8">{{ $privacy['discription'] ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                </form>

            </div>
        </div>
    </section>
</x-app>
