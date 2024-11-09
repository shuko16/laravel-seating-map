<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seats') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="m-4 ml-12 text-red-500">
            {{ $errors->first('otherUserSeated') }}
        </div>
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- 2 * 12 ライン --}}
                    <div class="grid grid-cols-2 text-center">
                        <div>
                            <div class="grid grid-cols-12 text-center">
                                @for ($i = 1; $i < 421; $i++)
                                    @if (in_array($i, $seatedList))
                                        <form action="{{ route('offSeat', ['seat_no' => $i]) }}" method="post">
                                            @csrf
                                            <button
                                                class="w-[74px] h-10 border border-cyan-500 text-cyan-500 text-xs">{{ $i . '番' }}<br>seated{{ $seatUsers[$i] }}</button>
                                        </form>
                                    @elseif (in_array($i, $emptyList))
                                        <form action="{{ route('onSeat', ['seat_no' => $i]) }}" method="post">
                                            @csrf
                                            <button
                                                class="w-[74px] h-10 border border-red-500 text-red-500 text-xs">{{ $i . '番' }}<br>emp</button>
                                        </form>
                                    @else
                                        <button class="h-10" disabled><br></button>
                                    @endif
                                @endfor
                            </div>
                        </div>
                        <div>
                            <div class="grid grid-cols-12 text-center">
                                @for ($i = 421; $i < 842; $i++)
                                    @if (in_array($i, $seatedList))
                                        <form action="{{ route('offSeat', ['seat_no' => $i]) }}" method="post">
                                            @csrf
                                            <button
                                                class="w-[74px] h-10 border border-cyan-500 text-cyan-500 text-xs">{{ $i . '番' }}<br>seatedxx</button>
                                        </form>
                                    @elseif (in_array($i, $emptyList))
                                        <form action="{{ route('onSeat', ['seat_no' => $i]) }}" method="post">
                                            @csrf
                                            <button
                                                class="w-[74px] h-10 border border-red-500 text-red-500 text-xs">{{ $i . '番' }}<br>emp</button>
                                        </form>
                                    @else
                                        <button class="h-10" disabled><br></button>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>