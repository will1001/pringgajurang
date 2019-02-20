
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
    
    <link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.ico')}}" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemon">
    <link rel="stylesheet" href="{{asset('css/transparansi.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsivedetailhalaman.css')}}">
    <link rel="stylesheet" href="{{asset('css/table.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="{{asset('')}}//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="{{asset('')}}//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body onload="startTime()" data-spy="scroll" data-target="#primary-menu">



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
   <a class="navbar-brand" href="{{ url('/') }}" @click="currentView='indexpage';activate(0);isHidden = false">
    <img src="/images/kabupaten-lombok-timur-ntb.png" width="55" height="70" class="d-inline-block align-top" alt="">
    <div id="spacetextlogo">
    <span id="logotext">Pringgajurang</span>
    <span id="logotext2">Website Resmi Pemerintah Desa</span>
    </div>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
              <li>
                  <a href="{{URL::previous()}}" class="nav-link">KEMBALI</a>
              </li>
       </ul>
    </ul>
  </div>
   </div>
</nav>



    <section id="statistik" style="padding-top: 31px;">
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Data Statistik Desa</h1><br><br>
          </div>
        </div>

        <div class="tablestatistik">
                  <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center">Jumlah Penduduk</h5><br>
                </div>
            </div>
              <table id="tabeldatakadus">
              <thead>
                <col width="1000px">
                <col width="1000px">
                <col width="1000px">
                <tr>
                          <th rowspan="2">No</th>
                          <th rowspan="2">Jenis Kelamin</th>
                          <th rowspan="2">Jumlah</th>
                </tr>
              </thead>
              <tbody id="tbodytabel">
                @php
                $no=1
                @endphp
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Laki - Laki</td>
                    <td>{{$jml_penduduk_L}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Perempuan</td>
                    <td>{{$jml_penduduk_P}}</td>
                  </tr>
              </tbody>
            </table>
          </div>

          <div class="tablestatistik">
                  <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center">Jumlah Penduduk Dusun TEMILING</h5><br>
                </div>
            </div>
              <table id="tabeldatakadus">
              <thead>
                <col width="1000px">
                <col width="1000px">
                <col width="1000px">
                <tr>
                          <th rowspan="2">No</th>
                          <th rowspan="2">Jenis Kelamin</th>
                          <th rowspan="2">Jumlah</th>
                </tr>
              </thead>
              <tbody id="tbodytabel">
                @php
                $no=1
                @endphp
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Laki - Laki</td>
                    <td>{{$jml_penduduk_dusun_TEMILING_L}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Perempuan</td>
                    <td>{{$jml_penduduk_dusun_TEMILING_P}}</td>
                  </tr>
              </tbody>
            </table>
          </div>

<div class="tablestatistik">
                  <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center">Jumlah Penduduk Dusun DALAM DESA UTARA</h5><br>
                </div>
            </div>
              <table id="tabeldatakadus">
              <thead>
                <col width="1000px">
                <col width="1000px">
                <col width="1000px">
                <tr>
                          <th rowspan="2">No</th>
                          <th rowspan="2">Jenis Kelamin</th>
                          <th rowspan="2">Jumlah</th>
                </tr>
              </thead>
              <tbody id="tbodytabel">
                @php
                $no=1
                @endphp
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Laki - Laki</td>
                    <td>{{$jml_penduduk_dusun_DALAM_DESA_UTARA_L}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Perempuan</td>
                    <td>{{$jml_penduduk_dusun_DALAM_DESA_UTARA_P}}</td>
                  </tr>
              </tbody>
            </table>
          </div>

<div class="tablestatistik">
                  <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center">Jumlah Penduduk Dusun DALAM DESA SELATAN</h5><br>
                </div>
            </div>
              <table id="tabeldatakadus">
              <thead>
                <col width="1000px">
                <col width="1000px">
                <col width="1000px">
                <tr>
                          <th rowspan="2">No</th>
                          <th rowspan="2">Jenis Kelamin</th>
                          <th rowspan="2">Jumlah</th>
                </tr>
              </thead>
              <tbody id="tbodytabel">
                @php
                $no=1
                @endphp
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Laki - Laki</td>
                    <td>{{$jml_penduduk_dusun_DALAM_DESA_SELATAN_L}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Perempuan</td>
                    <td>{{$jml_penduduk_dusun_DALAM_DESA_SELATAN_P}}</td>
                  </tr>
              </tbody>
            </table>
          </div>

<div class="tablestatistik">
                  <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center">Jumlah Penduduk Dusun KAYULIAN</h5><br>
                </div>
            </div>
              <table id="tabeldatakadus">
              <thead>
                <col width="1000px">
                <col width="1000px">
                <col width="1000px">
                <tr>
                          <th rowspan="2">No</th>
                          <th rowspan="2">Jenis Kelamin</th>
                          <th rowspan="2">Jumlah</th>
                </tr>
              </thead>
              <tbody id="tbodytabel">
                @php
                $no=1
                @endphp
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Laki - Laki</td>
                    <td>{{$jml_penduduk_dusun_KAYULIAN_L}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Perempuan</td>
                    <td>{{$jml_penduduk_dusun_KAYULIAN_P}}</td>
                  </tr>
              </tbody>
            </table>
          </div>

<div class="tablestatistik">
                  <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center">Jumlah Penduduk Dusun DASAN BARU</h5><br>
                </div>
            </div>
              <table id="tabeldatakadus">
              <thead>
                <col width="1000px">
                <col width="1000px">
                <col width="1000px">
                <tr>
                          <th rowspan="2">No</th>
                          <th rowspan="2">Jenis Kelamin</th>
                          <th rowspan="2">Jumlah</th>
                </tr>
              </thead>
              <tbody id="tbodytabel">
                @php
                $no=1
                @endphp
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Laki - Laki</td>
                    <td>{{$jml_penduduk_dusun_DASAN_BARU_L}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Perempuan</td>
                    <td>{{$jml_penduduk_dusun_DASAN_BARU_P}}</td>
                  </tr>
              </tbody>
            </table>
          </div>

<div class="tablestatistik">
                  <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center">Jumlah Penduduk Dusun PENGEMBUR</h5><br>
                </div>
            </div>
              <table id="tabeldatakadus">
              <thead>
                <col width="1000px">
                <col width="1000px">
                <col width="1000px">
                <tr>
                          <th rowspan="2">No</th>
                          <th rowspan="2">Jenis Kelamin</th>
                          <th rowspan="2">Jumlah</th>
                </tr>
              </thead>
              <tbody id="tbodytabel">
                @php
                $no=1
                @endphp
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Laki - Laki</td>
                    <td>{{$jml_penduduk_dusun_PENGEMBUR_L}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>Perempuan</td>
                    <td>{{$jml_penduduk_dusun_PENGEMBUR_P}}</td>
                  </tr>
              </tbody>
            </table>
          </div>


          <div class="tablestatistik">
                  <div class="row">
                <div class="col-md-12">
                    <h5 class="text-center">Statistik Pendidikan</h5><br>
                </div>
            </div>
              <table id="tabeldatakadus">
              <thead>
                <col width="1000px">
                <col width="1000px">
                <col width="1000px">
                <tr>
                          <th rowspan="2">No</th>
                          <th rowspan="2">Pendidikan</th>
                          <th rowspan="2">Jumlah</th>
                </tr>
              </thead>
              <tbody id="tbodytabel">
                @php
                $no=1
                @endphp
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>TIDAK / BELUM SEKOLAH</td>
                    <td>{{$jml_penduduk_tidak_sekolah_L+$jml_penduduk_tidak_sekolah_P}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>BELUM TAMAT SD / SEDERAJAT</td>
                    <td>{{$jml_penduduk_blm_sd_L+$jml_penduduk_blm_sd_P}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>TAMAT SD / SEDERAJAT</td>
                    <td>{{$jml_penduduk_tamat_sd_L+$jml_penduduk_tamat_sd_P}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>SLTP / SEDERAJAT</td>
                    <td>{{$jml_penduduk_smp_L+$jml_penduduk_smp_P}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>SLTA / SEDERAJAT</td>
                    <td>{{$jml_penduduk_sma_L+$jml_penduduk_sma_P}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>DIPLOMA I // II</td>
                    <td>{{$jml_penduduk_d1_L+$jml_penduduk_d1_P}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>AKADEMI / DIPLOMA III / S.MUDA</td>
                    <td>{{$jml_penduduk_d3_L+$jml_penduduk_d3_P}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>DIPLOMA IV / STRATA I</td>
                    <td>{{$jml_penduduk_s1_L+$jml_penduduk_s1_P}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>STRATA II</td>
                    <td>{{$jml_penduduk_s2_L+$jml_penduduk_s2_P}}</td>
                  </tr>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>STRATA III</td>
                    <td>{{$jml_penduduk_s3_L+$jml_penduduk_s3_P}}</td>
                  </tr>

              </tbody>
            </table>
          </div>


      </div>
    </section>


  

 <!--  <footer style="padding-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-light text-left">
                <p><i class="text-light fas fa-map-marker"></i> Jl. Jurusan Kotaraja - Montong Gading, 83663</p>
                <p><i class="text-light fas fa-phone"></i> +62 877-6344-4202</p>
                <p class="text-light text-left"><i class="text-light fas fa-envelope"></i> pringgajurang@gmail.com</p>
            </div>
            <div class="col-md-4">
                <br>
                <br>
                <br>
                <p class="text-light text-center">&copy; Copyright 2019 by <a class="text-light" href="https://winchy.tech">Winchy.tech</a></p>
            </div>
            <div class="col-md-4">
                <br>
                <p class="text-light text-right" id="date"></p>
                <p class="text-light text-right" id="txt"></p>
            </div>
        </div>
    </div>
</footer> -->




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