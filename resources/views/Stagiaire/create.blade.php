@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Stagiaire</h2><br>
    <div class="container-md">
            
        <form action="{{ route('Stagiaire.store') }}" method="POST">
            @csrf 
            <div>
                <label>{{ __('Code Stagiaire') }}</label>
                <div>
                    <input type="number" name="CodeStag" class="form-control mb-1 @error('CodeStag') is-invalid @enderror">
                </div>
                @error('CodeStag')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Numéro CIN') }}</label>
                <div>
                    <input type="text" name="NCIN" class="form-control mb-1 @error('NCIN') is-invalid @enderror">
                </div>
                @error('NCIN')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Nom') }}</label>
                <div>
                    <input type="text" name="Nom" class="form-control mb-1 @error('Nom') is-invalid @enderror">
                </div>
                @error('Nom')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Prénom') }}</label>
                <div>
                    <input type="text" name="Prenom" class="form-control mb-1 @error('Prenom') is-invalid @enderror">
                </div>
                @error('Prenom')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Date de naissance') }}</label>
                <div>
                    <input type="date" name="DN" class="form-control mb-1 @error('DN') is-invalid @enderror">
                </div>
                @error('DN')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Télephone') }}</label>
                <div>
                    <input type="text" name="Tel" class="form-control mb-1 @error('Tel') is-invalid @enderror">
                </div>
                @error('Tel')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Email') }}</label>
                <div>
                    <input type="email" name="Email" class="form-control mb-1 @error('Email') is-invalid @enderror">
                </div>
                @error('Email')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Etablissement') }}</label>
                <div>
                    <input type="text" name="Etab" class="form-control mb-1 @error('Etab') is-invalid @enderror">
                </div>
                @error('Etab')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Branche') }}</label>
                <div>
                    <input type="text" name="Branch" class="form-control mb-1 @error('Branch') is-invalid @enderror">
                </div>
                @error('Branch')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Niveau') }}</label>
                <div>
                    <input type="text" name="Niveau" class="form-control mb-1 @error('Niveau') is-invalid @enderror">
                </div>
                @error('Niveau')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>  
            <div>
            <label>{{ __('Type stage') }}</label>
            <select name="TyStage" id="TyStage" class="form-select mb-1 @error('TyStage') is-invalid @enderror">
                
                <option value="Initiation">
                    Initiation
                </option>
                <option value="Application">
                    Application
                </option>
                <option value="Libre">
                    Libre
                </option>
                
            </select>
            @error('TyStage')
                <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror   

            </div>
            
            <div>
                <label>{{ __('Date debut') }}</label>
                <div>
                    <input type="date" name="Ddebut" class="form-control mb-1 @error('Ddebut') is-invalid @enderror">
                </div>
                @error('Ddebut')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Date fin') }}</label>
                <div>
                    <input type="date" name="Dfin" class="form-control mb-1 @error('Dfin') is-invalid @enderror">
                </div>
                @error('Dfin')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
        <button class="btn btn-success mt-1" type="submit">Créer</button>
            
    </div>
        </form>

    </div>
</div>
@endsection
