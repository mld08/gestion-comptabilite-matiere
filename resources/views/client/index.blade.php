@extends('base')

@section('content')

    <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="row">
                    <h5 class="col-lg-6 card-title fw-semibold mb-4">Clients</h5>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-primary" href="{{route('admin.client.create')}}">Ajouter un client</a>
                    </div>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-success" href="{{route('export.client')}}">Exporter en Excel</a>
                    </div>

                </div>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nom complet</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Societe</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Adresse</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Coordonnées</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Actions</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->prenom }} {{ $client->nom }}</td>
                                <td>{{ $client->societe  }}</td>
                                <td>{{ $client->ville  }}, {{ $client->adresse  }}</td>
                                <td>{{ $client->telephone  }} <br> {{ $client->email  }}</td>
                                <td class="text-right row">
                                    <a href="{{route('admin.client.edit', $client)}}" class="col-lg-4 btn btn-primary"><i class="ti ti-edit"></i>Editer</a>
                                    <form class="col-lg-4" action="{{route('admin.client.destroy', $client)}}" method="POST">
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
