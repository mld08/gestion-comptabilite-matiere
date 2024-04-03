@extends('base')

@section('content')

    <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="row">
                    <h5 class="col-lg-6 card-title fw-semibold mb-4">Commandes</h5>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-primary" href="{{route('admin.commande.create')}}">Ajouter une commande</a>
                    </div>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-success" href="{{route('export.commande')}}">Exporter en Excel</a>
                    </div>

                </div>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Code commande</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Code facture</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Date</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Client</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Sujet</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Produits</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Montant</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Statut</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Type de paiement</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Actions</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($commandes as $commande)
                            <tr>
                                <td>{{ $commande->cod_commande }} </td>
                                <td>{{ $commande->cod_facture }} </td>
                                <td>{{ $commande->date_commande  }}</td>
                                @foreach($commande->clients as $client)
                                    <td>{{ $client->prenom }} {{ $client->nom }}</td>
                                @endforeach
                                <td>{{ $commande->sujet_commande  }}</td>
                                <td>
                                    @foreach($commande->produits as $produit)
                                        {{ $produit->designation }}
                                        @if ($loop->remaining > 0)
                                            {{ ',' }}
                                        @endif
                                    @endforeach
                                </td>
                                @foreach($commande->produits as $produit)
                                    {{ $produit->designation }}
                                @endforeach
                                <td>{{ $commande->montant  }}</td>
                                <td>{{ $commande->statut_commande  }}</td>
                                <td>{{ $commande->type_paiement  }}</td>
                                <td class="text-right row">
                                    <a href="{{route('admin.commande.edit', $commande)}}" class="col-lg-8 btn btn-primary"><i class="ti ti-edit"></i>Editer</a>
                                    <form class="col-lg-4" action="{{route('admin.commande.destroy', $commande)}}" method="POST">
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
