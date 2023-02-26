@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Salut! {{ Auth::user()->name }}</h2><br>
    <div class="container-md">
        <form action="{{ route('changmat.update', $changmat->id) }}" method="POST">
            @csrf 
            @method('PUT')
            <div>
                <label>{{ __('Code équipement') }}</label>
                <div>
                    <input type="text" name="CodeEquip" class="form-control mb-1 @error('CodeEquip') is-invalid @enderror" value="{{ $changmat->CodeEquip }}">
                </div>
                @error('CodeEquip')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Type équipement') }}</label>
                <div>
                    <input type="text" name="TypeEquip" class="form-control mb-1 @error('TypeEquip') is-invalid @enderror" value="{{ $changmat->TypeEquip }}">
                </div>
                @error('CodeEquip')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Marque équipement') }}</label>
                <div>
                    <input type="text" name="MarEquip" class="form-control mb-1 @error('MarEquip') is-invalid @enderror" value="{{ $changmat->MarEquip }}">
                </div>
                @error('MarEquip')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Série équipement') }}</label>
                <div>
                    <input type="text" name="SerieEquip" class="form-control mb-1 @error('SerieEquip') is-invalid @enderror" value="{{ $changmat->SerieEquip }}">
                </div>
                @error('SerieEquip')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Information équipement') }}</label>
                <div>
                    <input type="text" name="InfoEquip" class="form-control mb-1 @error('InfoEquip') is-invalid @enderror" value="{{ $changmat->InfoEquip }}">
                </div>
                @error('InfoEquip')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button class="btn btn-warning mt-1" type="submit">Modifier</button>
            </div>
        </form>
    </div>
</div>
@endsection
