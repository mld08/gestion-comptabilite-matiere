@extends('base')

@section('content')

    <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="row">
                    <h5 class="col-lg-6 card-title fw-semibold mb-4">Grand Livre des matieres</h5>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-primary" href="{{route('admin.matiere.create')}}">Ajouter une matiere</a>
                    </div>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-success" href="{{route('admin.export.matiere')}}">Exporter en Excel</a>
                    </div>

                </div>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Date</h6>
                            </th>
                            <th class="border-bottom-0" colspan="2">
                                <h6 class="fw-semibold mb-0 text-center">Designation des matieres</h6>
                            </th>
                            <th class="border-bottom-0" colspan="3">
                                <h6 class="fw-semibold mb-0 text-center">Entrées</h6>
                            </th>
                            <th class="border-bottom-0" colspan="3">
                                <h6 class="fw-semibold mb-0 text-center">Sorties</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0 text-center">Prix unitaire</h6>
                            </th>
                            <th class="border-bottom-0" colspan="2">
                                <h6 class="fw-semibold mb-0 text-center">Montant</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0 text-center">Pour mémoire <br> sorties <br> provisoires</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0 text-center">Observations</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Actions</h6>
                            </th>
                        </tr>
                        <tr>
                            <!-- Sous-colonnes pour Designation des matieres -->
                            <th></th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">N° Comptes Nomenclature</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Nature matieres</h6>
                            </th>

                            <!-- Sous-colonnes pour Entrées -->
                            <th class="">
                                <h6 class="fw-semibold mb-0">N° Bon</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Nbre unites</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Nature unite</h6>
                            </th>

                            <!-- Sous-colonnes pour Sorties -->
                            <th class="">
                                <h6 class="fw-semibold mb-0">N° Bon</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Nbre unites</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Nature unite</h6>
                            </th>
                            <th></th>

                            <!-- Sous-colonnes pour Montant -->
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Entrees</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Sorties</h6>
                            </th>

                            <!-- Colonnes vides pour les autres grandes colonnes -->
                            <th></th>
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
                                <td>{{ $matiere->montant_entrees  }} FCFA</td>
                                <td>{{ $matiere->montant_sorties  }} FCFA</td>
                                <td>{{ $matiere->sorties_provisoires  }}</td>
                                <td>{{ $matiere->observations  }}</td>
                                <td class="text-right row">
                                    <a href="{{route('admin.matiere.edit', $matiere)}}" class="col-lg-4 btn btn-primary"><i class="ti ti-edit"></i>Editer</a>
                                    <form class="col-lg-4" action="{{route('admin.matiere.destroy', $matiere)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="ti ti-trash"></i>Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach



                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>

@endsection
