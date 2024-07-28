<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SeatBoard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-5 gap-3 text-center">

                        <div>
                            <style>
                                /* 各ボタンとラベルのセットを縦並びにする */
                                .button-label-set {
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    margin-right: 1px;
                                    /* セット間の余白調整 */
                                }

                                /* セットを横並びにする */
                                .button-label-container {
                                    display: flex;
                                    align-items: flex-start;
                                    /* セットの垂直方向の整列を調整 */
                                }
                            </style>

                            <div class="button-label-container">
                                <div class="button-label-set">
                                    <x-danger-button>set</x-danger-button>
                                    <label class="text-sm">--1-</label>
                                </div>

                                <div class="button-label-set">
                                    <x-danger-button>set</x-danger-button>
                                    <label class="text-sm">-02-</label>
                                </div>

                                <div class="button-label-set">
                                    <x-danger-button>set</x-danger-button>
                                    <label class="text-sm">-03-</label>
                                </div>

                                <div class="button-label-set">
                                    <x-danger-button>set</x-danger-button>
                                    <label class="text-sm">-04-</label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="text-sm">-05-</label>
                            <x-danger-button>set</x-danger-button>
                            <x-danger-button>set</x-danger-button>
                            <label class="text-sm">-06-</label>

                        </div>

                        <div>
                            <label>-07-</label>
                            <x-secondary-button>emp</x-secondary-button>
                        </div>

                        <div>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>-08-</label>
                        </div>

                        <div>
                            <label>-09-</label>
                            <x-secondary-button>emp</x-secondary-button>

                            <x-secondary-button>emp</x-secondary-button>
                            <label>-10-</label>
                        </div>

                        <div>
                        </div>

                        <div>
                            <x-danger-button>set</x-danger-button><br>
                            <label class="text-sm">-13-</label>
                        </div>

                        <div>
                            <label class="text-sm">-14-</label>
                            <x-danger-button>set</x-danger-button><br>
                        </div>

                        <div>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>-15-</label>
                        </div>

                        <div>
                            <x-danger-button>set</x-danger-button><br>
                            <label class="text-sm">-16-</label>
                        </div>


                        <div>
                            <style>
                                /* 各ボタンとラベルのセットを縦並びにする */
                                .button-label-set {
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    margin-right: 1px;
                                    /* セット間の余白調整 */
                                }

                                /* セットを横並びにする */
                                .button-label-container {
                                    display: flex;
                                    align-items: flex-start;
                                    /* セットの垂直方向の整列を調整 */
                                }
                            </style>

                            <div class="button-label-container">
                                <div class="button-label-set">
                                    <label class="text-sm">-18-</label>
                                    <x-danger-button>set</x-danger-button>

                                </div>

                                <div class="button-label-set">
                                    <label class="text-sm">-19-</label>
                                    <x-danger-button>set</x-danger-button>

                                </div>

                                <div class="button-label-set">
                                    <label class="text-sm">-20-</label>
                                    <x-danger-button>set</x-danger-button>

                                </div>

                                <div class="button-label-set">
                                    <label class="text-sm">-21-</label>
                                    <x-danger-button>set</x-danger-button>

                                </div>
                            </div>
                        </div>

                        <div>
                            <label>-22-</label><br>
                            <x-secondary-button>emp</x-secondary-button>
                        </div>


                        <div>
                            <label>-23-</label>
                            <x-secondary-button>emp</x-secondary-button>
                        </div>

                        <div>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>-24-</label>
                        </div>

                        <div>
                            <label>-25-</label><br>
                            <x-secondary-button>emp</x-secondary-button>
                        </div>


                        <div class="button-label-container">
                            <label class="text-sm">-----</label>
                            <div class="button-label-set">
                                <x-danger-button>set</x-danger-button>
                                <label class="text-sm">-27-</label>
                            </div>

                            <div>
                                <label class="text-sm">-----------</label>
                            </div>

                            <div class="button-label-set">
                                <x-danger-button>set</x-danger-button>
                                <label class="text-sm">-28-</label>
                            </div>

                        </div>

                        <div>
                            <label class="text-sm">-29-</label>
                            <x-danger-button>set</x-danger-button>
                            <x-danger-button>set</x-danger-button>
                            <label class="text-sm">-30-</label>
                        </div>

                        <div>
                            <label>-31-</label>
                            <x-secondary-button>emp</x-secondary-button>
                        </div>

                        <div>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>-32-</label>
                        </div>

                        <div>
                            <label>-33-</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>-34-</label>

                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>


                    <div class="grid grid-cols-3 gap-4 text-center">

                        <div class="button-label-container">

                            <div>
                                <label class="text-sm">--------------------</label>
                            </div>

                            <div class="button-label-set">
                                <label class="text-sm">-37-</label>
                                <x-danger-button>set</x-danger-button>
                            </div>

                            <div class="button-label-set">
                                <label class="text-sm">-38-</label>
                                <x-danger-button>set</x-danger-button>
                            </div>

                            <div class="button-label-set">
                                <label class="text-sm">-39-</label>
                                <x-danger-button>set</x-danger-button>
                            </div>

                            <div class="button-label-set">
                                <label class="text-sm">-40-</label>
                                <x-danger-button>set</x-danger-button>
                            </div>
                        </div>

                        <div class="button-label-container">
                            <label class="text-sm">---</label>
                            <label>-41-</label>
                            <x-secondary-button>emp</x-secondary-button>

                            <div class="button-label-set">
                                <label class="text-sm">-42-</label>
                                <x-danger-button>set</x-danger-button>
                            </div>

                            <div class="button-label-set">
                                <label class="text-sm">-43-</label>
                                <x-danger-button>set</x-danger-button>
                            </div>

                            <x-secondary-button>emp</x-secondary-button>
                            <label>-44-</label>



                            <div class="button-label-container">
                                <div class="button-label-set">
                                    <label class="text-sm">-45-</label>
                                    <x-danger-button>set</x-danger-button>
                                </div>

                                <div class="button-label-set">
                                    <label class="text-sm">-46-</label>
                                    <x-danger-button>set</x-danger-button>
                                </div>

                                <div class="button-label-set">
                                    <label class="text-sm">-47-</label>
                                    <x-danger-button>set</x-danger-button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                        </div>
                        <div>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                        </div>
                        <div>
                        </div>
                        <div>
                            <label>S.Suzuki</label>
                            <x-danger-button>set</x-danger-button>
                            <x-danger-button>set</x-danger-button>
                            <label>Y.Suzuki</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            {{-- <label>--------</label>
                            <x-primary-button>rsv</x-primary-button>
                            <x-primary-button>rsv</x-primary-button>
                            <label>--------</label> --}}
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                        </div>
                        <div>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                        </div>
                        <div>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                        <div>
                            <label>--------</label>
                            <x-secondary-button>emp</x-secondary-button>
                            <x-secondary-button>emp</x-secondary-button>
                            <label>--------</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
