<x-guest-layout>
    <div class="login-img">
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
            <div class="container form-card text-center mt-4">
                <div class="mx-auto max-w-md form-head ">
                    <h1>Welcome Back</h1>
                    <p class="text-gray-600">Login to continue your sustainable fashion journey.</p>
                </div>
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $value }}
        </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex auth-tabs">
                <a href="/login" class="tab-btn">Login</a>
                <a href="/register" class="tab-btn">Register</a>
            </div>
            <div>
                <x-label for="email" class="form-label" value="{{ __('Email') }}" />
                <div class="input-wrapper">
                    <i class="fa fa-envelope"></i>
                    <x-input id="email" class="block mt-2 w-full form-input" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username"
                        placeholder="Enter your email" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="password" class="form-label" value="{{ __('Password') }}" />
                <div class="input-wrapper">
                    <i class="fa fa-lock"></i>
                    <x-input id="password" class="block mt-2 w-full form-input" type="password" name="password" required
                        autocomplete="current-password" placeholder="Enter your password" />
                </div>
            </div>

            <div class="flex mt-4">
                <label for="remember_me" class="form-label flex items-center">
                    <x-checkbox id="remember_me" name="remember" class="form-checkbox" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                <a class="form-forget ms-auto text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
            </div>

            <div class="flex mt-4 ms-0 items-center ">
                <x-button
                    class="ms-4  btn btn-success w-full form-btn h-full py-3 text-white bg-green-500 justify-center rounded-lg ">
                    {{ __('Log in ') }}<i class="fa fa-arrow-right ms-2"></i>
                </x-button>
            </div>
            <div class="flex align-items-center my-3">
                <hr class="flex-grow-1">
                <span class="text-gray-900 fw-bold text-center mx-4"> OR </span>
                <hr class="flex-grow-1">
            </div>
            <div class="flex  items-center">
                <div class="google-wrapper">
                    <img src="{{ asset('resources/images/google-icon.png') }}" class="google-icon" alt="">
                </div>
                <a href="/auth/google"
                    class=" btn btn--outline-dark w-full google-btn h-75 ms-2  text-center rounded-lg ">Login
                    With Google</a>



            </div>
            <a href="/register" class="text-center fw-bold form-reg "><span class="fw-light"> Dont have an account?
                </span>Register</a></p>

        </form>
    </x-authentication-card>
</div>
</x-guest-layout>