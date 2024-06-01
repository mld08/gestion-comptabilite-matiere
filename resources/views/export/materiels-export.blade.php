<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Référence</th>
            <th>Désignation</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Prix total</th>
            <th>Fournisseur</th>
            <th>RC Fournisseur</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Telephone</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($materiels as $materiel)
            <tr>
                <td>{{$materiel->id}}</td>
                <td>{{ $materiel->reference }}</td>
                <td>{{ $materiel->designation }}</td>
                <td>{{ $materiel->quantite }}</td>
                <td>{{ number_format($materiel->prix_unitaire, 0, ',', ' ') }}</td>
                <td>{{ number_format($materiel->prix_total, 0, ',', ' ') }}</td>
                <td>{{ $materiel->fournisseur }}</td>
                <td>{{ $materiel->rc_fournisseur }}</td>
                <td>{{ $materiel->email }}</td>
                <td>{{ $materiel->adresse }}</td>
                <td>{{ $materiel->telephone }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
