<nav class="border-b border-gray-200 bg-white">
    <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-6 py-4">
        <div class="flex flex-wrap items-center gap-5">
            <a href="{{ route('home') }}" class="font-bold text-gray-800">
                TSA4 Task Manager
            </a>
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900">
                Today
            </a>
            <a href="{{ route('tasks.index') }}" class="text-gray-600 hover:text-gray-900">
                All Tasks
            </a>
            <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900">
                About
            </a>
        </div>
        <div class="flex flex-wrap items-center gap-4">
            @guest
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">
                    Log in
                </a>
                <a href="{{ route('register') }}"
                   class="rounded bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                    Register
                </a>
            @endguest
            @auth
                <span class="text-gray-700">{{ auth()->user()->username }}</span>
                <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-900">
                    Dashboard
                </a>
                <a href="{{ route('tasks.create') }}" class="text-gray-600 hover:text-gray-900">
                    Add Task
                </a>
                <a href="{{ route('profile.edit') }}" class="text-gray-600 hover:text-gray-900">
                    Account
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-600 hover:text-gray-900">
                        Log out
                    </button>
                </form>
            @endauth
        </div>
    </div>
</nav>