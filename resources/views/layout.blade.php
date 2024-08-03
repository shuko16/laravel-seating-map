@php
    $seatedList = [1, 2, 3, 28, 32];
    $noseatList = [5, 10, 15, 17, 29, 41, 53, 65, 77, 89, 101, 113, 6];

    $seatedListTwo = [1, 2, 3, 4, 5];
    $noseatListTwo = [5, 10, 15];
@endphp
<x-app-layout>
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
                                @for ($i = 1; $i < 121; $i++)
                                    @if (in_array($i, $seatedList))
                                        <button
                                            class="border border-cyan-500 text-cyan-500 text-xs">{{ '番' }}<br>seatedxx</button>
                                    @else
                                        @if (in_array($i, $noseatList))
                                            <button disabled><br></button>
                                        @else
                                            <button
                                                class="border border-red-500 text-red-500 text-xs">{{ $i . '番' }}<br>emp</button>
                                        @endif
                                    @endif
                                @endfor
                            </div>
                        </div>
                        <div>
                            <div class="grid grid-cols-12 text-center">
                                @for ($i = 1; $i < 121; $i++)
                                    @if (in_array($i, $seatedListTwo))
                                        <button
                                            class="border border-cyan-500 text-cyan-500 text-xs">{{ $i }}<br>seat</button>
                                    @else
                                        @if (in_array($i, $noseatListTwo))
                                            <button class="border" disabled><br></button>
                                        @else
                                            <button
                                                class="border border-red-500 text-red-500 text-xs">{{ $i }}<br>emp</button>
                                        @endif
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
                    <div class="grid grid-cols-12 text-center">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
