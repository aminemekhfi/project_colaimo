@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Tache effectuée</h2><br>
    <div class="d-flex justify-content-between">
        <a href="{{ route('TachEffectuee.create') }}">
            <button type="button" class="btn btn-primary">Ajouter</button>
        </a>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">CodeTache</th>
                <th scope="col">DateTache</th>
                <th scope="col">Depar</th>
                <th scope="col">Service</th>
                <th scope="col">TacheEffec</th>
                <th scope="col">Commantaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($TachEffectuee as $TaEf)
            <tr> 
                    <td>{{ $TaEf->id }}</td>
                    <td>{{ $TaEf->CodeTache }}</td>
                    <td>{{ $TaEf->DateTache }}</td>
                    <td>{{ $TaEf->Depar }}</td>
                    <td>{{ $TaEf->Service }}</td>
                    <td>{{ $TaEf->TacheEffec }}</td>
                    <td>{{ $TaEf->Commantaire }}</td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a href="{{ route('TachEffectuee.show', $TaEf->id) }}">
                            <button type="button" class="btn btn-secondary">
                                <i class='bx bx-show nav_icon'></i>
                            </button>
                            </a>
                            <a href="{{ route('TachEffectuee.edit', $TaEf->id) }}">
                                <button type="button" class="btn btn-warning">
                                    <i class='bx bx-edit nav_icon'></i>
                                </button>
                            </a>
                            <form action="{{ route('TachEffectuee.destroy', $TaEf->id) }}" method="POST" onsubmit="return confirm('Voulez vous vraiment supprimer ce tache?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class='bx bx-trash nav_icon'></i>
                            </button>
                        </form>
                        </div>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection