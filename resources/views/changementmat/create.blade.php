@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Salut! {{ Auth::user()->name }}</h2><br>
    <div class="container-md">
        <form action="{{ route('changmat.store') }}" method="POST">
            @csrf 
            <div>
                <label>{{ __('Code') }}</label>
                <div>
                    <input type="text" name="Code" class="form-control mb-1 @error('Code') is-invalid @enderror">
                </div>
                @error('Code')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Date') }}</label>
                <div>
                    <input type="date" name="Date" class="form-control mb-1 @error('Date') is-invalid @enderror">
                </div>
                @error('Date')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Type machine') }}</label>
                <div>
                    <input type="text" name="TypeMach" class="form-control mb-1 @error('TypeMach') is-invalid @enderror">
                </div>
                @error('TypeMach')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Service émeteur') }}</label>
                <div>
                    <select name="SrvEmet" class="form-select mb-1 @error('SrvEmet') is-invalid @enderror">
                        <option value="Achat">Achat</option>
                        <option value="Controldegesion">Controle de Gestion</option>
                        <option value="Comptabilite">Comptabilite</option>
                        <option value="Approvisionnement">Approvisionnement</option>
                        <option value="Tresorerie">Tresorerie</option>
                        <option value="AuditInterne">Audit Interne</option>
                        <option value="AdminDesVentes">admin des ventes</option>
                        <option value="GestionDesVentes">gestion des ventes</option>
                        <option value="Marketing">marketing</option>
                        <option value="PrestationSociales">prestation sociales</option>
                        <option value="Conditionnement">Conditionnement</option>
                        <option value="Laboratoire">Laboratoire</option>
                        <option value="Orodonnancement">Ordonnancement</option>
                        <option value="Process">Process</option>
                        <option value="MaintIndus">Maintenance Industrielle</option>
                        <option value="MaintParcAuto">Maintenance Parc Auto</option>
                        <option value="TravNeufs">Traveaux Neufs</option>
                        <option value="Ordonnancement">Ordonnancement</option>
                        <option value="CollectLait">Collect Lait</option>
                        <option value="Vulgarisation">Vulgarisation</option>
                        <option value="FabAB">Fabrication AB</option>
                        <option value="ControleMPEM">Controle MP et EM</option>
                        <option value="GestionQualite">Gestion Qualite</option>
                        <option value="Hygiene">Hygiene</option>
                        <option value="DvpNv">Dvlp Nouveau</option>
                        <option value="Recherche">Recherche</option>
                        <option value="Developpement">Développement</option>
                        <option value="Maintenance">Maintenance</option>
                    </select>
                </div>
                @error('SrvEmet')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Service récepteur') }}</label>
                <div>
                    <select name="SrvRec" class="form-select mb-1 @error('SrvRec') is-invalid @enderror">
                        <option value="Achat">Achat</option>
                        <option value="Controldegesion">Controle de Gestion</option>
                        <option value="Comptabilite">Comptabilite</option>
                        <option value="Approvisionnement">Approvisionnement</option>
                        <option value="Tresorerie">Tresorerie</option>
                        <option value="AuditInterne">Audit Interne</option>
                        <option value="AdminDesVentes">admin des ventes</option>
                        <option value="GestionDesVentes">gestion des ventes</option>
                        <option value="Marketing">marketing</option>
                        <option value="PrestationSociales">prestation sociales</option>
                        <option value="Conditionnement">Conditionnement</option>
                        <option value="Laboratoire">Laboratoire</option>
                        <option value="Orodonnancement">Ordonnancement</option>
                        <option value="Process">Process</option>
                        <option value="MaintIndus">Maintenance Industrielle</option>
                        <option value="MaintParcAuto">Maintenance Parc Auto</option>
                        <option value="TravNeufs">Traveaux Neufs</option>
                        <option value="Ordonnancement">Ordonnancement</option>
                        <option value="CollectLait">Collect Lait</option>
                        <option value="Vulgarisation">Vulgarisation</option>
                        <option value="FabAB">Fabrication AB</option>
                        <option value="ControleMPEM">Controle MP et EM</option>
                        <option value="GestionQualite">Gestion Qualite</option>
                        <option value="Hygiene">Hygiene</option>
                        <option value="DvpNv">Dvlp Nouveau</option>
                        <option value="Recherche">Recherche</option>
                        <option value="Developpement">Développement</option>
                        <option value="Maintenance">Maintenance</option>
                    </select>
                </div>
                @error('SrvRec')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Commentaire') }}</label>
                <div>
                    <input type="text" name="Commentaire" class="form-control mb-1 @error('Commentaire') is-invalid @enderror">
                </div>
                @error('Commentaire')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button class="btn btn-success mt-1" type="submit">Créer</button>
            </div>
        </form>
    </div>
</div>
@endsection

