<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

    </head>
    <body>
        <form method="post" action="{{ route("login") }}">
            @csrf
            <label>
                Email :
                <input name="email" value="{{ old('email') }}" type="email">
            </label>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror<br><br>
            <label>
                Password :
                <input name="password" type="password">
            </label>
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit">
                login
            </button>
        </form>
    </body>
</html>
