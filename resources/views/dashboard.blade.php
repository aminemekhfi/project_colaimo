@extends('.layouts.app')
@section('content')
<div class="container-md">
    <h2>Salut! {{ Auth::user()->name }}</h2>
</div>
@endsection