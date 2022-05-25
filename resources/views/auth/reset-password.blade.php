<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <div class="logo_">
                    <h4><i class="fa fa-calendar"></i>|Doodle</h4>
                </div>
            </a>
        </x-slot>


        <style>
            .logo_{
                color:#F64C72;
                font-family: 'Bebas Neue';
                /*font-family: 'Source Sans Pro', sans-serif;*/
                letter-spacing: 11px;
                font-size: 4rem;
                /*margin: 0.5rem;*/
                align-content: center;
                alignment: center;
                display: flex;
                justify-content: center;
                align-items: center;
                max-height: 11rem;
                /*border: 10px;*/
            }
        </style>

        <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
