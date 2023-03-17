@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div>
        <h2>Changer le mot de passe de <b> {{ Auth::user()->name }}</h2>
    </div><br>
    <div>
        <form action="{{ route('update-password') }}" method="POST">
            @csrf 
            <div>
                <label>{{ __('Mot de passe actuel :') }}</label>
                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput" placeholder="Mot de passe actuel">
                @error('old_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><br>
            <div>
                <label>{{ __('Nouveau mot de passe :') }}</label>
                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput" placeholder="Nouveau mot de passe">
                @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div><br>
            <div>
                <label>{{ __('Confirmer le nouveau mot de passe :') }}</label>
                <input name="new_password_confirmation" type="password" class="form-control" id="" placeholder="confirmer mot de passe">
            </div><br>
            <div>
                <button class="btn btn-warning mt-1" type="submit">Modifier</button>
            </div>
        </form>
    </div><br>
    <div>
    <a href="{{ route('dashboard') }}" >
        <button class="btn btn-dark">
            <a class="text-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="">Se déconnecter de <b>{{ Auth::user()->name }}</b></span> 
            </a>
            <div class="" aria-labelledby="navbarDropdown">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </button>
    </a> <br><br>
    <a href="{{ route('departement.create') }}">
        <button class="btn btn-primary">Ajouter un département</button>
    </a>
    <a href="{{ route('service.create') }}">
        <button class="btn btn-primary">Ajouter un service</button>
    </a>
    </div>
    <div></div>
</div>
@endsection