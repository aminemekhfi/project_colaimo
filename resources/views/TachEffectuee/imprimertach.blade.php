
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<div class=" p-5">
    <a href="javascript:window.print()">

        <button type="button" class="btn btn-secondary">Imprimer</button>

</a>
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
        </tr>
        @endforeach
    </tbody>
</table>

</div>