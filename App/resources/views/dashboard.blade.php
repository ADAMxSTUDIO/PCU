@extends('layout.SideMenuLayout')

@section('links')
<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="/assets/img/favicon.png">
<!--Fonts and icons-->
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
@endsection

@section('inside_content')

<!--------------Progress Bar Cases------------------------------------------------!-->
        @php
          use App\Models\State;

          $state         =  State::All();
          $state_ferme   =  State::where("status","=",1)->get();
          $state_ouvert  =  State::where("status","=",0)->get();

          $state_count   =  $state->count();
          $state_ferme_count  =  $state_ferme->count();
          $state_ouvert_count =  $state_ouvert->count();

          function PercentageOfCases($countOf,$countAll)
          {
            return @($countOf/$countAll)*100 ;
          }
          
        @endphp

@if(Auth::user()->hasAdmin == 1 )
        <h2 class="progress-stacked case" style="height:30px;color:white;background:transparent;">Progress Des Cas :</h2>
      <div class="progress-stacked case">
        <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: {{ PercentageOfCases($state_ferme_count,$state_count) }}%">
          <div class="progress-bar bg-danger" style="height: 125%">Fermé ({{ substr(PercentageOfTreat($state_ferme_count,$state_count), 0, 2) }}%)</div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: {{ PercentageOfCases($state_ferme_count,$state_count) }}%">
          <div class="progress-bar bg-success" style="height: 125%">En Cours ({{ substr(PercentageOfTreat($state_ouvert_count,$state_count), 0, 2) }}%)</div>
        </div>
      </div>

      <style>
        .progress-stacked.case{
          position: absolute;
          width:400px;
          height: 20px;
          left:46.5%;
          bottom:60.5%;
          z-index: 50;
          font-size: 20px;
        }
      </style>
@endif
<!--------------Progress Bar------------------------------------------------!-->

<!--------------Progress Bar Treatments------------------------------------------------!-->

        @php
          use App\Models\Treatment;

          $treatment    =  Treatment::All();
          $trea_ferme   =  Treatment::where("isClosed","=",1)->get();
          $trea_ouvert  =  Treatment::where("isClosed","=",0)->get();

          $treatment_count   =  $treatment->count();
          $trea_ferme_count  =  $trea_ferme->count();
          $trea_ouvert_count =  $trea_ouvert->count();

          function PercentageOfTreat($countOf,$countAll)
          {
            return @($countOf/$countAll)*100 ;
          }
          
        @endphp

@if(Auth::user()->hasAdmin == 1 )
          <h2 class="progress-stacked treat" style="height:30px;color:white;background:transparent;">Progress Des Traitements :</h2>
        <div class="progress-stacked treat">
          <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width:{{ PercentageOfTreat($trea_ferme_count,$treatment_count) }}%">
            <div class="progress-bar bg-danger" style="height: 125%">Fermé ({{ substr(PercentageOfTreat($trea_ferme_count,$treatment_count), 0, 2) }}%)</div>
          </div>
          <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:{{ PercentageOfTreat($trea_ouvert_count,$treatment_count) }}%">
            <div class="progress-bar bg-success" style="height: 125%">En Cours ({{ substr(PercentageOfTreat($trea_ouvert_count,$treatment_count), 0, 2) }}%)</div>
          </div>
        </div>

      <style>
        .progress-stacked.treat{
          position: absolute;
          width:400px;
          height: 20px;
          left:46.5%;
          bottom:50%;
          z-index: 50;
          font-size: 20px;
        }
      </style>
@endif
<!--------------Progress Bar------------------------------------------------!-->

<body class="g-sidenav-show bg-gray-200">
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" style="left:8%;height:4.5%" data-scroll="true">
      <div class="container-fluid py-1 px-3 " style="margin-left:165px">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">MENU</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
          </ol>
        </nav>
      </div>
</nav>
<div id="main-body" style="z-index:1;">
  <div class="main-content position-relative max-height-vh-100 h-100" style="margin-left:170px;width:85%;">
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-1" style="background-image: url('/assets/img/blur-hospital.jpg');margin-top:-310px">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
<style>
.backdrop_user{
  position: absolute;
  width:833px;
  height: 180px;
  background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
  z-index: 1;
  top:11.7%;
  left:6%;
  border: 2px outset #b2b2b2;
  border-radius: 20px;
  box-shadow: 15px 12px 20px rgba(0, 0, 0, 0.3);
}
</style>
<div class="backdrop_user"></div>
<div class="move-top" style="margin-top:-240px;">      
      <div class="card card-body mx-3 mx-md-4 mt-n6" style="height:530px;">
        <div class="row gx-4 mb-2" style="z-index:22;border: 2px inset #b2b2b2;border-radius: 20px;width:220px;
                                          margin-left:5px;margin-top:5px;padding:5px 5px;">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              @if(Auth::user()->hasAdmin == 1)
                <img src="../profile.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              @else
                <img src="../profile_2.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              @endif
            </div>
          </div>
          <div class="col-auto my-auto" >
            <div class="h-100">
              @foreach($DashUsers as $DashUser)
                  <h5 class="mb-1" style="margin-top:5px;color:white;">
                    {{ $DashUser->firstname }} {{ $DashUser->lastname }}
                  </h5>
                  <p class="mb-0 font-weight-normal text-sm" style="color:white;">
                    <strong>Role : </strong>{{ $DashUser->label }}
                  </p>
            @endforeach      
            </div>
          </div>
        </div>
        <div class="row" style="margin-left:90px;">
            <div class="col-12 mt-4">
              <div class="row" style="width:740px;margin-top:15px;">
              <div class="mb-2 ps-3">
                <h5 class="text-sm"><strong>Les Actions</strong></h5>
              </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 ml-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="../assets/img/blur-hospital.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">PROFILE</p>
                      <a href="javascript:;">
                        <h5>
                          informations Utilisateur
                        </h5>
                      </a>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0" onclick="window.location.href= '{{ route('dashboard') }}' ">Voir La Page</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="../pexels-louis-bauer-249348.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">CAS</p>
                      <a href="javascript:;">
                        <h5>
                          Les Cas Des Patients
                        </h5>
                      </a>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0" onclick="window.location.href= '{{ route('Case_Show') }}' ">Voir La Page</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="card-header p-0 mt-n4 mx-3">
                      <a class="d-block shadow-xl border-radius-xl">
                        <img src="../pexels-mali-maeder-69686.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                      </a>
                    </div>
                    <div class="card-body p-3">
                      <p class="mb-0 text-sm">TRAITEMENT</p>
                      <a href="javascript:;">
                        <h5>
                          Traitement Des Cas
                        </h5>
                      </a>
                      <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0" onclick="window.location.href= '' ">Voir La Page</button>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
      </div>
    </div>
    
    </div>
        </div>
      </div>
    </div>
    
    </div>
        </div>
      </div>
    </div>
  </div>

</div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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