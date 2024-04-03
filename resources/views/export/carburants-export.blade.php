<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Designation</th>
            <th>Entrée</th>
            <th>Sortie</th>
            <th>Stocks</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($carburants as $carburant)
            <tr>
                <td>{{ $carburant->id }}</td>
                <td>{{ $carburant->designation }}</td>
                <td>{{ $carburant->entree }}</td>
                <td>{{ $carburant->sortie }}</td>
                <td>{{ $carburant->stocks }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
