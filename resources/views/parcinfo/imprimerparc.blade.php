@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<div class=" p-5">

<a href="javascript:window.print()">

        <button type="button" class="btn btn-secondary">Imprimer</button>

</a>
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Département</th>
            <th scope="col">Service</th>
            <th scope="col">Marque Ordi</th>
            <th scope="col">Type écran</th>
            <th scope="col">Marque écran</th>
            <th scope="col">Type marque clavier</th>
            <th scope="col">Type marque souris</th>
            <th scope="col">Système d'éxploitation</th>
            <th scope="col">Antivirus</th>
            <th scope="col">Adresse IP</th>
            <th scope="col">Disque dur</th>
            <th scope="col">RAM</th>
            <th scope="col">Lecteur CD</th>
            <th scope="col">Imprimante</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($parcinfo as $p)
            <tr> 
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->Departement }}</td>
                    <td>{{ $p->Service }}</td>
                    <td>{{ $p->Mord }}</td>
                    <td>{{ $p->TEc }}</td>
                    <td>{{ $p->MEc }}</td>
                    <td>{{ $p->TMClav }}</td>
                    <td>{{ $p->TMSour }}</td>
                    <td>{{ $p->SysExp }}</td>
                    <td>{{ $p->Antivirus }}</td>
                    <td>{{ $p->AdresseIP }}</td>
                    <td>{{ $p->HardDrive }}</td>
                    <td>{{ $p->RAM }}</td>
                    <td>{{ $p->LecteurCD }}</td>
                    <td>{{ $p->Imprimante }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>

