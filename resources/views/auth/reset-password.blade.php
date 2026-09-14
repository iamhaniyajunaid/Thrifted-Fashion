<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" class="form-label" value="{{ __('Email') }}" />
                <div class="input-wrapper">
                     <i class="fa fa-envelope"></i>
                <x-input id="email" class="block mt-1 w-full form-input" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" placeholder="enter your email" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="password" class="form-label" value="{{ __('Password') }}" />
                <div class="input-wrapper">
                     <i class="fa fa-lock"></i>

                <x-input id="password" class="block mt-1 w-full form-input" type="password" name="password" required autocomplete="new-password" placeholder="create a password" />
                </div>
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation"  class="form-label" value="{{ __('Confirm Password') }}" />
                <div class="input-wrapper">
                     <i class="fa fa-lock"></i>

                <x-input id="password_confirmation" class="block mt-1 w-full form-input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter your password" />
</div>
            </div>

            <div class="flex items-center  justify-end mt-4">
                <x-button class="form-btn">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
