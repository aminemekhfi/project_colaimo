@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Ajouter un département ou un service</h2><br>
    <div class="container-md">
        <div>
            <form action="{{ route('departement.store') }}" method="POST">
                @csrf 
                <div>
                    <label>{{ __('Nom') }}</label>
                    <div>
                        <input type="text" name="nom" class="form-control mb-1 @error('nom') is-invalid @enderror">
                    </div>
                    @error('nom')
                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-success mt-1" type="submit">Ajouter département</button>
            </form>
        </div>
    </div>
</div>
@endsection
