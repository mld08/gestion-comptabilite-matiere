@extends('base')

@section('title', $besoin->exists ? "Editer un besoin" : "Créer un besoin")

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route($besoin->exists ? 'admin.besoin.update' : 'admin.besoin.store', $besoin) }}" method="POST">
                @csrf
                @method($besoin->exists ? 'put' : 'post')
                <div class="mb-3">
                  <label for="designation_specification" class="form-label">Designation - Spécification</label>
                  <input type="text" class="form-control" id="designation_specification" name="designation_specification" aria-describedby="emailHelp" value="{{$besoin->designation_specification}}">
                  <div id="emailHelp" class="form-text">Designation</div>
                </div>
                <div class="mb-3">
                    <label for="quantite" class="form-label">Quantité</label>
                    <input type="text" class="form-control" id="quantite" name="quantite" aria-describedby="emailHelp" value="{{$besoin->quantite}}">
                    <div id="emailHelp" class="form-text">Quantité</div>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp" value="{{$besoin->date}}">
                    <div id="emailHelp" class="form-text">Date</div>
                </div>
                <div class="mb-3">
                    <label for="observations" class="form-label">Observations</label>
                    <input type="text" class="form-control" id="observations" name="observations" aria-describedby="emailHelp" value="{{$besoin->observations}}">
                    <div id="emailHelp" class="form-text">Observations</div>
                </div>
                <button type="submit" class="btn btn-primary">@if ($besoin->exists)
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
