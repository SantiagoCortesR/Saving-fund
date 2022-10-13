<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}

    {{-- <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url({{asset('/storage/images/383.png')}})">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">Brand</h2>
                        
                        <p class="max-w-xl mt-3 text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In autem ipsa, nulla laboriosam dolores, repellendus perferendis libero suscipit nam temporibus molestiae</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">Brand</h2>
                        
                        <p class="mt-3 text-gray-500 dark:text-gray-300">Sign in to access your account</p>
                    </div>

                    <div class="mt-8">
                        <x-jet-validation-errors class="mb-4" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Correo Electrónico</label>
                                <input type="email" name="email" id="email" placeholder="example@example.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-gray-600 dark:text-gray-200">Contraseña</label>
                                    <a href="{{ route('password.request') }}" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">¿Se te olvidó tu contraseña?</a>
                                </div>

                                <input type="password" name="password" id="password" placeholder="Tu Contraseña" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <button
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    Iniciar sesión
                                </button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">¿Aún no tienes una cuenta? <a href="{{ route('register') }}" class="text-blue-500 focus:outline-none focus:underline hover:underline">Registrarse</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="min-w-screen min-h-screen bg-gradient-to-r from-indigo-500 to-indigo-900 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
            <div class="md:flex w-full">


                {{-- Image --}}
                <div class="hidden bg-cover bg-no-repeat bg-center md:block w-1/2 bg-indigo-500 py-10 px-10" style="background-image: url({{asset('/storage/images/saving.jpg')}})">
                </div>

                {{-- Form to Register --}}
                <div class="w-full md:w-1/2 py-10 px-5 md:px-10">

                    {{-- Title and description --}}
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-indigo-600">REGISTRARSE</h1>
                        <p>Ingrese su informacion para registrarse</p>
                    </div>

                    {{-- Form to register --}}
                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            {{-- Inputs w-full email--}}
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="email" class="text-xs font-semibold px-1">Correo Electrónico</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg></i>
                                        </div>
                                        <input type="email" name="email" required class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="johnsmith@example.com" :value="old('email')">
                                    </div>
                                </div>
                            </div>

                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="password" class="text-xs font-semibold px-1">Contraseña</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-account-outline text-gray-400 text-lg"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg></i>
                                        </div>
                                        <input type="password" name="password" required class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="*********" :value="old('password')">
                                    </div>
                                    <a href="{{ route('password.request') }}" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">¿Se te olvidó tu contraseña?</a>
                                </div>
                            </div>

                            {{-- Terms and Conditions --}}
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            {{-- Button to submit form --}}
                            <div class="flex -mx-3 mt-5">
                                <div class="w-full px-3 mb-3">
                                    <button type="submit" class="block w-full max-w-xs mx-auto bg-indigo-600 transition-all duration-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">INICIAR SESIÓN</button>
                                </div>
                            </div>

                            {{-- Register? href to login --}}
                            <p class="text-sm text-center text-gray-400">¿Aún no tienes una cuenta? <a href="{{ route('register') }}" class="text-indigo-500 focus:outline-none focus:underline hover:underline">Registrarse</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
