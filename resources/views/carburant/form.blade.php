@extends('base')

@section('title', $carburant->exists ? "Editer un carburant" : "Créer un carburant")

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route($carburant->exists ? 'admin.carburant.update' : 'admin.carburant.store', $carburant) }}" method="POST">
                @csrf
                @method($carburant->exists ? 'put' : 'post')
                <div class="mb-3">
                  <label for="designation" class="form-label">Designation</label>
                  <input type="text" class="form-control" id="designation" name="designation" aria-describedby="emailHelp" value="{{$carburant->designation}}">
                  <div id="emailHelp" class="form-text">Designation</div>
                </div>
                <div class="mb-3">
                    <label for="entree" class="form-label">Entree</label>
                    <select name="entree" id="entree" class="form-control">
                        <option value="gasoil">Gasoil</option>
                        <option value="super">Super</option>
                    </select>
                    <div id="emailHelp" class="form-text">Entrée</div>
                </div>
                <div class="mb-3">
                    <label for="sortie" class="form-label">Sortie</label>
                    <select name="sortie" id="sortie" class="form-control">
                        <option value="gasoil">Gasoil</option>
                        <option value="super">Super</option>
                    </select>
                    <div id="emailHelp" class="form-text">Sortie</div>
                </div>
                <div class="mb-3">
                    <label for="stocks" class="form-label">Stocks</label>
                    <input type="text" class="form-control" id="stocks" name="stocks" aria-describedby="emailHelp" value="{{$carburant->stocks}}">
                    <div id="emailHelp" class="form-text">Nombre en stocks</div>
                </div>
                <button type="submit" class="btn btn-primary">@if ($carburant->exists)
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
