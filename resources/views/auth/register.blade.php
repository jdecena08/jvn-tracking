<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Agency -->
            <div class="mt-4">
                <x-label for="agency" :value="__('Agency')" />

                <x-input id="agency" class="block mt-1 w-full" type="text" name="agency" :value="old('agency')" required autofocus />
            </div>

            <!-- Agency Address-->
            <div class="mt-4">
                <x-label for="agency_address" :value="__('Agency Business Address')" />

                <x-input id="agency_address" class="block mt-1 w-full" type="text" name="agency_address" :value="old('agency_address')" required autofocus />
            </div>

            <!-- Contact Numbers -->
            <div class="mt-4 flex flex-row gap-4">
                <!-- Company Phone Number -->
                <div>
                    <x-label for="company_phone" :value="__('Agency Phone')" />
                    <x-input id="company_phone" class="block mt-1 w-full phone-number" type="text" name="company_phone" :value="old('company_phone')" onkeyup="phoneNumberFormatter(this)"/>
                </div>

                <!-- Personal Phone Number -->
                <div>
                    <x-label for="personal_phone" :value="__('Mobile Number')" />
                    <x-input id="personal_phone" class="block mt-1 w-full phone-number" type="text" name="personal_phone" :value="old('personal_phone')" onkeyup="phoneNumberFormatter(this)"/>
                </div>
            </div>

            <!-- Username -->
            <div class="mt-4">
                <x-label for="username" :value="__('Username')" />
                <x-input id="username" class="block mt-1 w-full"
                    type="text"
                    name="username"
                    :value="old('username')"/>
            </div>

            <div class="mt-4 flex flex-row gap-4">
                <!-- Password -->
                <div>
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required />
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>


