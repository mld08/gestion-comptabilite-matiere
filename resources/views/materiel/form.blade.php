@extends('base')

@php
    $value ??='';
@endphp

@section('title', $materiel->exists ? "Editer un materiel" : "Créer un materiel")

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route($materiel->exists ? 'admin.materiel.update' : 'admin.materiel.store', $materiel) }}" method="POST">
                @csrf
                @method($materiel->exists ? 'put' : 'post')
                <div class="mb-3 row">
                    <div class="col-lg-6">
                        <label for="reference" class="form-label">Référence</label>
                        <input type="text" class="form-control" id="reference" name="reference" aria-describedby="emailHelp" value="{{$materiel->reference}}">
                        <div id="emailHelp" class="form-text">Référence du matériel</div>
                    </div>
                    <div class="col-lg-6">
                        <label for="designation" class="form-label">Désignation</label>
                        <input type="text" class="form-control" id="designation" name="designation" aria-describedby="emailHelp" value="{{$materiel->designation}}">
                        <div id="emailHelp" class="form-text">Désignation du materiel</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="quantite_stock" class="form-label">Quantité</label>
                    <input type="text" class="form-control" id="quantite" name="quantite" aria-describedby="emailHelp" value="{{$materiel->quantite}}">
                    <div id="emailHelp" class="form-text">Quantité du materiel</div>
                </div>
                <div class="mb-3">
                    <label for="prix_unitaire" class="form-label">Prix Unitaire</label>
                    <input type="text" class="form-control" id="prix_unitaire" name="prix_unitaire" aria-describedby="emailHelp" value="{{$materiel->prix_unitaire}}">
                    <div id="emailHelp" class="form-text">Prix unitaire du materiel</div>
                </div>
                <div class="mb-3">
                    <label for="prix_unitaire" class="form-label">Prix Total</label>
                    <input type="text" class="form-control" id="prix_total" name="prix_total" aria-describedby="emailHelp" value="{{$materiel->prix_total}}">
                    <div id="emailHelp" class="form-text">Prix total du materiel</div>
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Fournisseur</label>
                    <input type="text" class="form-control" id="fournisseur" name="fournisseur" aria-describedby="emailHelp" value="{{$materiel->fournisseur}}">
                    <div id="emailHelp" class="form-text">Nom & Prenom du Fournisseur</div>
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Registre Commerce Fournisseur</label>
                    <input type="text" class="form-control" id="rc_fournisseur" name="rc_fournisseur" aria-describedby="emailHelp" value="{{$materiel->rc_fournisseur}}">
                    <div id="emailHelp" class="form-text">Registre Commerce du Fournisseur</div>
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" aria-describedby="emailHelp" value="{{$materiel->adresse}}">
                    <div id="emailHelp" class="form-text">Adresse du fournisseur</div>
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$materiel->email}}">
                    <div id="emailHelp" class="form-text">Email du fournisseur</div>
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">N° Telephone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" aria-describedby="emailHelp" value="{{$materiel->telephone}}">
                    <div id="emailHelp" class="form-text">N° Telephone du fournisseur</div>
                </div>
                <button type="submit" class="btn btn-primary">@if ($materiel->exists)
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
