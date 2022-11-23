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
    color: white;
}

.btnlogin {
    display: flex;
}

.box h1 {
    margin: auto;
    font-size: 4em;
    font-weight: 700;
    color: white;
}
/* .underline{
    margin-left:40px;
} */
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


                <form method="POST" action="{{ route('login') }}" id="login">
                    <h1>LOGIN</h1>

                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                    @csrf

                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" style="color:white;font-size:1.2em;" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" style="color:white;font-size:1.2em;" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>

                    <div class="flex mt-4 mb-4 justify-between" style="color:white;">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-white-600">{{ __('Remember me') }}</span>
                        </label>
                         <div>
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-white-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                        </div>
                    </div>
                   
                    <div class="btnlogin">
                        <x-jet-button style="margin:auto;background-color:darkcyan;padding:.7em 6em">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                    <div class="mt-3" style="text-align:center;color:white;">
                        <a class="underline text-m text-white-600 hover:text-gray-900" href="{{ route('register') }}">
                            {{ __('Register') }} 
                        </a>
                    </div>
                    
                </form>
            </div>
        </div>

    </div>


</x-guest-layout>