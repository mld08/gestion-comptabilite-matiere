@extends('base')

@section('content')

    <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="row">
                    <h5 class="col-lg-6 card-title fw-semibold mb-4">Grand Livre des Comptes</h5>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-primary" href="{{route('admin.compte.create')}}">Ajouter un compte</a>
                    </div>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-success" href="{{route('admin.export.compte')}}">Exporter en Excel</a>
                    </div>

                </div>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Date</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">N° Bon</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Origine Entrée et <br> Destination Sortie</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Entrées</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Sortie <br> définitive</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Prix <br> unitaire</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Existant</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Montant de <br> l'existant</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Pour mémoire <br> sorties <br> provisoires</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Date de retour <br> des matières <br> sorties <br> provisoirement</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Actions</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($comptes as $compte)
                            <tr>
                                <td>{{ $compte->date }}</td>
                                <td>{{ $compte->no_bon  }}</td>
                                <td>{{ $compte->origine_destination  }}</td>
                                <td>{{ $compte->entrees  }}</td>
                                <td>{{ $compte->sortie_def  }}</td>
                                <td>{{ $compte->prix_uni  }}</td>
                                <td>{{ $compte->existant  }}</td>
                                <td>{{ $compte->montant_existant  }}</td>
                                <td>{{ $compte->sorties_provisoires  }}</td>
                                <td>{{ $compte->date_sorties_provisoires  }}</td>
                                <td class="text-right row">
                                    <a href="{{route('admin.compte.edit', $compte)}}" class="col-lg-4 btn btn-primary"><i class="ti ti-edit"></i>Editer</a>
                                    <form class="col-lg-4" action="{{route('admin.compte.destroy', $compte)}}" method="POST">
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
