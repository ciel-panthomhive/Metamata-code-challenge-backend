<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Story') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="card mt-2">
                        <div class="card-header text">
                            <th>
                                <tr>

                                    {{-- @dd($users) --}}
                                <tr>
                                    <td>{{ Auth::user()->name }}</td>
                                    <br>
                                    <br>
                                </tr>
                            </th>
                        </div>

                        <form method="POST" action="{{ route('story.add') }}">
                            @csrf

                            <div class="mt-4">
                                <x-jet-label for="stories" value="{{ __('Stories') }}" />
                                <x-jet-input id="stories" class="block mt-1 w-full" type="text" name="stories"
                                    replacement="Share your story" />
                            </div>

                            <div class="mt-4">
                                <x-jet-button class="ml-4">
                                    {{ __('Share') }}
                                </x-jet-button>
                                <div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @foreach ($story as $s)
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <div class="container">
                                <div class="card mt-2">
                                    <div class="card-header text">
                                        <th>
                                            <tr>

                                                {{-- @dd($users) --}}
                                            <tr>

                                                <td>
                                                    @isset($s->user_id->name)
                                                        {{ $s->user_id }}
                                                    @endisset
                                                </td>
                                                <br>
                                                <br>
                                            </tr>
                                        </th>
                                    </div>


                                    <div class="card-body">
                                        <tr>
                                            <td>
                                                @isset($s->stories)
                                                    {{ $s->stories }}
                                                @endisset
                                            </td>
                                        </tr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
</x-app-layout>
