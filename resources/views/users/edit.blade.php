<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del Ahorro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg  px-4">
                {{-- {{ dd($user) }} --}}
                <div class="flex items-center mt-10 mb-6">
                    @foreach ($savings as $saving)
                        <div class="w-full mr-4">
                            <p class="form-control ">{{$saving->user_name->name}}</p>
                        </div>
                        <div class="w-full">
                            <p class="form-control">{{$saving->user_amount->amount_saved}}</p>
                        </div>
                    @endforeach
                </div>
                <div class="bg-indigo-600 py-2 px-4 rounded-lg text-white uppercase font-semibold  mb-4">
                    <p>Registro de meses</p>
                </div>

                @foreach ($months as $month)
                    <div class="flex items-center ml-2">
                        <input type="checkbox" class="ml-2 my-2 p-2 rounded border-indigo-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <p class="ml-2 font-semibold uppercase">
                            {{$month->month}}
                        </p>
                    </div>    
                @endforeach


                
                <div class="flex justify-end">
                    <a href="{{ route('users.index') }}" class="mr-4 my-6">
                        <x-jet-secondary-button >
                            Regresar
                        </x-jet-secondary-button>
                    </a>
                    <a href="#" class="my-6">
                        <x-jet-button >
                            Actualizar
                        </x-jet-button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>