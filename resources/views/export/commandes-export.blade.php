<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Code commande</th>
            <th>Code facture</th>
            <th>Date</th>
            <th>Client</th>
            <th>Sujet</th>
            <th>Produits</th>
            <th>Montant</th>
            <th>Statut</th>
            <th>Type de paiement</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($commandes as $commande)
            <tr>
                <td>{{ $commande->id }}</td>
                <td>{{ $commande->cod_commande }}</td>
                <td>{{ $commande->cod_facture }}</td>
                <td>{{ $commande->date_commande }}</td>
                <td>{{ $commande->clients->implode('prenom', ' ') }} {{ $commande->clients->implode('nom', ' ') }}</td>
                <td>{{ $commande->sujet_commande }}</td>
                <td>{{ $commande->produits->implode('designation', ', ') }}</td>
                <td>{{ $commande->montant }}</td>
                <td>{{ $commande->statut_commande }}</td>
                <td>{{ $commande->type_paiement }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
