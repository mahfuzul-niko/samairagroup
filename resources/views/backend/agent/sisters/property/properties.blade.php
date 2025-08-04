<x-app>
    <x-slot name="title"> Properties</x-slot>
    <section class="properties">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Properties
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($properties as $property)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $property->image ? Storage::url($property->image) : asset('assets/img/no-profile.png') }}"
                                    alt="Property Image" class="img-fluid" style="height: 100px; object-fit: cover;">
                            </td>
                            <td>{{ $property->title }}</td>
                            <td>{{ $property->category->title ?? '' }}</td>
                            <td>{{ $property->price }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm me-1"
                                    href="{{ route('agent.jphomes.edit.property', $property) }}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form class="d-inline" action="{{ route('agent.jphomes.delete.property', $property) }}"
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
                {{ $properties->links() }}
            </div>
        </div>
    </section>

</x-app>
