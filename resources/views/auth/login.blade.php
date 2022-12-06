<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <label for="email">E-mail cím:</label>
        <input type="email" name="email" id="email" value="{{ old('email')}}">
        @error('email')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <!-- Password -->
    <div class="mt-4">
        <label for="password">Jelszó:</label>
        <input type="password" name="password" id="password">
        @error('password')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="">
            <input id="remember_me" type="checkbox" class="" name="remember">
            <span class="">Emlékezz rám</span>
        </label>
    </div>

    <div class="">
        @if (Route::has('password.request'))
            <a class="" href="{{ route('password.request') }}">
               Elfelejtetted a jelszavad?
            </a>
        @endif

        <button type="submit">Bejelentkezés</button>
    </div>
</form>