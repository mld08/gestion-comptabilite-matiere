@extends('base')

@section('content')

    <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="row">
                    <h5 class="col-lg-6 card-title fw-semibold mb-4">Produits</h5>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-primary" href="{{route('admin.produit.create')}}">Ajouter un produit</a>
                    </div>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-success" href="{{route('export.produit')}}">Exporter en excel</a>
                    </div>

                </div>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Unité</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Catégorie</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Code produit</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Designation</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Quantité stock</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Quantité minimale</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Prix unitaire</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Actions</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($produits as $produit)
                            <tr>
                                <td>{{ $produit->unite->lib_unite }}</td>
                                <td>{{ $produit->categorie->lib_categorie }}</td>
                                <td>{{ $produit->cod_produit }}</td>
                                <td>{{ $produit->designation  }}</td>
                                <td>{{ $produit->quantite_stock  }}</td>
                                <td>{{ $produit->quantite_minimale  }}</td>
                                <td>{{ number_format($produit->prix_unitaire, 0, ',', ' ')  }} FCFA</td>
                                <td class="text-right row">
                                    <a href="{{route('admin.produit.edit', $produit)}}" class="col-lg-6 btn btn-primary"><i class="ti ti-edit"></i>Editer</a>
                                    <form class="col-lg-4" action="{{route('admin.produit.destroy', $produit)}}" method="POST">
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
