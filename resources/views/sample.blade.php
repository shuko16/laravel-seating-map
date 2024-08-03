@php
    $seatedList = [1, 2, 3, 28, 32];
    $noseatList = [5, 10, 15, 17, 29, 41, 53, 65, 77, 89, 101, 113];
@endphp
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
                    {{-- 2 * 12 ライン --}}
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <div class="grid grid-cols-12 gap-4 text-center">
                                @for ($i = 1; $i < 121; $i++)
                                    @if (in_array($i, $seatedList))
                                        <button
                                            class="border border-cyan-500 text-cyan-500 text-xs">{{ $i }}<br>seat</button>
                                    @else
                                        @if (in_array($i, $noseatList))
                                            <button class="border" disabled><br></button>
                                        @else
                                            <button
                                                class="border border-red-500 text-red-500 text-xs">{{ $i }}<br>emp</button>
                                        @endif
                                    @endif
                                @endfor
                            </div>
                        </div>
                        <div>
                            <div class="grid grid-cols-12 gap-4 text-center">
                                @for ($i = 1; $i < 121; $i++)
                                    @if (in_array($i, $seatedList))
                                        <button
                                            class="border border-cyan-500 text-cyan-500 text-xs">{{ $i }}<br>seat</button>
                                    @else
                                        @if (in_array($i, $noseatList))
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
                    <div class="grid grid-cols-12 gap-4 text-center">
                        @for ($i = 1; $i < 61; $i++)
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
