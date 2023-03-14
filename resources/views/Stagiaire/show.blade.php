@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <h1>Informations sur le post N° {{ $Stagiaire->id }}:</h1>
        <h4><b>Id :</b>{{ $Stagiaire->id }}</h4>
        <h4><b>Code Stagiaire :</b>{{ $Stagiaire->CodeStag }}</h4>
        <h4><b>Numéro CIN :</b>{{ $Stagiaire->NCIN }}</h4>
        <h4><b>Nom :</b>{{ $Stagiaire->Nom }}</h4>
        <h4><b>Prénom :</b>{{ $Stagiaire->Prenom }}</h4>
        <h4><b>Date de naissance :</b>{{ $Stagiaire->DN }}</h4>
        <h4><b>Télephone :</b>{{ $Stagiaire->Tel }}</h4>
        <h4><b>Email :</b>{{ $Stagiaire->Email }}</h4>
        <h4><b>Etablissement :</b>{{ $Stagiaire->Etab }}</h4>
        <h4><b>Branche :</b>{{ $Stagiaire->Branch }}</h4>
        <h4><b>Niveau :</b>{{ $Stagiaire->Niveau }}</h4>
        <h4><b>Type stage :</b>{{ $Stagiaire->TyStage }}</h4>
        <h4><b>Date debut :</b>{{ $Stagiaire->Ddebut }}</h4>
        <h4><b>Date fin :</b>{{ $Stagiaire->Dfin }}</h4>
    </div><br>
</div>
@endsection