@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Messagerie</h2><br>
    <div class="container-md">
        <form action="{{ route('message.store') }}" method="POST">
            @csrf 
            <div>
                <label>{{ __('Utilisateur') }}</label>
                <div>
                    <input type="text" name="Utilisateur" class="form-control mb-1 @error('Utilisateur') is-invalid @enderror">
                </div>
                @error('Utilisateur')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror 
            </div>
            <div>
                <label>{{ __('Contenu') }}</label>
                <div>
                    <textarea  name="Contenu" class="form-control mb-1 @error('Contenu') is-invalid @enderror"></textarea>
                </div>
                @error('Contenu')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror 
            </div>
        <button class="btn btn-success mt-1" type="submit">Envoyer</button>            
    </div>
        </form>

    </div>
</div>
@endsection
