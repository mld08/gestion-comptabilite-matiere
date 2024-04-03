<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Libellé</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $categorie)
            <tr>
                <td>{{ $categorie->id }}</td>
                <td>{{ $categorie->lib_categorie }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
