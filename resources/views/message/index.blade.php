@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Messagerie</h2><br>
    <div>
        <a href="{{ route('message.create') }}">
            <button class="btn btn-success mt-1" type="submit">Envoyer un message</button>
        </a>
    </div><br>
    <div class="container">
    @foreach($message as $m)
    <div class="d-flex justify-content-between">
        <h3>{{ $m->Utilisateur }}</h3>
        <p class="font-weight-lighter" style="color: grey">{{ $m->created_at }}</p>
    </div>
        <p><b>Message :</b> {{ $m->Contenu }}</p><hr>
        @endforeach
    </div>
</div>
@endsection