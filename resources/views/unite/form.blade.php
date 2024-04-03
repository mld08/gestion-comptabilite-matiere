@extends('base')

@section('title', $unite->exists ? "Editer une unité" : "Créer une unité")

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route($unite->exists ? 'admin.unite.update' : 'admin.unite.store', $unite) }}" method="POST">
                @csrf
                @method($unite->exists ? 'put' : 'post')
                <div class="mb-3">
                  <label for="lib_unite" class="form-label">Libellé</label>
                  <input type="text" class="form-control" id="lib_unite" name="lib_unite" aria-describedby="emailHelp" value="{{$unite->lib_unite}}">
                  <div id="emailHelp" class="form-text">Libellé de la catégorie</div>
                </div>
                <button type="submit" class="btn btn-primary">@if ($unite->exists)
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
