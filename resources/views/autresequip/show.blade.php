@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <h1>Informations sur le post N° {{ $autresequip->id }}:</h1>
        <h4><b>Id :</b>{{ $autresequip->id }}</h4>
        <h4><b>Département :</b>{{ $autresequip->CodeEquip }}</h4>
        <h4><b>Type ordinateur :</b>{{ $autresequip->TypeEquip }}</h4>
        <h4><b>Marque ordinateur :</b>{{ $autresequip->MarEquip }}</h4>
        <h4><b>Type écran :</b>{{ $autresequip->SerieEquip }}</h4>
        <h4><b>Marque écran :</b>{{ $autresequip->InfoEquip }}</h4>
    </div><br>
</div>
@endsection