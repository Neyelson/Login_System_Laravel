@extends('masters.masterapp')
 
@section('content')

<div class="text-center personallogincardcentralizer">

<div class="card bg-aeroblack" style="width: 100%; max-width: 400px;">

    <div class="card-header">{{ __('Faça o login') }}</div>

    <div class="card-body ">

        <form method="POST" class="form-signin" action="{{ route('login') }}" style="padding-bottom: 0px;">
            @csrf

            <span style="float: left;">Email:</span>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror bg-aeroblack mb-2" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert" >
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <span style="float: left;">Senha:</span>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror bg-aeroblack " placeholder="Senha" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <button class="btn btn-primary btn-block bg-aeroblack my-4 mb-4" type="submit">{{ __('Acessar') }}</button>

            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Lembrar acesso') }}
            <br>

            @if (Route::has('password.request'))
            <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                {{ __('Esqueci minha senha') }}
            </a>
            @endif
            <br>nads8002299151
        </div>

    </div>

    </div>

</form>

@endsection
