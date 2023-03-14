@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Utilisateur</h2><br>
    <div class="d-flex justify-content-between">


        <a href="{{ route('User.create') }}">
            <button type="button" class="btn btn-primary">Ajouter</button>
        </a>
    </div>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Nom complet</th>
                <th scope="col">Email</th>  
                <th scope="col">type</th>  

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($User as $us)
            <tr> 
                    <td>{{ $us->name }}</td>
                    <td>{{ $us->email }}</td>
                    <td>{{ $us->type }}</td>
                    
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a href="{{ route('User.show', $us->id) }}">
                            <button type="button" class="btn btn-secondary">
                                <i class='bx bx-show nav_icon'></i>
                            </button>
                            </a>
                            <a href="{{ route('User.edit', $us->id) }}">
                                <button type="button" class="btn btn-warning">
                                    <i class='bx bx-edit nav_icon'></i>
                                </button>
                            </a>
                            <form action="{{ route('User.destroy', $us->id) }}" method="POST" onsubmit="return confirm('Voulez vous vraiment supprimer ce utilisateur?')">
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