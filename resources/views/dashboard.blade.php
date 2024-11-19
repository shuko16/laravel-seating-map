<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seats') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($seats as $seat)
                        <div class="mt-3">
                            @if ($seat->user_id)
                                <div class="flex">
                                    <x-danger-button>seated</x-danger-button>
                                    <label>{{ $seat->user->name ?? '' }}</label>
                                    <form action="{{ route('delete', ['user_id' => $seat->user_id]) }}" method="post">
                                        @csrf

                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="size-5">
                                                <path fill-rule="evenodd"
                                                    d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                        </button>
                                    </form>
                                </div>
                            @else
                                <a
                                    href="{{ route('index', ['seat_id' => $seat->id, 'user_id' => Auth::user()->id]) }}">
                                    <x-secondary-button>emp</x-secondary-button>
                                </a>
                            @endif
                            <label>{{ $seat->user->name ?? '' }}</label>
                        </div>
                    @endforeach
                    <div class="grid grid-cols-4 gap-4 text-center">

                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
