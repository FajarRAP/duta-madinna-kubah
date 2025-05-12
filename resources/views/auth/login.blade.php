<x-guest-layout>
    <form method="POST" action="{{ route('login.post') }}" class="flex flex-col gap-4">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" class="block mt-1 w-full" :value="old('email')"
                :hasError="$errors->get('email')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" :hasError="$errors->get('password')" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <x-primary-button class="self-end">
            {{ __('Log in') }}
        </x-primary-button>
    </form>
</x-guest-layout>
