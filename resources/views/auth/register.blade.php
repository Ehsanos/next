<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
        {{__('AltimMix Company')}}

        <form method="POST" action="{{ route('register') }}">
        @csrf
        {{__('words.have')}}
        <!-- Name -->
            <div>
                <x-label for="name" :value="__('words.name')"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                         autofocus/>
            </div>

            <!-- Email Address -->
            <div class="mt-3">
                <x-label for="email" :value="__('words.email')"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>
            </div>

            <!-- Password -->
            <div class="mt-3">
                <x-label for="password" :value="__('words.password')"/>

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password"/>
            </div>

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-3">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')"/>--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password_confirmation" required/>--}}
{{--            </div>--}}

            {{--phone--}}


            <div class="mt-3">
                <x-label for="phone" :value="__('words.phone')"/>

                <x-input id="phone" class="block mt-1 w-full" type="tel" name="name" required
                         autofocus/>
            </div>

            <!-- Country-->
                <div class="mt-3">
                    <x-input-label for="name" :value="__('words.country')"/>
                    <x-input-select class="block mt-1 w-full" :options="$countries" name="country"/>

                </div>

            <div>{!!htmlFormSnippet()!!}</div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{__('words.have')}}
                    </a>

                    <x-button class="ml-4">
                        {{ __('words.create') }}
                    </x-button>
                </div>


        </form>
    </x-auth-card>
</x-guest-layout>
