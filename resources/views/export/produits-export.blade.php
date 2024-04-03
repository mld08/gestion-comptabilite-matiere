<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Unité</th>
            <th>Catégorie</th>
            <th>Code produit</th>
            <th>Désignation</th>
            <th>Quantité en stock</th>
            <th>Quantité minimale</th>
            <th>Prix unitaire</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produits as $produit)
            <tr>
                <td>{{$produit->id}}</td>
                <td>{{ $produit->unite->lib_unite }}</td>
                <td>{{ $produit->categorie->lib_categorie }}</td>
                <td>{{ $produit->cod_produit }}</td>
                <td>{{ $produit->designation }}</td>
                <td>{{ $produit->quantite_stock }}</td>
                <td>{{ $produit->quantite_minimale }}</td>
                <td>{{ number_format($produit->prix_unitaire, 0, ',', ' ') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
