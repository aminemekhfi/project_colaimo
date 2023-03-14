@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Utilisateur</h2><br>
    <div class="container-md">
        <form action="{{ route('User.update', $User->id) }}" method="POST">
            @csrf 
            @method('PUT')
            <div>
                <label>{{ __('Nom complet') }}</label>
                <div>
                    <input type="text" name="name" value="{{ $User->name }}" class="form-control mb-1 @error('name') is-invalid @enderror">
                </div>
                @error('name')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Email') }}</label>
                <div>
                    <input type="email" name="email"value="{{ $User->email }}"  class="form-control mb-1 @error('email') is-invalid @enderror">
                </div>
                @error('email')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Type') }}</label>

                <select name="type" id="type"   class="form-control mb-1 @error('type') is-invalid @enderror">
                
                    <option value="admin">admin</option>
                    <option value="employers">employers</option>
                    <option value="service stagiaire">service stagiaire</option>
                    
                </select>
                    
            </div>
            <button class="btn btn-warning mt-1" type="submit">Modifier</button>

        </div>
        </form>
    </div>
</div>
@endsection
