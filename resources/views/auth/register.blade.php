<x-guest-layout>
    <div class="max-w-lg mx-auto mt-12 p-8 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 shadow-xl rounded-2xl">
        <h2 class="text-3xl font-bold text-center text-gray-700 dark:text-gray-100 mb-8">
            Create Your Account
        </h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-6">
                <x-input-label for="name" :value="__('Name')" class="text-gray-600 dark:text-gray-300"/>
                <x-text-input id="name" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 focus:ring-2 focus:ring-indigo-400" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
            </div>

            <!-- Email Address -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Email')" class="text-gray-600 dark:text-gray-300"/>
                <x-text-input id="email" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 focus:ring-2 focus:ring-indigo-400" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" class="text-gray-600 dark:text-gray-300"/>
                <x-text-input id="password" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 focus:ring-2 focus:ring-indigo-400" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-600 dark:text-gray-300"/>
                <x-text-input id="password_confirmation" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 focus:ring-2 focus:ring-indigo-400" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-between mt-8">
                <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300 focus:outline-none focus:underline"
                   href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-primary-button class="px-6 py-3 rounded-lg bg-gray-500 text-white hover:bg-gray-600 dark:bg-gray-600 dark:hover:bg-gray-700 transition-all shadow-lg">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
