<x-guest-layout>
    <div class="reg-img">

    <x-authentication-card>
        <x-slot name="logo">
             <img src="{{asset('assets-admin/images/logo.png')}}" alt="thrift fashion" class="login-logo mt-5">
            <div class="container form-card text-center mt-4">
                <div class="mx-auto max-w-md form-head ">
                    <h1>Create Your Account</h1>
                    <p class="text-gray-600">Be a part of Thrifted Fashion and get access to exclusive styles , offers ,
                        and updates. </p>
                </div>
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="flex auth-tabs">
                <a href="/login" class="tab-btn">Login</a>
                <a href="/register" class="tab-btn">Register</a>
            </div>
            <div>
                <x-label for="name" class="form-label" value="{{ __('Name') }}" />
                <div class="input-wrapper">
                    <i class="fa fa-user"></i>
                    <x-input id="name" class="block mt-1 w-full form-input" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" placeholder="Enter your name" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="email" class="form-label" value="{{ __('Email') }}" />
                <div class="input-wrapper">
                    <i class="fa fa-envelope"></i>
                    <x-input id="email" class="block mt-1 w-full form-input" type="email" name="email"
                        :value="old('email')" required autocomplete="username" placeholder="Enter your email" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="password" class="form-label" value="{{ __('Password') }}" />
                <div class="input-wrapper">
                    <i class="fa fa-lock"></i>
                    <x-input id="password" class="block mt-1 w-full form-input" type="password" name="password" required
                        autocomplete="new-password" placeholder="Create a password" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation"  class="form-label" value="{{ __('Confirm Password') }}" />
                <div class="input-wrapper">
                    <i class="fa fa-lock"></i>
                    <x-input id="password_confirmation" class="block mt-1 w-full form-input" type="password"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Confirm your password" />
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />

                        <div class="ms-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms
                                of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy
                                Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <div class="flex mt-4  items-center ">
                <x-button
                    class="ms-4  btn btn-success w-full form-btn h-full py-3 text-white bg-green-500 justify-center rounded-lg ">
                    {{ __('Create Account') }}<i class="fa fa-arrow-right ms-2"></i>
                </x-button>
            </div>

            <a href="/login" class="text-center fw-bold form-reg "><span class="fw-light"> Already have an account?
                </span>Log in</a></p>
        </form>
    </x-authentication-card>
</div>
</x-guest-layout>