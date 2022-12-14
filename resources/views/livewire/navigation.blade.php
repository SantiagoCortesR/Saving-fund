<nav class="bg-white border-2 border-b-indigo-500" x-data="{open : false}">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-20 items-center justify-between">

            <!-- Mobile menu button-->
            <div x-on:click="open=true" class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-indigo-400 hover:bg-indigo-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                    Icon when menu is closed.
        
                    Heroicon name: outline/bars-3
        
                    Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                    Icon when menu is open.
        
                    Heroicon name: outline/x-mark
        
                    Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- Brand and links of menu --}}
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                {{-- Brand --}}
                <div class="flex flex-shrink-0 items-center">
                    <a href="{{ route('dashboard') }}">
                        <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </a>
                    <a href="{{ route('dashboard') }}">
                        <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </a>
                </div>

                {{-- Menu --}}
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.*')">
                        {{ __('Lista de Ahorradores') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('savings') }}" :active="request()->routeIs('savings')">
                        {{ __('Ahorros') }}
                    </x-jet-nav-link>
                    {{-- <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a> --}}
                    </div>
                </div>
            </div>

            {{-- Profile photo --}}
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
    
                <!-- Profile dropdown -->
                <div class="relative ml-3" x-data="{ open:false }">
                    <div>
                        <button x-on:click="open= true" type="button" class="flex rounded-full text-sm focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-700" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            @if (Auth::user()->profile_photo_path)
                                {{-- <img class="h-12 w-12 rounded-full object-cover mx-auto" src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" /> --}}
                                <div class=" flex items-center md:pl-2 md:border-2 md:border-indigo-300 md:focus:border-indigo-700 rounded-full active:vorder">
                                    <div class="md:block hidden text-left text-indigo-700 font-semibold mx-4 text-md">
                                        <span class="">Hola {{ Auth::user()->username }}!</span>
                                    </div>
                                    <img class="h-12 w-12 rounded-full object-cover" src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
                                </div>
                            @else
                                <div class=" flex items-center md:pl-2 md:border-2 md:border-indigo-300 md:focus:border-indigo-700 rounded-full">
                                    <div class="md:block hidden text-left text-indigo-700 font-semibold mx-4 text-md">
                                        <span class="">Hola {{ Auth::user()->username }}!</span>
                                    </div>
                                    <img class="h-12 w-12 rounded-full object-cover" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
                                </div>
                            @endif
                        </button>
                    </div>
    
                    <div x-show="open" x-on:click.away="open=false" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Tu perfil</a>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Cerrar Sesi??n</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="w-full">
                {{ __('Dashboard') }}
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.*')" class="w-full">
                {{ __('Lista de Ahorradores') }}
            </x-jet-nav-link>
        </div>
    </div>
  </nav>
  