<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <label for="name">Név:</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">
        @error('name')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="{{old('email')}}">
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

    <!-- Confirm Password -->
    <div class="mt-4">
        <label for="password_confirmation">Jelszó újra:</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        @error('password_confirmation')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="">
        <a class="" href="{{ route('login') }}">
           Van már fiókod? Jelentkezz be itt!
        </a>

        <button type="submit">Regisztráció</button>
    </div>
</form>