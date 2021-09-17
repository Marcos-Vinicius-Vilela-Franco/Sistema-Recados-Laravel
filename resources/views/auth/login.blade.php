@extends('layouts.app')

@section('content')
    

    <div class="text-center" id="body1">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf

            <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
            <label for="inputEmail" class="sr-only"></label>
            
                <input id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" placeholder="Seu email" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ __('Email não válido') }}</strong>
                    </span>
                @enderror
            
            
                <label for="inputPassword" class="sr-only"></label>
                <input id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" placeholder="Senha" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ __('Senha não confere!') }}</strong>
                    </span>
                @enderror
            
            <div class="checkbox mb-3">
                <label >

                    <input type="checkbox" name="remember" id="remember" value="lembrar-me"
                        {{ old('remember') ? 'checked' : '' }}> Lembrar de mim
                </label>
            </div>
            
                <button type="submit" class="btn btn-lg btn-primary btn-block ">{{ __('Login') }}</button>
                <hr>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('esqueceu sua senha?') }}
                    </a>
                @endif
            
                    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </form>
    </div>
@endsection
