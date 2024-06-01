<table>
    <thead>
        <tr>
            <th>Date</th>
            <th colspan="2">Designation des matieres</th>
            <th colspan="3">Entrées</th>
            <th colspan="3">Sorties</th>
            <th>Prix unitaire</th>
            <th colspan="2">Montant</th>
            <th>Pour mémoire sorties provisoires</th>
            <th>Observations</th>
        </tr>
        <tr>
            <!-- Sous-colonnes pour Designation des matieres -->
            <th></th>
            <th>N° Comptes Nomenclature</th>
            <th>Nature matieres</th>

            <!-- Sous-colonnes pour Entrées -->
            <th>N° du Bon</th>
            <th>Nombre unites</th>
            <th>Nature unite</th>


            <!-- Sous-colonnes pour Sorties -->
            <th>N° du Bon</th>
            <th>Nombre unites</th>
            <th>Nature unite</th>
            <th></th>

            <!-- Sous-colonnes pour Montant -->
            <th>Entrees</th>
            <th>Sorties</th>

            <!-- Colonnes vides pour les autres grandes colonnes -->
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($matieres as $matiere)
            <tr>
                <td>{{ $matiere->date_operation }}</td>
                <td>{{ $matiere->no_comptes_nomenclature  }}</td>
                <td>{{ $matiere->nature_matieres  }}</td>
                <td>{{ $matiere->entrees_no_bon  }}</td>
                <td>{{ $matiere->entrees_nbre_unites  }}</td>
                <td>{{ $matiere->entrees_nature_unite  }}</td>
                <td>{{ $matiere->sorties_no_bon  }}</td>
                <td>{{ $matiere->sorties_nbre_unites  }}</td>
                <td>{{ $matiere->sorties_nature_unite  }}</td>
                <td>{{ $matiere->prix_uni  }} FCFA</td>
                <td>{{ $matiere->montant_entrees  }}</td>
                <td>{{ $matiere->montant_sorties  }}</td>
                <td>{{ $matiere->sorties_provisoires  }}</td>
                <td>{{ $matiere->observations  }}</td>
            </tr>
        @endforeach



    </tbody>
  </table>
