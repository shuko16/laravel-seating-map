<form action="{{ route('offSeat', ['seat_no' => $i]) }}" method="post">
    @csrf
    <button
        class="
        w-[74px]
        h-10
        border
        border-cyan-500
        text-cyan-500
        text-xs
        tooltip
        tooltip-base-content"
        data-tip="{{ $seatUsersName[$i] }}">
        {{ $seatUsersEx[$i] }}
        <br>
        seated:{{ $seatUsers[$i] }}
    </button>
</form>
