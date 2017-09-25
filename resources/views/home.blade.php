<!DOCTYPE html>
<html lang="en">
<body>
    <heading>
    @if (Route::has('login'))
        <div>
            <a href="{{ url('/login') }}">Login</a>
        </div>
    @endif
    </heading>
</body>
</html>