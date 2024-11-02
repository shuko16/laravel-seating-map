<x-app-layout>
    @php
        // $seatedList = [7,8];
        // $seatedList = App\Models\Seat::select('seat_no')->get();
        // $seatedList = [];
        // $seatedListlocal = App\Models\Seat::select('seat_no')->get();
        // dump($seatedList[0]->seat_no);

        // $seatedList = App\Models\Seat::whereSeatType(1)->pluck('seat_no','ex',)->toArray();
        // $seatedList = App\Models\Seat::whereSeatType(1)->pluck('seat_no')->toArray();
        // $emptyList = App\Models\Seat::whereSeatType(2)->pluck('seat_no')->toArray();
        $seatedList = App\Models\Seat::whereSeatType(1)->pluck('ex', 'seat_no')->toArray();
        $emptyList = App\Models\Seat::whereSeatType(2)->pluck('ex', 'seat_no')->toArray();
        $seatUsersList = App\Models\Seat::whereSeatType(1)->with('user')->get();
        // dump($seatUsersList);

        $seatUsers = [];
        $seatUsersName = [];
        foreach ($seatUsersList as $seatUser) {
            // dump($seatUser);
            // dump($seatUser->seat_no);
            // dump($seatUser->user->name);
            $seatUsers[$seatUser->seat_no] = $seatUser->user->initials ?? 'なし';
            $seatUsersName[$seatUser->seat_no] = $seatUser->user->name ?? 'なし';
            //↑連想配列
        }

        // dump($seatUsersName);

        //    foreach ($seatedListlocal as $seat){
        //     $seatedList[] = $seat->seat_no;
        //    }
        // $seatedList[] = $seatedList2[0]->seat_no;
        // $noseatList =
        // [1, 2, 3, 4, 5, 6, 9, 11,12,
        // 13,18, 20,21,22,23,24,
        //
        // 169,167,168,169,170,171,172,173,174,175,176,177,178,179,180,
        // 181,182,183,184,185,186,187,188,189,190,191,192];
        // // $noseatList[] = range(193,250);

        // for ($i=193; $i < 253; $i++) {
        //     $noseatList[] =$i;
        // }

        // $seatedListTwo= [];
        // $noseatListTwo=
        // [1,2,4,7,8,11,12,

        // 384,
        // 408,        ];

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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- 2 * 12 ライン --}}
                    <div class="grid grid-cols-2 text-center">
                        <div>
                            <div class="grid grid-cols-12 text-center">
                                @for ($i = 1; $i < 421; $i++)
                                    {{-- @if (in_array($i, $seatedList)) --}}
                                    {{-- @dump($seatedList) --}}
                                    @if (array_key_exists($i, $seatedList))
                                        <form action="{{ route('offSeat', ['seat_no' => $i]) }}" method="post">
                                            @csrf
                                            <button {{-- class="w-[74px] h-10 border border-cyan-500 text-cyan-500 text-xs">{{ $i . '番' }}<br>seated{{ $seatUsers[$i] . $seatUsersName[$i]}}</button>     --}}
                                                class="w-[74px] h-10 border border-cyan-500 text-cyan-500 text-xs">{{ $seatedList[$i] }}<br>seated:{{ $seatUsers[$i] }}</button>
                                        </form>
                                    {{-- @elseif (in_array($i, $emptyList)) --}}

                                    @elseif (array_key_exists($i, $emptyList))
                                        <form action="{{ route('onSeat', ['seat_no' => $i]) }}" method="post">
                                            @csrf
                                            <button {{-- class="w-[74px] h-10 border border-red-500 text-red-500 text-xs">{{ $i . '番' }}<br>emp</button> --}}
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
                                    {{-- @if (in_array($i, $seatedList)) --}}
                                    @if (array_key_exists($i, $seatedList))
                                        <form action="{{ route('offSeat', ['seat_no' => $i]) }}" method="post">
                                            @csrf
                                            <button {{-- class="w-[74px] h-10 border border-cyan-500 text-cyan-500 text-xs">{{ $i . '番' }}<br>seatedxx</button> --}}
                                            class="w-[74px] h-10 border border-cyan-500 text-cyan-500 text-xs">{{ $seatedList[$i] }}<br>seated{{ $seatUsers[$i] . $seatUsersName[$i] }}</button>
                                            </from>
                                            {{-- @elseif (in_array($i, $emptyList)) --}}
                                        @elseif (array_key_exists($i, $emptyList))
                                            <form action="{{ route('onSeat', ['seat_no' => $i]) }}" method="post">
                                                @csrf
                                                <button {{-- class="w-[74px] h-10 border border-red-500 text-red-500 text-xs">{{ $i . '番' }}<br>emp</button> --}}
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
