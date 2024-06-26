<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h2 class="font-black font-inter text-green text-2xl mb-4">S'INSCRIRE</h2>


        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Pseudo')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center mt-4">
            <p class="mr-1">Déja inscrit ?</p>
            <a class="underline underline-offset-2 text-green hover:text-greenHover transition ease-in-out duration-150 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green" href="{{ route('login') }}">
                {{ __('Se connecter') }}
            </a>

        </div>

        <x-primary-button class="my-4">
            {{ __("Valider") }}
        </x-primary-button>
    </form>
</x-guest-layout>
