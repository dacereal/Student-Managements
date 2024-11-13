<x-guest-layout>
    <div class="flex flex-col items-center justify-center bg-gray-100 dark:bg-gray-900 px-4 py-4">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-4">
            Student Management System
        </h1>

        @if (Route::has('login'))
            <nav class="flex gap-3">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="px-3 py-2 rounded-lg bg-gray-800 text-white text-sm shadow hover:bg-gray-700 transition"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="px-3 py-2 rounded-lg bg-gray-800 text-white text-sm shadow hover:bg-gray-700 transition"
                    >
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="px-3 py-2 rounded-lg bg-gray-800 text-white text-sm shadow hover:bg-gray-700 transition"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</x-guest-layout>
