@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Ajouter un service</h2><br>
    <div class="container-md">
            <form action="{{ route('service.store') }}" method="POST">
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
                <button class="btn btn-success mt-1" type="submit">Ajouter service</button>
            </form>
        </div>
    </div>
</div>
@endsection
