{{-- <div>
    @if (array_key_exists($i, $seatedList))
        @include('components.on-seat')
    @elseif (array_key_exists($i, $emptyList))
        @include('components.off-seat')
    @else
        <button class="h-10" disabled><br></button>
    @endif
</div> --}}

@if (in_array($i, $seatedList))
    @include('components.on-seat')
@elseif (in_array($i, $emptyList))
    @include('components.off-seat')
@else
    <button class="h-10" disabled><br></button>
@endif