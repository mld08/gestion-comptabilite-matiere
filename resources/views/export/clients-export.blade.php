<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Societe</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Telephone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->prenom }}</td>
                <td>{{ $client->nom }}</td>
                <td>{{ $client->societe }}</td>
                <td>{{ $client->adresse }}</td>
                <td>{{ $client->ville }}</td>
                <td>{{ $client->telephone }}</td>
                <td>{{ $client->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
