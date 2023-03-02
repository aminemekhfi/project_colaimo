@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <h1>Informations sur le post N° {{ $changmat->id }}:</h1>
        <h4><b>Id :</b>{{ $changmat->id }}</h4>
        <h4><b>Code :</b>{{ $changmat->Code }}</h4>
        <h4><b>Date :</b>{{ $changmat->Date }}</h4>
        <h4><b>Type machine :</b>{{ $changmat->TypeMach }}</h4>
        <h4><b>Service émeteur :</b>{{ $changmat->SrvEmet }}</h4>
        <h4><b>Service récepteur :</b>{{ $changmat->SrvRec }}</h4>
        <h4><b>Commentaire :</b>{{ $changmat->Commentaire }}</h4>
    </div><br>
</div>
@endsection