<div>
    <div>
        <x-jet-application-logo class="block h-8 w-auto" />
    </div>

    <div>
        {{-- The Master doesn't talk, he acts. --}}
        <div class="flex flex-col">
            <div class="flex flex-col items-center w-full mx-auto rounded-br-3xl overflow-y-auto">
                <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <div class="mt-6 mb-20">
                        <img class="w-40" src="/storage/brand/ClaroLogo.png" alt="" srcset="">
                    </div>
                </a>
                @if (Auth::user()->profile_photo_path)
                    <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <img class="h-24 w-24 rounded-full object-cover mx-auto" src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
                    </a>
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-xl text-white font-semibold text-center mt-4 ">{{ Auth::user()->username }}</h1>
                        {{-- <span class="text-sm text-gray-200 font-semibold text-center ">
                            @if (Auth::user()->getRoleNames()->count())
                                @foreach (Auth::user()->getRoleNames() as $rol)
                                    {{ $rol }}
                                @endforeach
                            @else
                            <span>Sin Rol</span>
                            @endif
                        </span> --}}
                    </div>
                @else
                    <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <img class="h-28 w-28 rounded-full object-cover" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
                    </a>
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-xl text-white font-semibold text-center mt-4 ">{{ Auth::user()->username }}</h1>
                        {{-- <span class="text-sm text-gray-200 font-semibold text-center">
                            @if (Auth::user()->getRoleNames()->count())
                                @foreach (Auth::user()->getRoleNames() as $rol)
                                    {{ $rol }}
                                @endforeach
                            @else
                            <span>Sin Rol</span>
                            @endif
                        </span> --}}
                    </div>
                @endif
            </div>
        
            <div class="flex flex-col items-start mt-20">
                    
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                    </svg>
                    {{ __('Dashboard') }}
                </x-jet-nav-link> 
        
                {{-- @can('users.index')
                <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.*')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                    {{ __('Usuarios') }}
                </x-jet-nav-link>
                @endcan
                
                @can('products')
                <x-jet-nav-link href="{{ route('products') }}" :active="request()->routeIs('products')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                    {{ __('Productos') }}
                </x-jet-nav-link>
                @endcan
        
                @can('tasks')
                <x-jet-nav-link href="{{ route('tasks') }}" :active="request()->routeIs('tasks')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                    {{ __('Tareas') }}
                </x-jet-nav-link>
                @endcan --}}
        
            </div>
        </div>
    </div>
    
</div>
