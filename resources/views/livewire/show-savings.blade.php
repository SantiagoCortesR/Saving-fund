<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full">
                    @include('partials.thead')
            
                        <tbody class="bg-white">
                        @foreach ($savings as $saving)
                            <tr class="text-gray-700">

                            <td class="px-4 py-3 border text-xs"> {{$saving->id}}</td>

                            <td class="px-4 py-3 text-sm font-semibold border capitalize">{{$saving->user_name->name}}</td>

                            <td class="px-4 py-3 text-xs border text-center">
                                <span class="text-center px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$saving->user_amount->amount_saved}} </span>
                            </td>

                            <td class="px-4 py-3 text-sm border text-center">{{$saving->pay_amount}}</td>

                            <td class="px-4 py-3 text-sm border">{{$saving->total_save}}</td>

                            <td class="px-4 py-3 text-sm border">
                                <div class="flex justify-around ">
                                {{-- <div wire:click="edit({{$item}})"> --}}
                                <div>
                                    <button class="transition-colors duration-300 transform bg-indigo-700 px-6 py-2 mr-4 font-semibold text-white inline-flex items-center space-x-2 rounded hover:bg-indigo-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                                    </button>
                                </div>
                                {{-- <div  wire:click="$emit('deleteProduct', {{$item->id}})"> --}}
                                <div>
                                    <button class="transition-colors duration-300 transform bg-red-600 px-6 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded hover:bg-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    </button>
                                </div>
                                </div>
                            </tr>

                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
