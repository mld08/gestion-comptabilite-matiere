@extends('base')

@section('title', $compte->exists ? "Editer un compte" : "Créer un compte")

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route($compte->exists ? 'admin.compte.update' : 'admin.compte.store', $compte) }}" method="POST">
                @csrf
                @method($compte->exists ? 'put' : 'post')
                <div class="mb-3">
                  <label for="date" class="form-label">Date</label>
                  <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" aria-describedby="emailHelp" value="{{$compte->date}}">
                  <div id="emailHelp" class="form-text">Date</div>
                  @error('date')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="no_bon" class="form-label">N° Bon</label>
                    <input type="text" class="form-control" id="no_bon" name="no_bon" aria-describedby="emailHelp" value="{{$compte->no_bon}}">
                    <div id="emailHelp" class="form-text">N° Bon</div>
                </div>
                <div class="mb-3">
                    <label for="origine_destination" class="form-label">Origine des entrées et destination des sorties</label>
                    <input type="text" class="form-control" id="origine_destination" name="origine_destination" aria-describedby="emailHelp" value="{{$compte->origine_destination}}">
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="entrees" class="form-label">Entrées</label>
                        <input type="text" class="form-control" id="entrees" name="entrees" aria-describedby="emailHelp" value="{{$compte->entrees}}">
                        <div id="emailHelp" class="form-text">Entrées</div>
                    </div>
                    <div class="col-md-6">
                        <label for="sortie_def" class="form-label">Sortie définitive</label>
                        <input type="text" class="form-control" id="sortie_def" name="sortie_def" aria-describedby="emailHelp" value="{{$compte->sortie_def}}">
                        <div id="emailHelp" class="form-text">Sortie</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="prix_uni" class="form-label">Prix unitaire</label>
                    <input type="text" class="form-control" id="prix_uni" name="prix_uni" aria-describedby="emailHelp" value="{{$compte->prix_uni}}">
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="existant" class="form-label">Existant</label>
                        <input type="text" class="form-control" id="existant" name="existant" aria-describedby="emailHelp" value="{{$compte->existant}}">
                        <div id="emailHelp" class="form-text">Existant</div>
                    </div>
                    <div class="col-md-6">
                        <label for="montant_existant" class="form-label">Montant de l'existant</label>
                        <input type="text" class="form-control" id="montant_existant" name="montant_existant" aria-describedby="emailHelp" value="{{$compte->montant_existant}}">
                        <div id="emailHelp" class="form-text">Montant</div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="sorties_provisoires" class="form-label">Pour mémoire sorties provisoires</label>
                        <input type="text" class="form-control" id="sorties_provisoires" name="sorties_provisoires" aria-describedby="emailHelp" value="{{$compte->sorties_provisoires}}">
                        <div id="emailHelp" class="form-text">Sorties provisoires</div>
                    </div>
                    <div class="col-md-6">
                        <label for="date_sorties_provisoires" class="form-label">Date de retour des matières sorties provisoiremment</label>
                        <input type="date" class="form-control" id="date_sorties_provisoires" name="date_sorties_provisoires" aria-describedby="emailHelp" value="{{$compte->date_sorties_provisoires}}">
                        <div id="emailHelp" class="form-text">Date sorties provisoires</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">@if ($compte->exists)
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
