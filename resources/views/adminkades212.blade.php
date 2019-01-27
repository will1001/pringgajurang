<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Desa Pringgajurang</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsiveadmin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemon">
</head>

<body onload="startTime()" data-spy="scroll" data-target="#primary-menu">



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
   <a class="navbar-brand" href="#" @click="currentView='indexpage';activate(0);isHidden = false">
    <img src="/images/kabupaten-lombok-timur-ntb.png" width="40" height="47" class="d-inline-block align-top" alt="">
    <div id="spacetextlogo">
    <span id="logotext">Pringgajurang</span>
    <span id="logotext2">Website Resmi Pemerintah Desa</span>
    </div>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
</nav>
    

    <div class="row">
      <div class="col-md-2 backgroundsidebar text-center">
        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-uppercase">
      @guest
              <li>
                  <a href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
        @else

              <li class="nav-item">
                <a class="nav-link setkopsurat" href="{{url('formsettingkopsurat')}}" >Setting Kop Surat</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    upload dokumen <span class="caret"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('formuploadapbd/apbd')}}">APBD Desa</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('formuploadapbd/rkp')}}">RKP Desa</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('formuploadapbd/rpjm')}}">RPJM Desa</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('formuploadprofildesa')}}">Profil Desa</a>
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item" href="{{url('formuploadstatistikdesa')}}">Statistik Desa</a> --}}
                  </div>
              </li>
              <li class="nav-item dropdown">
                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->email }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-bottom" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
       </ul>
          </div>
    </div>
      </div>
      <div class="col-md-10">
        <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo voluptas laudantium sequi voluptatum, dicta debitis vero veritatis. Nam nihil veritatis, expedita dignissimos sapiente, dolores iusto vel rem accusamus officiis eos.</h1>
      </div>
    </div>

    



 

  {{-- <footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-4 text-light text-left infofooter">
                <p class="text-left"><i class="text-light fas fa-map-marker"></i> Jl. Jurusan Kotaraja - Montong Gading, 83663</p>
                <p class="text-left"><i class="text-light fas fa-phone"></i> +62 877-6344-4202</p>
                <p class="text-left"><i class="text-light fas fa-envelope"></i> pringgajurang@gmail.com</p>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-4 Copyrightfooter">
                <br>
                <br>
                <br>
                <p class="text-light text-center">&copy; Copyright 2019 by <a class="text-light" href="https://winchy.tech">Winchy.tech</a></p>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-4">
                <br>
                <div class="tanggalfooter">
                <p class="text-light text-right" id="date"></p>
                <p class="text-light text-right" id="txt"></p>
                </div>
            </div>
        </div>
    </div>
</footer> --}}




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('/js/date.js') }}" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
    {{-- <script src="{{ asset('/vue/VueIndex.js') }}" type="text/javascript"></script> --}}
    <script src="{{ asset('/js/script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/wow.min.js') }}" type="text/javascript"></script>
</body>

</html>