<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daftar</title>

    </head>
    <body>
    <form method="post" action="{{ route("register") }}">
        @csrf
        <label>
            Email :
            <input value="{{ old('email') }}" name="email" type="email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </label><br><br>
        <label>
            Role :
            <select name="role" id="role">
                <option value="0">Mahasiswa</option>
                <option value="1">Lembaga/Organisasi</option>
            </select>
        </label><br><br>
        <label>
            Password :
            <input name="password" type="password">
        </label>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror<br><br>
        <label>
            Re-password :
            <input name="re-password" type="password">
        </label>
        @error('re-password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">
            Register
        </button>
    </form>
    </body>
</html>
