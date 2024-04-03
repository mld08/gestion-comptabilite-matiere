<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Designation - Spécification</th>
            <th>Quantité</th>
            <th>Date</th>
            <th>Observations</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($besoins as $besoin)
            <tr>
                <td>{{ $besoin->id }}</td>
                <td>{{ $besoin->designation_specification }}</td>
                <td>{{ $besoin->quantite }}</td>
                <td>{{ $besoin->date }}</td>
                <td>{{ $besoin->observations }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
