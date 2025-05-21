<x-student>
    <div class="g-1">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold">Update Profile</h5>
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('profile.update-profile') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                            Image</label>
                        <div class="col-md-8 col-lg-9">
                            <img src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : asset('assets/img/no-profile.png') }}"
                                alt="Profile" class="img-fluid" style="height: 100px; width: auto;">
                            <div class="input-group mb-3 mt-2">
                                <div class="col-md-6">
                                    <input type="file" class="form-control" id="profileImage" name="avatar">
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('profile.removeAvatar') }}" class="btn btn-danger ms-3">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 col-lg-3 col-form-label">First Name</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="name" type="text" class="form-control"
                                value="{{ auth()->user()->name }}">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-md-4 col-lg-3 col-form-label">Phone</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="phone" type="text" class="form-control"
                                value="{{ auth()->user()->phone }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="email" type="email" class="form-control"
                                value="{{ auth()->user()->email }}" readonly>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="g-1 mt-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold">Change Password</h5>
               

                <form action="{{ route('profile.update-password') }}" method="POST">
                    @method('POST')
                    @csrf

                    <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                            Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="current_password" type="password" class="form-control" id="currentPassword">
                            @error('current_password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                            Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="new_password" type="password" class="form-control" id="newPassword">
                            @error('new_password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                            Password</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="new_password_confirmation" type="password" class="form-control"
                                id="renewPassword">
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-student>
