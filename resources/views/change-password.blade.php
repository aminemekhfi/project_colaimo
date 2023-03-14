@extends('layouts.app')
@section('content')
    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Changer le mot de passe de <b> {{ Auth::user()->name }} </b></div>
                    <form action="{{ route('update-password') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Mot de passe actuel</label>
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                    placeholder="Mot de passe actuel">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">Nouveau mot de passe</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="Nouveau mot de passe">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Confirmer le mot de passe</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id=""
                                    placeholder="confirmer mot de passe">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Modifier</button>
                        </div>
                    </form>
                    </div><br>
                    <a href="{{ route('dashboard') }}" >
                <button class="btn btn-secondary">
                    <a class="text-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="">Déconnexion</span> 
                    </a>
                    <div class="" aria-labelledby="navbarDropdown">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </button>
            </a> 
            </div>
        </div>
    </div>
@endsection