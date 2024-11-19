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
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-2 text-center">
                        <div>
                            <div class="grid grid-cols-12 text-center">
                                @for ($i = 1; $i < 421; $i++)
                                    @include('components.seat-layout')
                                @endfor
                            </div>
                        </div>
                        <div>
                            <div class="grid grid-cols-12 text-center">
                                @for ($i = 421; $i < 842; $i++)
                                    @include('components.seat-layout')
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>