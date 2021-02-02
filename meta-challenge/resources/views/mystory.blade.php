@section('js')
    <script src="{{ asset('js/users.js') }}"></script>
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MyStory') }}
        </h2>
    </x-slot>


    <form>
        @foreach ($users as $u)
            {{-- @dd($users) --}}
            @csrf
            {{ method_field('PUT') }}
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="container">
                            <div class="card mt-2">
                                <div class="card-header text">
                                    <th>
                                        <tr>
                                            <td>
                                                {{-- @isset($users->name) --}}
                                                {{ $users->name }}
                                                {{-- @endisset --}}
                                            </td>
                                            <br>
                                            <br>
                                        </tr>
                                    </th>
                                </div>
                                <div class="card-body">
                                    <tr>
                                        <td>
                                            {{-- <td>
                                                {{ $users->story->stories }}
                                                @isset($p->person->middlename)
                                                    {{ $p->person->middlename }}
                                                @endisset
                                                {{ $p->person->lastname }}
                                            </td> --}}
                                            {{-- {{ $s[0]->story->stories }} --}}
                                            @isset($u->story)
                                                {{ $u->story->stories }}
                                            @endisset
                                        </td>
                                        <td>
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
    {{-- @dd($users) --}}
</x-app-layout>
