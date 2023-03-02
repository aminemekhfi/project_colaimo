@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Salut! {{ Auth::user()->name }}</h2><br>
    <div class="d-flex justify-content-between">
        <a href="{{ route('autresequip.create') }}">
            <button type="button" class="btn btn-primary">Ajouter</button>
        </a>
    </div>
    <table class="table text-center">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Utilisateur</th>
            <th scope="col">Contenu</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
        </thead>
        @foreach($message as $m)
        <tbody>
            <td>{{ $m->id }}</td>
            <td>{{ $m->Utilisateur }}</td>
            <td>{{ $m->Contenu }}</td>
            <td>{{ $m->Date }}</td>
            <td>
                <div class="d-flex justify-content-evenly">
                    <a href="">
                        <button type="button" class="btn btn-secondary">
                            <i class='bx bx-show nav_icon'></i>
                        </button>
                    </a>
                    <a href="">
                        <button type="button" class="btn btn-warning">
                            <i class='bx bx-edit nav_icon'></i>
                        </button>
                    </a>
                    <form action="" method="POST" onsubmit="return confirm('Voulez vous vraiment supprimer ce ma?')">
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