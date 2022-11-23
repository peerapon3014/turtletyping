<style>
.body {
    display: flex;
    height: 100vh;
    background-color: #1C242F;
}

.container {
    box-sizing: border-box;
    display: flex;
    margin: auto;
    height: 80%;
    width: 80%;
    background-color: #262E3B;
    border-radius: 2em;
    padding: 3em;
}

.box {
    display: flex;
    margin: auto;
    width: 50%;
    height: 65vh;
    /* border:1px solid white; */
}

#login {
    margin: auto;
    background-color: #4C5F7A;
    height: 55vh;
    width: 90%;
    padding: 2em 8em;
    border-radius: 2em;
    box-shadow: 10px 10px 10px #16213E;
}

#login h1 {
    text-align: center;
    font-size: 3em;
    font-weight: 700;
}

.btnlogin {
    display: flex;
}

.box h1 {
    margin: auto;
    font-size: 4em;
    font-weight: 700;
}
form h1{
    color:white;
}
.box h1{
    color:white;
}
</style>

<x-guest-layout>
    <div class="body">
        <div class="container">
            <div class="box">
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>
                <h1>TurtleTyping</h1>
            </div>
            <div class="box">
                <form method="POST" action="{{ route('register') }}" id="login">

                    <h1>REGISER</h1>

                    <x-jet-validation-errors class="mb-4" />

                    @csrf

                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" style="color:white;font-size:1.2em;" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                            required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" style="color:white;font-size:1.2em;" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" style="color:white;font-size:1.2em;" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" style="color:white;font-size:1.2em;" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                        class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                                        Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                        class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                        Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-white-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button class="ml-4" style="background-color:darkcyan;padding:.7em 6em">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>




        </div>

    </div>


</x-guest-layout>