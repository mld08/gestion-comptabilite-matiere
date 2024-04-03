<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>N° Bon</th>
            <th>Origine des entrées et <br> Destination des sorties</th>
            <th>Entrées</th>
            <th>Sortie Définitive</th>
            <th>Prix Unitaire</th>
            <th>Existant</th>
            <th>Montant de l'Existant</th>
            <th>Pour mémoire sorties provisoires</th>
            <th>Date de retour des matières <br> sorties provisoirement</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comptes as $compte)
            <tr>
                <td>{{ $compte->date }}</td>
                <td>{{ $compte->no_bon }}</td>
                <td>{{ $compte->origine_destination }}</td>
                <td>{{ $compte->entrees }}</td>
                <td>{{ $compte->sortie_def }}</td>
                <td>{{ $compte->prix_uni }}</td>
                <td>{{ $compte->existant }}</td>
                <td>{{ $compte->montant_existant }}</td>
                <td>{{ $compte->sorties_provisoires }}</td>
                <td>{{ $compte->date_sorties_provisoires }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
