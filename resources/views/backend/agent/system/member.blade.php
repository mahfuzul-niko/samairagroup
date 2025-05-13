<x-app>
    <x-slot name="title">System Member</x-slot>
    
    <section class="system member form">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Add System Member
                </div>
                <form action="{{route('agent.system.store.member')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                    </div>
                
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                
                    <div class="form-group mb-3">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                
                    <div class="form-group mb-3">
                        <label for="role">Role</label>
                        <select class="form-select" name="role" id="role" required>
                            <option value="" selected>Select Role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
                
            </div>
        </div>
    </section>
    <section class="system member list mt-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    System Members List
                </div>
                <table class="table table-bordered table-striped table-hover" id="system-member-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->role->name }}</td>
                                <td>
                                   <form action="{{ route('agent.system.destroy.member', $member->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this member?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
</form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>


</x-app>