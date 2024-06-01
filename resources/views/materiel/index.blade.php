@extends('base')

@section('content')

    <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="row">
                    <h5 class="col-lg-6 card-title fw-semibold mb-4">Matériels informatiques</h5>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-primary" href="{{route('admin.materiel.create')}}">Ajouter un matériel</a>
                    </div>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-success" href="{{route('export.materiel')}}">Exporter en excel</a>
                    </div>

                </div>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Référence</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Designation</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Quantité</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Prix unitaire</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Prix total</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Fournisseur</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">RC Fournisseur</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Téléphone</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Adresse</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Actions</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($materiels as $materiel)
                            <tr>
                                <td>{{ $materiel->reference }}</td>
                                <td>{{ $materiel->designation  }}</td>
                                <td>{{ $materiel->quantite }}</td>
                                <td>{{ number_format($materiel->prix_unitaire, 0, ',', ' ')  }} FCFA</td>
                                <td>{{ number_format($materiel->prix_total, 0, ',', ' ')  }} FCFA</td>
                                <td>{{ $materiel->fournisseur }}</td>
                                <td>{{ $materiel->rc_fournisseur }}</td>
                                <td>{{ $materiel->adresse }}</td>
                                <td>{{ $materiel->email }}</td>
                                <td>{{ $materiel->telephone }}</td>
                                <td class="text-right row">
                                    <a href="{{route('admin.materiel.edit', $materiel)}}" class="col-lg-6 btn btn-primary btn-sm"><i class="ti ti-edit"></i>Editer</a>
                                    <form class="col-lg-4" action="{{route('admin.materiel.destroy', $materiel)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i>Supprimer</button>
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
