<x-skillauth>
    <x-slot name="left">
        <div class="register-login-left">
            <h2 class="register-login-title">Already Have an Account ?</h2>
            <p class="register-login-subtitle">Please login to your account</p>
            <a href="#" class="register-login-btn">Login</a>
        </div>
    </x-slot>
    <div class="register-login-right">
        <h2 class="register-signup-title">Sign Up</h2>
        <p class="register-signup-subtitle">Enter your details to create an account</p>
        <form class="register-signup-form" method="POST" action="{{ route('register') }}">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger mb-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @php
                $role = \App\Models\Role::where('name', 'student')->first();
            @endphp

            @if ($role)
                <input type="hidden" name="role_id" value="{{ $role->id }}">
            @endif

            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-user"></i></span>
                <input type="text" name="name" placeholder="Enter your full name" value="{{ old('name') }}"
                    class="@error('name') is-invalid @enderror" required>
                @error('name')
                    <span class="text-danger small d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-envelope"></i></span>
                <input type="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}"
                    class="@error('email') is-invalid @enderror" required>
                @error('email')
                    <span class="text-danger small d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-mobile-alt"></i></span>
                <input type="text" name="mobile" placeholder="Enter Your Mobile" value="{{ old('mobile') }}"
                    required>
                {{-- No validation yet for mobile, but you can add one in your controller --}}
            </div>

            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-lock"></i></span>
                <input type="password" name="password" placeholder="Password"
                    class="@error('password') is-invalid @enderror" required>
                @error('password')
                    <span class="text-danger small d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-lock"></i></span>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <div class="mb-3 mt-2">
                <div class="form-check">
                    <input class="form-check-input" name="terms" type="checkbox" id="acceptTerms" required>
                    <label class="form-check-label" for="acceptTerms">
                        I agree and accept the <a href="#">terms and conditions</a>
                    </label>
                </div>
            </div>

            <button type="submit" class="register-signup-btn">Sign Up</button>
        </form>

    </div>
</x-skillauth>
