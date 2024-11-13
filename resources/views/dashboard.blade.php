<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-xl overflow-hidden">
                <div class="p-8">
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-4">
                        {{ __("You're logged in!") }}
                    </h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300">
                        Welcome to your personalized dashboard. Enjoy exploring the features!
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
