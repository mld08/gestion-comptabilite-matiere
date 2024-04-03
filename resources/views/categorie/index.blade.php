@extends('base')

@section('content')

    <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="row">
                    <h5 class="col-lg-6 card-title fw-semibold mb-4">Catégories</h5>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-primary" href="{{route('admin.categorie.create')}}">Ajouter une Catégorie</a>
                    </div>
                    <div class="col-lg-3 text-end">
                        <a class="btn btn-success" href="{{route('export.categorie')}}">Exporter en Excel</a>
                    </div>

                </div>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Libellé</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Actions</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categorie)
                            <tr>
                                <td>{{ $categorie->id }}</td>
                                <td>{{ $categorie->lib_categorie  }}</td>
                                <td class="text-right row">
                                    <a href="{{route('admin.categorie.edit', $categorie)}}" class="col-lg-2 btn btn-primary"><i class="ti ti-edit"></i>Editer</a>
                                    <form class="col-lg-4" action="{{route('admin.categorie.destroy', $categorie)}}" method="POST">
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
