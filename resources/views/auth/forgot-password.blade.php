<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 font-sans ">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" class="form-label" value="{{ __('Email') }}" />
                <div class="input-wrapper">
                    <i class="fa fa-envelope"></i>
                <x-input id="email" class="block mt-2 w-full form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email" />
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="form-btn ">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
