
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<div class=" p-5">
    <a href="javascript:window.print()">

        <button type="button" class="btn btn-secondary">Imprimer</button>

</a>
<table class="table text-center">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Code Stagiaire</th>
            <th scope="col">Numéro CIN</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Télephone</th>
            <th scope="col">Email</th>
            <th scope="col">Etablissement</th>
            <th scope="col">Branche</th>
            <th scope="col">Niveau</th>
            <th scope="col">Type stage</th>
            <th scope="col">Date debut</th>
            <th scope="col">Date fin</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Stagiaire as $sta)
        <tr> 
                <td>{{ $sta->id }}</td>
                <td>{{ $sta->CodeStag }}</td>
                <td>{{ $sta->NCIN }}</td>
                <td>{{ $sta->Nom }}</td>
                <td>{{ $sta->Prenom }}</td>
                <td>{{ $sta->DN }}</td>
                <td>{{ $sta->Tel }}</td>
                <td>{{ $sta->Email }}</td>
                <td>{{ $sta->Etab }}</td>
                <td>{{ $sta->Branch }}</td>
                <td>{{ $sta->Niveau }}</td>
                <td>{{ $sta->TyStage }}</td>
                <td>{{ $sta->Ddebut }}</td>
                <td>{{ $sta->Dfin }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>