@extends('base')

@section('title', $commande->exists ? "Editer une commande" : "Créer une commande")

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route($commande->exists ? 'admin.commande.update' : 'admin.commande.store', $commande) }}" method="POST">
                @csrf
                @method($commande->exists ? 'put' : 'post')
                <div class="mb-3 row">
                    <div class="col-lg-6">
                        <label for="cod_commande" class="form-label">Code commande</label>
                        <input type="text" class="form-control" id="cod_commande" name="cod_commande" aria-describedby="emailHelp" value="{{$commande->cod_commande}}">
                        <div id="emailHelp" class="form-text">Code de la commande</div>
                    </div>
                    <div class="col-lg-6">
                        <label for="cod_facture" class="form-label">Code de la facture</label>
                        <input type="tel" class="form-control" id="cod_facture" name="cod_facture" aria-describedby="emailHelp" value="{{$commande->cod_facture}}">
                        <div id="emailHelp" class="form-text">Code de la facture</div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-lg-6">
                        <label for="sujet_commande" class="form-label">Sujet Commande</label>
                        <input type="text" class="form-control" id="sujet_commande" name="sujet_commande" aria-describedby="emailHelp" value="{{$commande->sujet_commande}}">
                        <div id="emailHelp" class="form-text">Sujet de la commande</div>
                    </div>
                    <div class="col-lg-6">
                        <label for="montant" class="form-label">Montant</label>
                        <input type="text" class="form-control" id="montant" name="montant" aria-describedby="emailHelp" value="{{$commande->montant}}">
                        <div id="emailHelp" class="form-text">Montant</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="date_commande" class="form-label">Date</label>

                    <input type="date" class="form-control" id="date_commande" name="date_commande" aria-describedby="emailHelp" value="{{$commande->date_commande}}">
                    <div id="emailHelp" class="form-text">Date de la commande</div>
                </div>

                <div class="mb-3 row">
                    <div class="col-lg-6">
                        <label for="statut_commande" class="form-label">Statut commande</label>
                        <input type="text" class="form-control" id="statut_commande" name="statut_commande" aria-describedby="emailHelp" value="{{$commande->statut_commande}}">
                        <div id="emailHelp" class="form-text">Statut de la commande</div>
                    </div>
                    <div class="col-lg-6">
                        <label for="type_paiement" class="form-label">Type de Paiement</label>
                        <input type="text" class="form-control" id="type_paiement" name="type_paiement" aria-describedby="emailHelp" value="{{$commande->type_paiement}}">
                        <div id="emailHelp" class="form-text">Type de Paiement</div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-lg-6">
                        @include('shared.select', ['name' => 'produits', 'label'=>'Produits', 'class'=>'form-control', 'value' => $commande->produits()->pluck('id'), 'multiple' => true, 'produit' => $produit])
                    </div>
                    <div class="col-lg-6">
                        @include('shared.select', ['name' => 'clients', 'label'=>'Client', 'class'=>'form-control', 'value' => $commande->clients()->pluck('id'), 'client' => $client])
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">@if ($commande->exists)
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
