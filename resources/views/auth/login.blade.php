<x-guest-layout>
    <div class="max-w-md mx-auto mt-12 p-8 bg-gradient-to-b from-gray-50 to-gray-200 dark:from-gray-800 dark:to-gray-900 shadow-xl rounded-lg">
        <h2 class="text-2xl font-bold text-center text-gray-700 dark:text-gray-100 mb-6">
            Welcome Back
        </h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" class="text-gray-600 dark:text-gray-300" />
                <x-text-input id="email" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 focus:ring-2 focus:ring-indigo-400" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" class="text-gray-600 dark:text-gray-300" />
                <x-text-input id="password" class="w-full mt-2 px-4 py-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 focus:ring-2 focus:ring-indigo-400" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300 focus:outline-none focus:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <x-primary-button class="w-full py-3 bg-gray-500 hover:bg-gray-600 text-white rounded-lg shadow-md transition-all duration-150">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

        </form>
    </div>
</x-guest-layout>
