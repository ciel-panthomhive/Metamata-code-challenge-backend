@section('js')
    <script src="{{ asset('js/story.js') }}"></script>
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Story') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('story.add') }}">
        @csrf
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
                            <div class="mt-2">
                                <x-jet-label for="user_id" />
                                <x-jet-input id="user_id" class="block mt-1 w-full" type="hidden" name="user_id"
                                    readonly value="{{ Auth::user()->id }}" />
                            </div>
                            <div class="mt-2">
                                <x-jet-label for="stories" />
                                <x-jet-input id="stories" class="block mt-1 w-full" type="text" name="stories"
                                    placeholder="Tell your story" />
                            </div>

                            <div class="mt-4">
                                <x-jet-button class="ml-4">
                                    {{ __('Share') }}
                                </x-jet-button>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    @foreach ($story as $s)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container">
                        <div class="card mt-2">
                            <div class="card-header text">
                                <th>
                                    <tr>
                                        <td>
                                            @isset($s->users)
                                                {{ $s->users->name }}
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
                                    <td>

                                        {{-- <x-jet-label for="user_id" />
                                        <x-jet-input id="user_id" class="block mt-1 w-full" type="hidden" name="user_id"
                                            readonly value="{{ Auth::user()->id }}" />

                                        <x-jet-label for="story_id" />
                                        <x-jet-input id="story_id" class="block mt-1 w-full" type="hidden" name="story_id"
                                            readonly value='{{ $s->story->id }}' /> --}}

                                        <a class="tombol-hati" href="javascript:;"
                                            class="flex justify-center mt-4 sm:items-center sm:justify-between">

                                            <div class="text-center text-sm text-gray-500 sm:text-left">
                                                <div class="flex items-center">
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                        class="-mt-px w-5 h-5 icon-hati ">
                                                        <path
                                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                        </path>
                                                    </svg>

                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </form>
</x-app-layout>
