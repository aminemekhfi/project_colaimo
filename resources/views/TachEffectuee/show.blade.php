@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <h1>Informations sur le post N° {{ $TachEffectuee->id }}:</h1>
        <h4><b>Id :</b>{{ $TachEffectuee->id }}</h4>
        <h4><b>Département :</b>{{ $TachEffectuee->CodeTache }}</h4>
        <h4><b>Type ordinateur :</b>{{ $TachEffectuee->DateTache }}</h4>
        <h4><b>Marque ordinateur :</b>{{ $TachEffectuee->Depar }}</h4>
        <h4><b>Type écran :</b>{{ $TachEffectuee->Service }}</h4>
        <h4><b>Marque écran :</b>{{ $TachEffectuee->TacheEffec }}</h4>
        <h4><b>Type marque clavier :</b>{{ $TachEffectuee->Commantaire }}</h4>
    </div><br>
</div>
@endsection