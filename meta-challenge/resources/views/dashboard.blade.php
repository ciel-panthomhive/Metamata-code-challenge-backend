<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <div class="container">
                                <div class="card mt-2">
                                    <div class="card-header text">
                                        <th>
                                            <tr>
                                                <td>
                                                    Welcome
                                                </td>
                                                <br>
                                                <br>
                                            </tr>
                                        </th>
                                    </div>

                                    <div class="card-body">
                                        <tr>
                                            <td>
                                                {{ Auth::user()->name }}
                                            </td>
                                        </tr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
