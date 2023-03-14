@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Parc Informatique</h2><br>
    <div class="container-md">
        <form action="{{ route('parcinfo.update', $parcinfo->id) }}" method="POST">
            @csrf 
            @method('PUT')
            <div>
                <label>{{ __('Département') }}</label>
                <div>
                    <input type="text" name="Departement" value="{{ $parcinfo->Departement }}" class="form-control mb-1 @error('departement') is-invalid @enderror">
                </div>
                @error('departement')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Service') }}</label>
                <div>
                    <input type="text" name="Service" value="{{ $parcinfo->Service }}" class="form-control mb-1 @error('service') is-invalid @enderror">
                </div>
                @error('service')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Type ordinateur') }}</label>
                <div>
                    <input type="text" name="Tord" value="{{ $parcinfo->Tord }}" class="form-control mb-1 @error('Tord') is-invalid @enderror">
                </div>
                @error('Tord')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Marque ordinateur') }}</label>
                <div>
                    <input type="text" name="Mord" value="{{ $parcinfo->Mord }}" class="form-control mb-1 @error('Mord') is-invalid @enderror">
                </div>
                @error('Mord')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Type écran') }}</label>
                <div>
                    <input type="text" name="TEc" value="{{ $parcinfo->TEc }}" class="form-control mb-1 @error('TEc') is-invalid @enderror">
                </div>
                @error('TEc')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Marque écran') }}</label>
                <div>
                    <input type="text" name="MEc" value="{{ $parcinfo->MEc }}" class="form-control mb-1 @error('MEc') is-invalid @enderror">
                </div>
                @error('MEc')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Type marque clavier') }}</label>
                <div>
                    <input type="text" name="TMClav" value="{{ $parcinfo->TMClav }}" class="form-control mb-1 @error('TMClav') is-invalid @enderror">
                </div>
                @error('TMClav')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Type marque souris') }}</label>
                <div>
                    <input type="text" name="TMSour" value="{{ $parcinfo->TMSour }}" class="form-control mb-1 @error('TMSour') is-invalid @enderror">
                </div>
                @error('TMSour')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Système déxploitation') }}</label>
                <div>
                    <input type="text" name="SysExp" value="{{ $parcinfo->SysExp }}" class="form-control mb-1 @error('SysExp') is-invalid @enderror">
                </div>
                @error('SysExp')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Antivirus') }}</label>
                <div>
                    <input type="text" name="Antivirus" value="{{ $parcinfo->Antivirus }}" class="form-control mb-1 @error('Antivirus') is-invalid @enderror">
                </div>
                @error('Antivirus')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Adresse IP') }}</label>
                <div>
                    <input type="text" name="AdresseIP" value="{{ $parcinfo->AdresseIP }}" class="form-control mb-1 @error('AdresseIP') is-invalid @enderror">
                </div>
                @error('AdresseIP')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Disque Dur') }}</label>
                <div>
                    <input type="text" name="HardDrive" value="{{ $parcinfo->AdresseIP }}" class="form-control mb-1 @error('HardDrive') is-invalid @enderror">
                </div>
                @error('HardDrive')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('RAM') }}</label>
                <div>
                    <input type="text" name="RAM" value="{{ $parcinfo->RAM }}" class="form-control mb-1 @error('RAM') is-invalid @enderror">
                </div>
                @error('RAM')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Lecteur CD') }}</label>
                <div>
                    <input type="text" name="LecteurCD" value="{{ $parcinfo->LecteurCD }}" class="form-control mb-1 @error('LecteurCD') is-invalid @enderror">
                </div>
                @error('LecteurCD')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Imprimante') }}</label>
                <div>
                    <input type="text" name="Imprimante" value="{{ $parcinfo->Imprimante }}" class="form-control mb-1 @error('Imprimante') is-invalid @enderror">
                </div>
                @error('Imprimante')
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
