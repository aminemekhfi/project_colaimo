@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <h1>Informations sur le post N° {{ $parcinfo->id }}:</h1>
        <h4><b>Id :</b>{{ $parcinfo->id }}</h4>
        <h4><b>Département :</b>{{ $parcinfo->Departement }}</h4>
        <h4><b>Type ordinateur :</b>{{ $parcinfo->Tord }}</h4>
        <h4><b>Marque ordinateur :</b>{{ $parcinfo->Mord }}</h4>
        <h4><b>Type écran :</b>{{ $parcinfo->TEc }}</h4>
        <h4><b>Marque écran :</b>{{ $parcinfo->MEc }}</h4>
        <h4><b>Type marque clavier :</b>{{ $parcinfo->TMClav }}</h4>
        <h4><b>Type marque souris :</b>{{ $parcinfo->TMSour }}</h4>
        <h4><b>Système d'éxploitation :</b>{{ $parcinfo->SysExp }}</h4>
        <h4><b>Antivirus :</b>{{ $parcinfo->Antivirus }}</h4>
        <h4><b>Adresse IP :</b>{{ $parcinfo->AdresseIP }}</h4>
        <h4><b>Disque dur :</b>{{ $parcinfo->HardDrive }}</h4>
        <h4><b>RAM :</b>{{ $parcinfo->RAM }}</h4>
        <h4><b>Lecteur CD :</b>{{ $parcinfo->LecteurCD }}</h4>
        <h4><b>Imprimante :</b>{{ $parcinfo->Imprimante }}</h4>
    </div><br>
</div>
@endsection