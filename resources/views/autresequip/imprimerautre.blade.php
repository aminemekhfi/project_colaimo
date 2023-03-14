@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<div class=" p-5">
    <a href="javascript:window.print()">

        <button type="button" class="btn btn-secondary">Imprimer</button>

</a>
<table class="table text-center">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Code équipement</th>
        <th scope="col">Type équipement</th>
        <th scope="col">Marque équipement</th>
        <th scope="col">Série équipement</th>
        <th scope="col">Information équipement</th>
    </thead>
    @foreach($autresequip as $a)
    <tbody>
        <td>{{ $a->id }}</td>
        <td>{{ $a->CodeEquip }}</td>
        <td>{{ $a->TypeEquip }}</td>
        <td>{{ $a->MarEquip }}</td>
        <td>{{ $a->SerieEquip }}</td>
        <td>{{ $a->InfoEquip }}</td>
    </tbody>
    @endforeach
</table>


</div>
