<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Libellé</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($unites as $unite)
            <tr>
                <td>{{ $unite->id }}</td>
                <td>{{ $unite->lib_unite }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
