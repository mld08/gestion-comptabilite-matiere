@extends('base')

@php
    $value ??='';
@endphp

@section('title', $produit->exists ? "Editer un produit" : "Créer un produit")

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route($produit->exists ? 'admin.produit.update' : 'admin.produit.store', $produit) }}" method="POST">
                @csrf
                @method($produit->exists ? 'put' : 'post')
                <div class="mb-3 row">
                    <div class="col-lg-6">
                        <label for="cod_produit" class="form-label">Code Produit</label>
                        <input type="text" class="form-control" id="cod_produit" name="cod_produit" aria-describedby="emailHelp" value="{{$produit->cod_produit}}">
                        <div id="emailHelp" class="form-text">Code du produit</div>
                    </div>
                    <div class="col-lg-6">
                        <label for="designation" class="form-label">Désignation</label>
                        <input type="text" class="form-control" id="designation" name="designation" aria-describedby="emailHelp" value="{{$produit->designation}}">
                        <div id="emailHelp" class="form-text">Désignation du produit</div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-lg-6">
                        <label for="quantite_stock" class="form-label">Quantité Stock</label>
                        <input type="text" class="form-control" id="quantite_stock" name="quantite_stock" aria-describedby="emailHelp" value="{{$produit->quantite_stock}}">
                        <div id="emailHelp" class="form-text">Quantité Stock du produit</div>
                    </div>
                    <div class="col-lg-6">
                        <label for="quantite_minimale" class="form-label">Quantité minimale</label>
                        <input type="text" class="form-control" id="quantite_minimale" name="quantite_minimale" aria-describedby="emailHelp" value="{{$produit->quantite_minimale}}">
                        <div id="emailHelp" class="form-text">Quantité minimale du produit</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="prix_unitaire" class="form-label">Prix Unitaire</label>
                    <input type="text" class="form-control" id="prix_unitaire" name="prix_unitaire" aria-describedby="emailHelp" value="{{$produit->prix_unitaire}}">
                    <div id="emailHelp" class="form-text">Prix du produit</div>
                </div>
                <div class="mb-3 row">
                    <div class="col-lg-6">
                        @include('shared.select', ['name' => 'unite_id', 'label'=>'Unite', 'class' =>'form-control', 'value' => $produit->unite()->pluck('id'), 'unite' => $unite])
                    </div>
                    <div class="col-lg-6">
                        @include('shared.select', ['name' => 'categorie_id', 'label'=>'Catégorie', 'class' =>'form-control', 'value' => $produit->categorie()->pluck('id'), 'categorie' => $categorie])
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">@if ($produit->exists)
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
