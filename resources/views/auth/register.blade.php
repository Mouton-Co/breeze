<x-guest-layout>
    <div class="flex flex-col items-center">

        <h1 class="mt-3 rounded-sm text-4xl font-semibold text-gray-800">
            {{ __('Welcome to breeze') }}
        </h1>
        <h2 class="mt-3 text-xl font-semibold text-slate-400">
            {{ __('Create a new account') }}
        </h2>

        <form class="mt-12 flex w-full max-w-md flex-col border border-zinc-200 bg-white px-8 py-6 shadow"
            method="POST" action="{{ route('register') }}">

            @csrf

            <label class="w-full text-sm font-extrabold text-slate-900" for="name">
                {{ __('Name') }}
            </label>
            <x-input.text class="mt-2 w-full" name="name" type="text" required autocomplete="name" />

            <label class="mt-4 w-full text-sm font-extrabold text-slate-900" for="email">
                {{ __('Email') }}
            </label>
            <x-input.text class="mt-2 w-full" name="email" type="email" required autocomplete="username" />

            <label class="mt-4 w-full text-sm font-extrabold text-slate-900" for="password">
                {{ __('Password') }}
            </label>
            <x-input.text class="mt-2 w-full" name="password" type="password" required
                autocomplete="new-password" />

            <label class="mt-4 w-full text-sm font-extrabold text-slate-900" for="password_confirmation">
                {{ __('Confirm Password') }}
            </label>
            <x-input.text class="mt-2 w-full" name="password_confirmation" type="password" required
                autocomplete="new-password" />

            <x-button.primary class="mt-6" type="submit">
                {{ __('Register') }}
            </x-button.primary>

            <div class="mt-4 flex items-center gap-2">
                <div class="h-[1px] w-full bg-gray-300"></div>
                <span class="text-nowrap text-xs text-gray-400">
                    {{ __('OR LOGIN') }}
                </span>
                <div class="h-[1px] w-full bg-gray-300"></div>
            </div>

        </form>

        <div class="mt-4 flex w-full items-center justify-center gap-1">
            <a class="text-xs text-blue-400 hover:text-blue-500" href="{{ route('login') }}">
                {{ __('Already have an account?') }}
            </a>
        </div>

    </div>
</x-guest-layout>
