@extends('base')

@section('title', $matiere->exists ? "Editer un matiere" : "Créer un matiere")

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route($matiere->exists ? 'admin.matiere.update' : 'admin.matiere.store', $matiere) }}" method="POST">
                @csrf
                @method($matiere->exists ? 'put' : 'post')
                <div class="mb-5">
                  <label for="date_operation" class="form-label">Date des opérations</label>
                  <input type="date" class="form-control @error('date_operation') is-invalid @enderror" id="date_operation" name="date_operation" aria-describedby="emailHelp" value="{{$matiere->date_operation}}">
                  @error('date_operation')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  <div id="emailHelp" class="form-text">Date</div>
                </div>
                <div class="row mb-5 border p-2">
                    <h4>Désignation des matières</h4>
                    <div class="col-md-6">
                        <label for="no_comptes_nomenclature" class="form-label">N° Comptes Nomenclature</label>
                        <input type="text" class="form-control @error('no_comptes_nomenclature') is-invalid @enderror" id="no_comptes_nomenclature" name="no_comptes_nomenclature" aria-describedby="emailHelp" value="{{$matiere->no_comptes_nomenclature}}">
                        @error('no_comptes_nomenclature')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">N° Comptes Nomenclature</div>
                    </div>
                    <div class="col-md-6">
                        <label for="nature_matieres" class="form-label">Nature des matières</label>
                        <input type="text" class="form-control @error('nature_matieres') is-invalid @enderror" id="nature_matieres" name="nature_matieres" aria-describedby="emailHelp" value="{{$matiere->nature_matieres}}">
                        @error('nature_matieres')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">Nature matières</div>
                    </div>
                </div>
                <div class="row mb-5 border p-2">
                    <h4>Entrées</h4>
                    <div class="col-md-4">
                        <label for="entrees_no_bon" class="form-label">N° du Bon</label>
                        <input type="text" class="form-control @error('entrees_no_bon') is-invalid @enderror" id="entrees_no_bon" name="entrees_no_bon" aria-describedby="emailHelp" value="{{$matiere->entrees_no_bon}}">
                        @error('entrees_no_bon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">N° Bon</div>
                    </div>
                    <div class="col-md-4">
                        <label for="entrees_nbre_unites" class="form-label">Nombre unités</label>
                        <input type="text" class="form-control @error('entrees_nbre_unites') is-invalid @enderror" id="entrees_nbre_unites" name="entrees_nbre_unites" aria-describedby="emailHelp" value="{{$matiere->entrees_nbre_unites}}">
                        @error('entrees_nbre_unites')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">Nombre unités</div>
                    </div>
                    <div class="col-md-4">
                        <label for="entrees_nature_unite" class="form-label">Nature unité</label>
                        <input type="text" class="form-control @error('entrees_nature_unite') is-invalid @enderror" id="entrees_nature_unite" name="entrees_nature_unite" aria-describedby="emailHelp" value="{{$matiere->entrees_nature_unite}}">
                        @error('entrees_nature_unite')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">Nature unité</div>
                    </div>
                </div>
                <div class="row mb-5 border p-2">
                    <h4>Sorties</h4>
                    <div class="col-md-4">
                        <label for="sorties_no_bon" class="form-label">N° du Bon</label>
                        <input type="text" class="form-control @error('sorties_no_bon') is-invalid @enderror" id="sorties_no_bon" name="sorties_no_bon" aria-describedby="emailHelp" value="{{$matiere->sorties_no_bon}}">
                        @error('sorties_no_bon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">N° Bon</div>
                    </div>
                    <div class="col-md-4">
                        <label for="sorties_nbre_unites" class="form-label">Nombre unités</label>
                        <input type="text" class="form-control @error('sorties_nbre_unites') is-invalid @enderror" id="sorties_nbre_unites" name="sorties_nbre_unites" aria-describedby="emailHelp" value="{{$matiere->sorties_nbre_unites}}">
                        @error('sorties_nbre_unites')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">Nombre unité</div>
                    </div>
                    <div class="col-md-4">
                        <label for="sorties_nature_unite" class="form-label">Nature unité</label>
                        <input type="text" class="form-control @error('sorties_nature_unite') is-invalid @enderror" id="sorties_nature_unite" name="sorties_nature_unite" aria-describedby="emailHelp" value="{{$matiere->sorties_nature_unite}}">
                        @error('sorties_nature_unite')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">Nature unité</div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="prix_uni" class="form-label">Prix unitaire</label>
                    <input type="text" class="form-control @error('prix_uni') is-invalid @enderror" id="prix_uni" name="prix_uni" aria-describedby="emailHelp" value="{{$matiere->prix_uni}}">
                    @error('prix_uni')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="emailHelp" class="form-text">Prix unitaire</div>
                </div>
                <div class="row mb-5 border p-2">
                    <h4>Montant</h4>
                    <div class="col-md-6">
                        <label for="montant_entrees" class="form-label">Montant Entrées</label>
                        <input type="text" class="form-control @error('montant_entrees') is-invalid @enderror" id="montant_entrees" name="montant_entrees" aria-describedby="emailHelp" value="{{$matiere->montant_entrees}}">
                        @error('montant_entrees')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">Montant entrees</div>
                    </div>
                    <div class="col-md-6">
                        <label for="montant_sorties" class="form-label">Montant Sorties</label>
                        <input type="text" class="form-control @error('montant_sorties') is-invalid @enderror" id="montant_sorties" name="montant_sorties" aria-describedby="emailHelp" value="{{$matiere->montant_sorties}}">
                        @error('montant_sorties')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text">Montant sorties</div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="sorties_provisoires" class="form-label">Pour mémoire sorties provisoires</label>
                    <input type="text" class="form-control @error('sorties_provisoires') is-invalid @enderror" id="sorties_provisoires" name="sorties_provisoires" aria-describedby="emailHelp" value="{{$matiere->sorties_provisoires}}">
                    @error('sorties_provisoires')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="emailHelp" class="form-text">Sorties provisoires</div>
                </div>
                <div class="mb-3">
                    <label for="observations" class="form-label">Observations</label>
                    <input type="text" class="form-control @error('observations') is-invalid @enderror" id="observations" name="observations" aria-describedby="emailHelp" value="{{$matiere->observations}}">
                    @error('observations')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="emailHelp" class="form-text">Observations</div>
                </div>
                <button type="submit" class="btn btn-primary">@if ($matiere->exists)
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
