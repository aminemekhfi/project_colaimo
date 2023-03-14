@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<div class=" p-5">
    <a href="javascript:window.print()">

        <button type="button" class="btn btn-secondary">Imprimer</button>

</a>
<table class="table text-center">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Code</th>
        <th scope="col">Date</th>
        <th scope="col">Type machine</th>
        <th scope="col">Service émeteur</th>
        <th scope="col">Service récepteur</th>
        <th scope="col">Commentaire</th>
    </thead>
    @foreach($changmat as $c)
    <tbody>
        <td>{{ $c->id }}</td>
        <td>{{ $c->Code }}</td>
        <td>{{ $c->Date }}</td>
        <td>{{ $c->TypeMach }}</td>
        <td>{{ $c->SrvEmet }}</td>
        <td>{{ $c->SrvRec }}</td>
        <td>{{ $c->Commentaire }}</td>
    </tbody>
    @endforeach
</table>