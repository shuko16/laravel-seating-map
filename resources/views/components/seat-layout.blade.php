{{-- <div>
    @if (array_key_exists($i, $seatedList))
        @include('components.on-seat')
    @elseif (array_key_exists($i, $emptyList))
        @include('components.off-seat')
    @else
        <button class="h-10" disabled><br></button>
    @endif
</div> --}}

@if (array_find($seatedList, fn($value) => $value === $i))
    @include('components.on-seat')
@elseif (array_find($emptyList, fn($value) => $value === $i))
    @include('components.off-seat')
@else
    <button class="h-10" disabled><br></button>
@endif
