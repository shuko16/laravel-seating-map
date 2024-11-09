<form action="{{ route('onSeat', ['seat_no' => $i]) }}" method="post">
    @csrf
    <button
        class="
        w-[74px]
        h-10 
        border
        border-red-500
        text-red-500
        text-xs">
        {{ $emptyList[$i] }}
        <br>
        emp
    </button>
</form>
