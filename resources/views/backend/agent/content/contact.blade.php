<x-app>
    <x-slot name="title">Contact</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    Contact Messages
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>subject</th>
                        <th>Messages</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->message}}</td>
                            <td>
                                <form action="{{ route('agent.group.contact.delete', $contact) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    {{ $contacts->links() }}
                </table>
            </div>
        </div>
    </section>
</x-app>
