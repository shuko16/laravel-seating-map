<x-app-layout>
    @php
        
        $seatedList = App\Models\Seat::whereSeatType(1)->pluck('ex', 'seat_no')->toArray();
        $emptyList = App\Models\Seat::whereSeatType(2)->pluck('ex', 'seat_no')->toArray();
        $seatUsersList = App\Models\Seat::whereSeatType(1)->with('user')->get();
       
        $seatUsers = [];
        $seatUsersName = [];
        foreach ($seatUsersList as $seatUser) {
            
            $seatUsers[$seatUser->seat_no] = $seatUser->user->initials ?? 'なし';
            $seatUsersName[$seatUser->seat_no] = $seatUser->user->name ?? 'なし';
            //↑連想配列
        }       
    @endphp

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

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="grid grid-cols-2 text-center">
                        <div>
                            <div class="grid grid-cols-12 text-center">
                                @for ($i = 1; $i < 421; $i++)
                                    @if (array_key_exists($i, $seatedList))
                                        <form action="{{ route('offSeat', ['seat_no' => $i]) }}" method="post">
                                            @csrf
                                            <button
                                                class="w-[74px] h-10 border border-cyan-500 text-cyan-500 text-xs tooltip tooltip-base-content"
                                                data-tip="{{ $seatUsersName[$i] }}">

                                                {{ $seatedList[$i] }}
                                                <br>
                                                seated:{{ $seatUsers[$i] }}
                                            </button>
                                        </form>
                                    @elseif (array_key_exists($i, $emptyList))
                                        <form action="{{ route('onSeat', ['seat_no' => $i]) }}" method="post">
                                            @csrf
                                            <button
                                                class="w-[74px] h-10 border border-red-500 text-red-500 text-xs">{{ $emptyList[$i] }}<br>emp</button>
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
                                @if (array_key_exists($i, $seatedList))
                                <form action="{{ route('offSeat', ['seat_no' => $i]) }}" method="post">
                                    @csrf
                                    <button
                                        class="w-[74px] h-10 border border-cyan-500 text-cyan-500 text-xs tooltip tooltip-base-content"
                                        data-tip="{{ $seatUsersName[$i] }}">

                                        {{ $seatedList[$i] }}
                                        <br>
                                        seated:{{ $seatUsers[$i] }}
                                    </button>
                                </form>
                            @elseif (array_key_exists($i, $emptyList))
                                <form action="{{ route('onSeat', ['seat_no' => $i]) }}" method="post">
                                    @csrf
                                    <button
                                        class="w-[74px] h-10 border border-red-500 text-red-500 text-xs">{{ $emptyList[$i] }}<br>emp</button>
                                </form>
                            @else
                                <button class="h-10" disabled><br></button>
                            @endif 


                                @endfor
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <br>
                    {{-- 12 ライン --}}
                    {{-- <div class="grid grid-cols-12 text-center">
                        @for ($i = 1; $i < 181; $i++)
                            @if (in_array($i, $seatedList))
                                <button
                                    class="border border-cyan-500 text-cyan-500">{{ $i }}<br>seated</button>
                            @else
                                @if (in_array($i, $noseatList))
                                    <button class="border" disabled><br></button>
                                @else
                                    <button
                                        class="border border-red-500 text-red-500">{{ $i }}<br>empty</button>
                                @endif
                            @endif
                        @endfor
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
