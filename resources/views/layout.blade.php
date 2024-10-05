<x-app-layout>
    @php
        // $seatedList = [7,8];
        // $seatedList = App\Models\Seat::select('seat_no')->get();
        // $seatedList = [];
        // $seatedListlocal = App\Models\Seat::select('seat_no')->get();
        // dump($seatedList[0]->seat_no);

        $seatedList = App\Models\Seat::whereSeatType(1)->pluck('seat_no')->toArray();
        $emptyList = App\Models\Seat::whereSeatType(2)->pluck('seat_no')->toArray();

        //    foreach ($seatedListlocal as $seat){
        //     $seatedList[] = $seat->seat_no;
        //    }
        // $seatedList[] = $seatedList2[0]->seat_no;
        $noseatList = [
            1,
            2,
            3,
            4,
            5,
            6,
            9,
            11,
            12,
            13,
            18,
            20,
            21,
            22,
            23,
            24,
            25,
            26,
            27,
            28,
            29,
            30,
            31,
            32,
            33,
            35,
            36,
            39,
            42,
            43,
            44,
            45,
            46,
            47,
            48,
            50,
            51,
            53,
            54,
            56,
            57,
            59,
            60,
            61,
            62,
            63,
            64,
            65,
            66,
            69,
            70,
            71,
            72,
            74,
            75,
            76,
            77,
            78,
            79,
            80,
            81,
            83,
            84,
            85,
            86,
            87,
            88,
            89,
            90,
            91,
            92,
            93,
            94,
            95,
            98,
            99,
            100,
            101,
            106,
            109,
            110,
            111,
            112,
            113,
            114,
            115,
            116,
            117,
            118,
            119,
            120,
            121,
            122,
            123,
            124,
            125,
            126,
            127,
            128,
            129,
            130,
            131,
            132,
            134,
            135,
            136,
            137,
            142,
            143,
            145,
            146,
            147,
            148,
            149,
            150,
            151,
            152,
            153,
            154,
            155,
            156,
            157,
            158,
            159,
            160,
            161,
            162,
            163,
            164,
            165,
            166,
            167,
            168,
            169,
            167,
            168,
            169,
            170,
            171,
            172,
            173,
            174,
            175,
            176,
            177,
            178,
            179,
            180,
            181,
            182,
            183,
            184,
            185,
            186,
            187,
            188,
            189,
            190,
            191,
            192,
        ];
        // $noseatList[] = range(193,250);

        for ($i = 193; $i < 253; $i++) {
            $noseatList[] = $i;
        }

        $seatedListTwo = [];
        $noseatListTwo = [
            1,
            2,
            4,
            7,
            8,
            11,
            12,
            13,
            14,
            15,
            16,
            17,
            19,
            20,
            22,
            23,
            24,
            25,
            26,
            28,
            29,
            30,
            31,
            32,
            33,
            34,
            35,
            36,
            37,
            38,
            39,
            40,
            41,
            42,
            43,
            44,
            45,
            46,
            47,
            48,
            49,
            50,
            52,
            53,
            55,
            56,
            58,
            59,
            60,
            61,
            62,
            63,
            64,
            67,
            68,
            71,
            72,
            73,
            74,
            76,
            77,
            78,
            79,
            80,
            81,
            82,
            83,
            84,
            86,
            87,
            88,
            89,
            90,
            91,
            92,
            93,
            94,
            95,
            96,
            99,
            103,
            104,
            105,
            106,
            107,
            108,
            109,
            110,
            111,
            112,
            113,
            114,
            115,
            116,
            117,
            118,
            119,
            120,
            121,
            122,
            123,
            124,
            125,
            126,
            127,
            128,
            129,
            130,
            131,
            132,
            133,
            134,
            135,
            139,
            140,
            141,
            142,
            143,
            144,
            145,
            146,
            147,
            148,
            149,
            150,
            151,
            152,
            153,
            154,
            155,
            156,
            157,
            158,
            159,
            160,
            161,
            162,
            163,
            164,
            165,
            166,
            167,
            168,
            169,
            170,
            171,
            172,
            173,
            174,
            175,
            176,
            177,
            178,
            179,
            181,
            182,
            183,
            184,
            185,
            186,
            187,
            188,
            189,
            190,
            191,
            192,
            216,
            240,

            264,

            288,
            312,
            336,
            360,
            384,
            408,
        ];

    @endphp
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seats') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- 2 * 12 ライン --}}
                    <div class="grid grid-cols-2 text-center">
                        <div>
                            <div class="grid grid-cols-12 text-center">
                                @for ($i = 1; $i < 421; $i++)
                                    @if (in_array($i, $seatedList))
                                        <button {{-- class="h-10 border border-cyan-500 text-cyan-500 text-xs">{{'番'}}<br>seatedxx</button> --}}
                                            class="h-10 border border-cyan-500 text-cyan-500 text-xs">{{ $i . '番' }}<br>seatedxx</button>
                                    @elseif (in_array($i, $emptyList))
                                        <button
                                            class="h-10 border border-red-500 text-red-500 text-xs">{{ $i . '番' }}<br>emp</button>
                                    @else
                                        <button class="h-10" disabled><br></button>
                                    @endif
                                @endfor
                            </div>
                        </div>
                        <div>
                            <div class="grid grid-cols-12 text-center">
                                {{-- @for ($i = 1; $i < 421; $i++)
                                    @if (in_array($i, $seatedListTwo)) --}}

                                @for ($i = 421; $i < 842; $i++)
                                    @if (in_array($i, $seatedList))
                                        <button {{-- class="h-10 border border-cyan-500 text-cyan-500 text-xs">{{'番'}}<br>seatedxx</button> --}}
                                            class="h-10 border border-cyan-500 text-cyan-500 text-xs">{{ $i . '番' }}<br>seatedxx</button>
                                    @elseif (in_array($i, $emptyList))
                                        <button
                                            class="h-10 border border-red-500 text-red-500 text-xs">{{ $i . '番' }}<br>emp</button>
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
