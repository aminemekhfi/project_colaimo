@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Stagiaire</h2><br>
    <div class="d-flex justify-content-between">
        <a href="{{ route('Stagiaire.create') }}">
            <button type="button" class="btn btn-primary">Ajouter</button>
        </a>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Etablissement</th>
                <th scope="col">Branche</th>
                <th scope="col">Niveau</th>
                <th scope="col">Date debut</th>
                <th scope="col">Date fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Stagiaire as $sta)
            <tr> 
                    <td>{{ $sta->id }}</td>
                    <td>{{ $sta->Nom }}</td>
                    <td>{{ $sta->Prenom }}</td>
                    <td>{{ $sta->Etab }}</td>
                    <td>{{ $sta->Branch }}</td>
                    <td>{{ $sta->Niveau }}</td>
                    <td>{{ $sta->Ddebut }}</td>
                    <td>{{ $sta->Dfin }}</td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a href="{{ route('Stagiaire.show', $sta->id) }}">
                            <button type="button" class="btn btn-secondary">
                                <i class='bx bx-show nav_icon'></i>
                            </button>
                            </a>
                            <a href="{{ route('Stagiaire.edit', $sta->id) }}">
                                <button type="button" class="btn btn-warning">
                                    <i class='bx bx-edit nav_icon'></i>
                                </button>
                            </a>
                            <form action="{{ route('Stagiaire.destroy', $sta->id) }}" method="POST" onsubmit="return confirm('Voulez vous vraiment supprimer ce stagiaiare?')">
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