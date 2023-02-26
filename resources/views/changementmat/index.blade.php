@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Salut! {{ Auth::user()->name }}</h2><br>
    <div class="d-flex justify-content-between">
        <a href="{{ route('changmat.create') }}">
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
        @foreach($changmat as $c)
        <tbody>
            <td>{{ $c->id }}</td>
            <td>{{ $c->CodeEquip }}</td>
            <td>{{ $c->TypeEquip }}</td>
            <td>{{ $c->MarEquip }}</td>
            <td>{{ $c->SerieEquip }}</td>
            <td>{{ $c->InfoEquip }}</td>
            <td>
                <div class="d-flex justify-content-evenly">
                    <a href="{{ route('changmat.show', $c->id) }}">
                        <button type="button" class="btn btn-secondary">
                            <i class='bx bx-show nav_icon'></i>
                        </button>
                    </a>
                    <a href="{{ route('changmat.edit', $c->id) }}">
                        <button type="button" class="btn btn-warning">
                            <i class='bx bx-edit nav_icon'></i>
                        </button>
                    </a>
                    <form action="{{ route('changmat.destroy', $c->id) }}" method="POST" onsubmit="return confirm('Voulez vous vraiment supprimer ce ma?')">
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