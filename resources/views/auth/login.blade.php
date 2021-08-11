<x-guest-layout>
    <div class="flex h-screen bg-blue-50">
    <div class="m-auto ">
        <x-slot name="logo">
            <a href="/">

            </a>
        </x-slot>

        <svg class="w-20 h-20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#1B4145;" d="M512,429.932v34.133c-42.928,0-101.831-38.286-164.068-38.286c-36.671,0-59.654,15.132-73.466,30.254 H256l-22.756-106.018L512,429.932z"/>
            <path style="fill:#609399;" d="M256,350.015v106.018h-18.466c-13.813-15.121-36.796-30.254-73.466-30.254	c-62.236,0-121.139,38.286-164.068,38.286v-34.133L256,350.015z"/>
            <path style="fill:#6FC5D6;" d="M512,86.221v343.711c-42.928,0-101.831-38.286-164.068-38.286c-36.671,0-59.654,15.132-73.466,30.254 H256l-45.511-156.723L256,108.453c0,0,18.591-60.518,91.932-60.518C410.169,47.935,469.072,86.221,512,86.221z"/>
            <path style="fill:#B4E5EA;" d="M256,108.453v313.446h-18.466c-13.813-15.132-36.796-30.254-73.466-30.254 c-62.236,0-121.139,38.286-164.068,38.286V86.221c42.928,0,101.831-38.286,164.068-38.286C237.409,47.935,256,108.453,256,108.453z"/>
            </svg>

        <h1 class="text-center text-4xl text-indigo-900 font-display font-semibold lg:text-left xl:text-5xl xl:text-bold">Zaloguj na konto</h1><br>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <div class="text-sm font-bold text-gray-700 tracking-wide">Email</div>
                <input  id="email" class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div>
                <div class="text-sm font-bold text-gray-700 tracking-wide">Hasło</div>
                <input id="password" class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div>
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Pamiętaj mnie') }}</span>
                </label>
            </div>
<br>
                <div>
                <button class="bg-blue-500 text-gray-100 p-4 w-full rounded-full tracking-wide font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg">
                    {{ __('ZALOGUJ') }}
                </button>
            </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Zapomniałeś hasła?') }}
                        </a>
                    @endif
                </div>
        </form>
    </div>
</div>
</x-guest-layout>
