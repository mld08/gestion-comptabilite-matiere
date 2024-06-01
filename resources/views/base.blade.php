<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion Comptabilité Matière</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/tom-select.css')}}" />

  <style>
    .flash-message {
      position: fixed;
      top: 40px;
      right: 40px;
      z-index: 9999;
      display: none;
    }
  </style>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>

        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="" class="text-center ">
                <h1 class="fs-6">Gestion Comptabilité Matière</h1>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.home')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Pages</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.carburant.index')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-barrel"></i>
                        </span>
                        <span class="hide-menu">Carburant</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.besoin.index')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-asset"></i>
                        </span>
                        <span class="hide-menu">Etat des besoins</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.compte.index')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-asset"></i>
                        </span>
                        <span class="hide-menu">Grand Livre des Comptes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.matiere.index')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-asset"></i>
                        </span>
                        <span class="hide-menu">Journal des Matieres</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.materiel.index')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-asset"></i>
                        </span>
                        <span class="hide-menu">Matériels informatiques</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.produit.index')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-package"></i>
                        </span>
                        <span class="hide-menu">Produits</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.client.index')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Client</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.commande.index')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-truck-delivery"></i>
                        </span>
                        <span class="hide-menu">Commande</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.categorie.index')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-category"></i>
                        </span>
                        <span class="hide-menu">Catégorie</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.unite.index')}}" aria-expanded="false">
                        <span>
                        <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Unité</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                    <i class="ti ti-bell-ringing"></i>
                    <div class="notification bg-primary rounded-circle"></div>
                </a>
                </li>
            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{asset('assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                    <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-user fs-6"></i>
                        <p class="mb-0 fs-3">My Profile</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-mail fs-6"></i>
                        <p class="mb-0 fs-3">My Account</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-list-check fs-6"></i>
                        <p class="mb-0 fs-3">My Task</p>
                        </a>
                        <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                    </div>
                    </div>
                </li>
                </ul>
            </div>
            </nav>
        </header>
      <!--  Header End -->

      @yield('content')

    </div>
  </div>

  <div id="flash-message" class="flash-message">
    @if(Session::has('error'))
    <div class="alert alert-danger" role="alert">
      {{ Session::get('error') }}
    </div>
    @endif
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>
    @endif
  </div>

<!-- Scripts -->
  <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('assets/js/app.min.js')}}"></script>
  <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('assets/js/tom-select.complete.min.js')}}"></script>

  <script>
    //Tom Select
    new TomSelect('select[multiple]', {plugins: {remove_button: {title: 'Supprimer'}}})
    // Function to display flash message
    function showFlashMessage(type, message) {
      var flashMessage = $('#flash-message');
      flashMessage.html('<div class="alert alert-' + type + '" role="alert">' + message + '</div>').fadeIn();
      setTimeout(function () {
        flashMessage.fadeOut();
      }, 5000); // 5 seconds
    }

    // Check for flash messages and display
    @if(Session::has('error'))
      showFlashMessage('danger', '{{ Session::get('error') }}');
    @endif
    @if(Session::has('success'))
      showFlashMessage('success', '{{ Session::get('success') }}');
    @endif
  </script>

@yield('script')
</body>

</html>
