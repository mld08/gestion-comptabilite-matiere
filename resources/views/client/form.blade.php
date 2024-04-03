@extends('base')

@section('title', $client->exists ? "Editer un client" : "Créer un client")

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
          <div class="card">
            <div class="card-body">
              <form action="{{ route($client->exists ? 'admin.client.update' : 'admin.client.store', $client) }}" method="POST">
                @csrf
                @method($client->exists ? 'put' : 'post')
                <div class="mb-3 row">
                    <div class="col-lg-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp" value="{{$client->nom}}">
                        <div id="emailHelp" class="form-text">Nom du client</div>
                    </div>
                    <div class="col-lg-6">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="emailHelp" value="{{$client->prenom}}">
                        <div id="emailHelp" class="form-text">Prenom du client</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="societe" class="form-label">Societe</label>
                    <input type="text" class="form-control" id="societe" name="societe" aria-describedby="emailHelp" value="{{$client->societe}}">
                    <div id="emailHelp" class="form-text">Societe du client</div>
                </div>
                <div class="mb-3 row">
                    <div class="col-lg-6">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" aria-describedby="emailHelp" value="{{$client->adresse}}">
                        <div id="emailHelp" class="form-text">Adresse du client</div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ville" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" aria-describedby="emailHelp" value="{{$client->ville}}">
                        <div id="emailHelp" class="form-text">Ville du client</div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-lg-6">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" aria-describedby="emailHelp" value="{{$client->telephone}}">
                        <div id="emailHelp" class="form-text">Nom du client</div>
                    </div>
                    <div class="col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$client->email}}">
                        <div id="emailHelp" class="form-text">Email du client</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">@if ($client->exists)
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
