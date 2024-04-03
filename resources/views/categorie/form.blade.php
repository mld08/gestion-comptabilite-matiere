@extends('base')

@section('title', $categorie->exists ? "Editer une categorie" : "Créer une categorie")

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route($categorie->exists ? 'admin.categorie.update' : 'admin.categorie.store', $categorie) }}" method="POST">
                @csrf
                @method($categorie->exists ? 'put' : 'post')
                <div class="mb-3">
                  <label for="lib_categorie" class="form-label">Libellé</label>
                  <input type="text" class="form-control" id="lib_categorie" name="lib_categorie" aria-describedby="emailHelp" value="{{$categorie->lib_categorie}}">
                  <div id="emailHelp" class="form-text">Libellé de la catégorie</div>
                </div>
                <button type="submit" class="btn btn-primary">@if ($categorie->exists)
                    Modifier
                @else
                    Créer
                @endif</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
