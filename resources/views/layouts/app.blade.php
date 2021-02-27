<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- CSS Files -->

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<script src="{{ mix('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="" id="app">
  <div class="wrapper ">
    @section('sidebar')
<div class="sidebar" data-color="orange">
    <div class="logo">
          <a href="/" class="simple-text logo-mini">
            TOP
          </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <li class="active ">
              <a href="/">
                <i class="fas fa-chart-line"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li>
              <a href="{{route('products.index')}}">
                <i class="fas fa-apple-alt"></i>
                <p>商品管理</p>
              </a>
            </li>
            <li>
              <a href="{{route('staffs.index')}}">
                <i class="fas fa-users"></i>
                <p>スタッフ</p>
              </a>
            </li>
            {{-- <li>
              <a href="./notifications.html">
                <i class="now-ui-icons ui-1_bell-53"></i>
                <p>Notifications</p>
              </a>
            </li> --}}
            {{-- <li>
              <a href="./user.html">
                <i class="now-ui-icons users_single-02"></i>
                <p>User Profile</p>
              </a>
            </li> --}}
            {{-- <li>
              <a href="./tables.html">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>Table List</p>
              </a>
            </li> --}}
            {{-- <li>
              <a href="./typography.html">
                <i class="now-ui-icons text_caps-small"></i>
                <p>Typography</p>
              </a>
            </li> --}}
            {{-- <li class="active-pro">
              <a href="./upgrade.html">
                <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                <p>Upgrade to PRO</p>
              </a>
            </li> --}}
          </ul>
        </div>
      </div>
    @show

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      @section('navbar')
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('shop.cart')}}">
                    <i class="fas fa-shopping-cart fa-2x"></i>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                @auth
                    <a class="nav-link" href="#pablo">
                    <i class="far fa-user fa-2x"></i>
                    <p>kana</p>
                    <p>
                    <span class="d-lg-none d-md-block">Account</span>
                    </p>
                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                           {{ __('ログアウト') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                @else
                    <a href="{{route('register')}}" type="button" class="btn btn-primary">新規登録</a>
                    <a href="{{ route('login') }}" type="button" class="btn btn-outline-secondary">ログイン</a>
                @endauth

              </li>
            </ul>
          </div>
        </div>
      </nav>
      @show

      <!-- End Navbar -->
      @section('panel-header')
        <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div>
      @show
      <div class="content">
          @yield('content')
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              {{-- <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li> --}}
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  <!--  Notifications Plugin    -->
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script>
    // $(document).ready(function() {
    //   // Javascript method's body can be found in assets/js/demos.js
    //   demo.initDashboardPageCharts();

    // });
  </script>
</body>

</html>
