@extends('layout.SideMenuLayout')

@section('links')
<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="/css/dashboard_style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('inside_content')

<body class="g-sidenav-show  bg-gray-200">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">MENU</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Les Cas</li>
          </ol>
        </nav>
      </div>
    </nav>
  <div id="main-body" style="z-index:1;">
  <style>
    .main-content{
      width:80%;
      margin-left:170px;
    }
    tbody{
      height:200px;
    }
  </style>
  <main class="main-content position-relative max-height-vh-100 border-radius-lg ">
    @if(session()->has('StateStoreSuccess'))
        <script>
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ session('StateStoreSuccess') }}',
            showConfirmButton: false,
            timer: 4100
          })
        </script>
    @endif
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between">
                <h5 class="text-white text-capitalize ps-3" style="margin-top:1.7%">Les Cas Urgents</h5>
                <button class="button-28 mr-3" style="color:white;border-color:white;" role="button" onclick={window.location.href="{{ route('state.create') }}";}>Ajouter Cas Urgent</button>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Patient</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Traité Par</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Crée Dans Le</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Télephone</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($cases as $case)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                              <img src="../profile_2.png" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $case->firstname }} {{ $case->lastname }}</h6>
                            @if($case->IDREG > 1 and $case->IDCS >1)
                                <p class="text-xs text-secondary mb-0">IDCS : {{ $case->IDCS }} / IDREG : {{ $case->IDREG }}</p>
                            @elseif($case->IDREG > 1)
                                <p class="text-xs text-secondary mb-0">IDREG : {{ $case->IDREG }}</p>
                            @elseif($case->IDCS >1)
                                <p class="text-xs text-secondary mb-0">IDCS : {{ $case->IDCS }}</p>
                            @else
                                <p class="text-xs text-secondary mb-0">Pas De IDCS / IDREG</p>
                            @endif
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $case->details }}</p>
                        <p class="text-xs text-secondary mb-0">{{ $case->Hospital }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        @if($case->status == 0)
                            <span class="badge badge-sm bg-gradient-secondary">Fermé</span>
                        @elseif($case->status == 1)
                            <span class="badge badge-sm bg-gradient-success">En Cours</span>
                        @endif    
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $case->created_at }}</span>
                      </td>
                      <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">{{ $case->phone }}</span>
                      </td>
                    </tr>
                    @empty
                      <center><h3 class="text-secondary">Pas De Cas à Afficher !</h3></center>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </main>
  </div>
  <center>{{ $cases->links() }}</center>
  <!--   Core JS Files   -->
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

@endsection