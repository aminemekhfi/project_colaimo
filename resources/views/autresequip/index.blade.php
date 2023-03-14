@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Autres équipements</h2><br>
    <div class="d-flex justify-content-between">
        <a href="{{ route('autresequip.create') }}">
            <button type="button" class="btn btn-primary">Ajouter</button>
        </a>
    </div>
    <table class="table text-center">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Code équipement</th>
            <th scope="col">Type équipement</th>
            <th scope="col">Marque équipement</th>
            <th scope="col">Série équipement</th>
            <th scope="col">Information équipement</th>
            <th scope="col">Actions</th>
        </thead>
        @foreach($autresequip as $a)
        <tbody>
            <td>{{ $a->id }}</td>
            <td>{{ $a->CodeEquip }}</td>
            <td>{{ $a->TypeEquip }}</td>
            <td>{{ $a->MarEquip }}</td>
            <td>{{ $a->SerieEquip }}</td>
            <td>{{ $a->InfoEquip }}</td>
            <td>
                <div class="d-flex justify-content-evenly">
                    <a href="{{ route('autresequip.show', $a->id) }}">
                        <button type="button" class="btn btn-secondary">
                            <i class='bx bx-show nav_icon'></i>
                        </button>
                    </a>
                    <a href="{{ route('autresequip.edit', $a->id) }}">
                        <button type="button" class="btn btn-warning">
                            <i class='bx bx-edit nav_icon'></i>
                        </button>
                    </a>
                    <form action="{{ route('autresequip.destroy', $a->id) }}" method="POST" onsubmit="return confirm('Voulez vous vraiment supprimer ce ma?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class='bx bx-trash nav_icon'></i>
                        </button>
                    </form>
                </div>
            </td>
        </tbody>
        @endforeach
    </table>
</div>
@endsection