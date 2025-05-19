<x-skillauth>
    <x-slot name="left">
        <div class="register-login-left">
            <h2 class="register-login-title">New Here ?</h2>
            <p class="register-login-subtitle">Please Register to join a course in SSDI</p>
            <a href="#" class="register-login-btn">Sign Up</a>
        </div>
    </x-slot>
    <div class="register-login-right">
        <h2 class="register-signup-title">Login</h2>
        <p class="register-signup-subtitle">Enter your credential to login</p>
        <form class="register-signup-form" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-envelope"></i></span>
                <input type="email" placeholder="Enter Your Email" name="email" value="{{ old('email') }}"
                    class="@error('email') is-invalid @enderror" required>
                @error('email')
                    <span class="text-danger small"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-lock"></i></span>
                <input type="password" placeholder="Password" name="password"
                    class="@error('password') is-invalid @enderror" required>
                @error('password')
                    <span class="text-danger small"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <button type="submit" class="register-signup-btn">Login</button>
        </form>

        {{-- <a href="" class="text-decoration-none text-dark">
            <p class="register-signup-subtitle mt-3">Forgot Password ?</p>
        </a> --}}
    </div>
</x-skillauth>
