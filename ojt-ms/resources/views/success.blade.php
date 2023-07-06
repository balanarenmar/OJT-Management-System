@auth
    CONGRATS {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}!
    <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
    </form>
@else
    LOG IN FAILED
@endauth