@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Salut! {{ Auth::user()->name }}</h2><br>
    <div class="d-flex justify-content-between">
        <a href="{{ route('parcinfo.create') }}">
            <button type="button" class="btn btn-primary">Ajouter</button>
        </a>
        <a href="{{ route('autresequip.index') }}">
            <button type="button" class="btn btn-warning">Autres équipement</button>
        </a>
        <a href="javascript:window.print()">
            <button type="button" class="btn btn-secondary">Imprimer</button>
        </a>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Département</th>
                <th scope="col">Service</th>
                <th scope="col">Marque Ordi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parcinfo as $p)
            <tr> 
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->Departement }}</td>
                    <td>{{ $p->Service }}</td>
                    <td>{{ $p->Mord }}</td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a href="{{ route('parcinfo.show', $p->id) }}">
                            <button type="button" class="btn btn-secondary">
                                <i class='bx bx-show nav_icon'></i>
                            </button>
                            </a>
                            <a href="{{ route('parcinfo.edit', $p->id) }}">
                                <button type="button" class="btn btn-warning">
                                    <i class='bx bx-edit nav_icon'></i>
                                </button>
                            </a>
                            <form action="{{ route('parcinfo.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Voulez vous vraiment supprimer ce ma?')">
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