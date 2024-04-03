@extends('base')

@section('content')

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">Aperçu des commandes</h5>
              </div>
            </div>
            <div id="chart"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Commandes</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Code commande</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Code facture</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Date</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Client</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Sujet</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Produits</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Montant</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Statut</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Type de paiement</h6>
                        </th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($commandes as $commande)
                    <tr>
                        <td>{{ $commande->cod_commande }} </td>
                        <td>{{ $commande->cod_facture }} </td>
                        <td>{{ $commande->date_commande  }}</td>
                        @foreach($commande->clients as $client)
                            <td>{{ $client->prenom }} {{ $client->nom }}</td>
                        @endforeach
                        <td>{{ $commande->sujet_commande  }}</td>
                        <td>
                            @foreach($commande->produits as $produit)
                            {{ $produit->designation }}
                            @if ($loop->remaining > 0)
                                {{ ',' }}
                            @endif
                        @endforeach
                        </td>

                        <td>{{ $commande->montant  }}</td>
                        <td>{{ $commande->statut_commande  }}</td>
                        <td>{{ $commande->type_paiement  }}</td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Developed by <a href="" target="_blank" class="pe-1 text-primary text-decoration-underline">MLD</a></p>
    </div>
  </div>

@endsection

@section('script')

<script>
    var chartOptions = {
        series: [{
            name: 'Montant des commandes',
            data: @json($montants)
        }],
        chart: {
            type: 'bar',
            height: 345,
            offsetX: -15,
            toolbar: { show: true },
            foreColor: '#adb0bb',
            fontFamily: 'inherit',
            sparkline: { enabled: false },
        },
        xaxis: {
            categories: @json($dates),
            labels: {
                style: { cssClass: 'grey--text lighten-2--text fill-color' },
            },
        },
        // Autres options de votre graphique
    };

    var chart = new ApexCharts(document.querySelector("#chart"), chartOptions);
    chart.render();
</script>

@endsection
