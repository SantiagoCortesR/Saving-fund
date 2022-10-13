<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Ahorradores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6">
                    <x-jet-input type="text" class="w-full" placeholder="Busca un usuario" wire:model="search"/>
                </div>

                @if ($users->count())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
                        @foreach ($users as $user)
                            <div class="flex flex-col p-4 bg-white rounded-xl shadow-lg border-l-4 border-indigo-500 hover:border-indigo-600 items-center transition-all duration-300 hover:transition-all hover:duration-300 hover:drop-shadow-xl">
                                
                                {{-- Profile Photo --}}
                                <div class="mt-6">
                                    @if ($user->profile_photo_path)
                                        <img class="rounded-full w-24 h-24 object-cover" src="/storage/{{$user->profile_photo_path }}" alt="{{ $user->name }}" />
                                    @else
                                        <img class="w-24 h-24 rounded-full" src="{{$user->profile_photo_url }}" alt="{{ $user->name }}" /> 
                                    @endif
                                </div>

                                {{-- Information of user --}}
                                <div class="grid grid-cols-1 w-full cursor-default my-6">
                                    <div class="transition-all duration-500 hover:transition-all hover:duration-500 hover:scale-105 mx-auto text-center">
                                        <h3 class="text-lg font-semibold text-gray-700">{{$user->name}}</h3>
                                        <p class="text-sm mb-4 text-gray-500 text-ellipsis overflow-hidden">{{$user->email}}</p>
                                        <div class="flex">
                                            <div class="mr-3">
                                                <p class="text-md font-semibold text-gray-700 text-ellipsis overflow-hidden">Identificación</p>
                                                <p class="text-sm mb-2 text-gray-500 text-ellipsis overflow-hidden">{{$user->amount_saved}}</p>
                                            </div>
                                            <div>
                                                <p class="text-md font-semibold text-ellipsis text-gray-700 overflow-hidden">Monto Ahorrado</p>
                                                <p class="text-sm mb-2 text-ellipsis text-gray-500 overflow-hidden">{{$user->amount_saved}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Button to delete user --}}
                                <div class="flex justify-center w-full mb-6">
                                    <a href="{{ route('users.edit', $user) }}" class="bg-indigo-600 text-white p-1 px-4 font-semibold rounded-lg hover:bg-indigo-700 transition-all duration-300 hover:transition-all hover:duration-300">
                                        Ver Ahorro
                                    </a>
                                    {{-- <button wire:click="" class="bg-red-500 p-1 rounded-full mb-1 hover:bg-red-600 transition-all duration-300 hover:transition-all hover:duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-white">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button> --}}
                                </div>
                                
                            </div>
                        @endforeach
                    </div>
                    <div class="px-6 my-6">
                        {{$users->links()}}
                    </div>
                @else
                    <div class="w-full text-center">
                        <p class="mb-6 mt-2 font-semibold text-indigo-600">No existen usuarios con esos criterios de busqueda</p>
                    </div>                        
                @endif
                
            </div>
        </div>
    </div>
    

    <x-jet-dialog-modal wire:model="open_show">
        <x-slot name="title">
            Ahorro Usuario 
        </x-slot>

        <x-slot name="content">
            <p wire:model="user.name" value="user.name"></p>
            <input type="text" wire:model="user.name">
        </x-slot>

        <x-slot name="footer">
            <x-jet-button wire:click="$set('open_show', false)">
                Cancelar
            </x-jet-button>
        </x-slot>
        
    </x-jet-dialog-modal>
    
        
</div>
