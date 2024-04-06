<x-guest-layout>
    <div class="flex flex-col items-center">

        <h1 class="mt-3 rounded-sm text-4xl font-semibold text-gray-800">
            {{ __('Welcome back') }}
        </h1>
        <h2 class="mt-3 text-xl font-semibold text-slate-400">
            {{ __('Log in to your breeze account') }}
        </h2>

        <form class="mt-12 flex w-full max-w-md flex-col border border-zinc-200 bg-white px-8 py-6 shadow"
            method="POST" action="{{ route('login') }}">

            @csrf

            <label class="w-full text-sm font-extrabold text-slate-900" for="email">
                {{ __('Email') }}
            </label>
            <x-input.text class="mt-2 w-full" name="email" type="email" required autocomplete="username" />

            <label class="mt-4 w-full text-sm font-extrabold text-slate-900" for="password">
                {{ __('Password') }}
            </label>
            <x-input.text class="mt-2 w-full" name="password" type="password" required
                autocomplete="current-password" />

            <div class="mt-4 block">
                <label class="inline-flex items-center" for="remember_me">
                    <x-input.checkbox name="remember" />
                    <span class="ms-2 text-sm font-semibold text-slate-800">
                        {{ __('Remember me') }}
                    </span>
                </label>
            </div>

            <x-button.primary class="mt-4" type="submit">
                {{ __('Log in') }}
            </x-button.primary>

            <div class="mt-4 flex items-center gap-2">
                <div class="h-[1px] w-full bg-gray-300"></div>
                <span class="text-nowrap text-xs text-gray-400">
                    {{ __('OR REGISTER NOW') }}
                </span>
                <div class="h-[1px] w-full bg-gray-300"></div>
            </div>

        </form>

        <div class="mt-4 flex w-full items-center justify-center gap-1">
            <a class="text-xs text-blue-400 hover:text-blue-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            <span class="text-sm text-gray-300">{{ __('|') }}</span>
            <a class="text-xs text-blue-400 hover:text-blue-500" href="{{ route('register') }}">
                {{ __('Register new account') }}
            </a>
        </div>

    </div>
</x-guest-layout>
