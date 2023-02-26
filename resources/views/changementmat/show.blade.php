@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <h1>Informations sur le post N° {{ $changmat->id }}:</h1>
        <h4><b>Id :</b>{{ $changmat->id }}</h4>
        <h4><b>Code équipement :</b>{{ $changmat->CodeEquip }}</h4>
        <h4><b>Type équipement :</b>{{ $changmat->TypeEquip }}</h4>
        <h4><b>Marque équipement :</b>{{ $changmat->MarEquip }}</h4>
        <h4><b>Série équipement :</b>{{ $changmat->SerieEquip }}</h4>
        <h4><b>Information équipement :</b>{{ $changmat->InfoEquip }}</h4>
    </div><br>
</div>
@endsection