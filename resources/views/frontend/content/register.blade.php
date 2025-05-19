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
        <form class="register-signup-form">
            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-user"></i></span>
                <input type="text" placeholder="Enter your full name" required>
            </div>
            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-envelope"></i></span>
                <input type="email" placeholder="Enter Your Email" required>
            </div>
            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-mobile-alt"></i></span>
                <input type="text" placeholder="Enter Your Mobile" required>
            </div>
            <div class="register-input-group">
                <span class="register-input-icon"><i class="fa fa-lock"></i></span>
                <input type="password" placeholder="Password" required>
            </div>
            <button type="submit" class="register-signup-btn">Sign Up</button>
        </form>
    </div>
</x-skillauth>
