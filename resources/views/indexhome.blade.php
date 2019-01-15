<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemon">

    <title>Pringgajurang</title>
  </head>
  <body onload="startTime()">
    <!-- Image and text -->



<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
   <a class="navbar-brand" href="#" @click="currentView='indexpage';activate(0);">
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
      <li class="nav-item">
        <a class="nav-link" href="#" @click="currentView='bidangpemerintahan';activate(1);" :class="{ active : active_el == 1 }">Bidang PEMERINTAHAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" @click="currentView='panduanpenduduk';activate(2);" :class="{ active : active_el == 2 }">Panduan PENDUDUK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" @click="currentView='halamanbisnis';activate(3);" :class="{ active : active_el == 3 }">Halaman BISNIS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" @click="currentView='untukpengunjung';activate(4);" :class="{ active : active_el == 4 }">Untuk PENGUNJUNG</a>
      </li>
      <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if (Route::has('register'))
            <a class="dropdown-item" href="{{ route('register') }}">Daftar</a>
          @endif
          <a class="dropdown-item" href="{{ route('login') }}">Login</a>
        </div>
      </li>
    </ul>
  </div>
   </div>
</nav>
    <component :is="currentView" class="wow zoomIn" keep-alive></component>
</div>

<template id="indexpage">
    <div>
            <section id="kotak1">
                <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="tentang_desa inner">
                            <h2>Tentang Desa</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus et voluptatem aliquid, culpa doloribus illum consectetur omnis quia autem? Ipsa maxime facilis saepe eveniet laboriosam, ducimus, commodi aspernatur quam neque.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="berita_terbaru inner">
                            <h2>Berita Terbaru</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus et voluptatem aliquid, culpa doloribus illum consectetur omnis quia autem? Ipsa maxime facilis saepe eveniet laboriosam, ducimus, commodi aspernatur quam neque.</p>
                            <br>
                            <p class="text-right">admin,21/1/2019</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pengumuman inner">
                            <h2>Pengumuman</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus et voluptatem aliquid, culpa doloribus illum consectetur omnis quia autem? Ipsa maxime facilis saepe eveniet laboriosam, ducimus, commodi aspernatur quam neque.</p>
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <section id="kotak2">
                <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="inner">
                            <img src="/images/ntp-pangan.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="inner2">
                            <img src="/images/Screenshot from 2018-10-16 17-11-07.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="inner">
                            <img src="/images/Grafik-Bonus-Demografi.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="inner2">
                            <img src="/images/kopi.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </section>

            <section id="kotak3">
                <div class="container">
                <div class="row">
                    <div class="col-md-2 offset-md-1">
                        <div class="inner text-center">
                            <a href="#" @click="currentView='lembagaindex'"><i class="fas fa-sitemap"></i><br>
                            <h4><strong>LEMBAGA</strong></h4></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="inner text-center">
                            <a href="#" @click="currentView=''"><i class="fas fa-users"></i><br>
                            <h4><strong>SOTK</strong></h4></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="inner text-center">
                            <a href="https://goo.gl/maps/ru5HSKJND5t" @click="currentView=''"><i class="fas fa-map-marked-alt" target="_blank"></i><br>
                            <h4><strong>PETA</strong></h4></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="inner text-center">
                            <a href="#" @click="currentView='agenda'"><i class="fas fa-calendar-alt"></i><br>
                            <h4><strong>AGENDA</strong></h4></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="inner text-center">
                            <a href="#" @click="currentView='statistikindex'"><i class="fas fa-chart-bar"></i><br>
                            <h4><strong>DATA</strong></h4></a>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
</template>


<template id="bidangpemerintahan">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="kotak1bidangpemerintahan">
                        <ul>
                        <li>Pemerintahan</li>
                        <li>Kesejahteraan</li>
                        <li>Pelayanan</li>
                        <li>Tata Usaha dan Umum</li>
                        <li>Keuangan</li>
                        <li>Perencanaan</li>
                        <li>Kewilayahan</li>
                        <li>Pembangunan</li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="kotak2bidangpemerintahan">
                      <ul>
                        <li>Pemerintahan</li>
                        <li>Kesejahteraan</li>
                        <li>Pelayanan</li>
                        <li>Tata Usaha dan Umum</li>
                        <li>Keuangan</li>
                        <li>Perencanaan</li>
                        <li>Kewilayahan</li>
                        <li>Pembangunan</li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<template id="panduanpenduduk">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kotakpanduanpenduduk">
                        <h1>Panduan Penduduk</h1>
                        <form action="{{url('caripanduanpenduduk')}}" method="post" accept-charset="utf-8">
                              {{ csrf_field() }}
                              <input type="text"  id="search" name="search" placeholder="cari panduan" >
                              <input type="submit" value="Search" id="tombol_search_panduan">
                          </form>
                    </div>
                </div>
            </div>
        </div>
</template>

<template id="halamanbisnis">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="kotak1halamanbisnis">
                    <h2 class="text-center">Pasar Online :</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="kotak2Ahalamanbisnis">
                <h2>Pelaku Usaha :</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="kotak2Bhalamanbisnis">
                <h2>Panduan :</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="kotak3Ahalamanbisnis">
                <h2>Potensi Penanaman Modal</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="kotak3Bhalamanbisnis">
                <h2>Lowongan Kerja</h2>
                </div>
            </div>
        </div>
    </div>
</template>

<template id="untukpengunjung">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="kotak1Pengunjung">
                    <h3>Local Life</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kotak2APengunjung">
                        <h3>Tempat Wisata Terdekat</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="kotak2BPengunjung">
                        <h3>Sekolah</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="kotak3APengunjung">
                            <h3>Masjid</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="kotak3BPengunjung">
                        <h3>Pondok Pesantren</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="kotak4Pengunjung">
                <h3>Aktivitas Menarik</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="kotak5Pengunjung">
               <h3>Taman Bermain</h3>
               </div>
            </div>
            <div class="col-md-4">
                <div class="kotak6Pengunjung">
               <h3>Lesehan</h3>
               </div>
            </div>
        </div>
    </div>
</template>


<template id="lembagaindex">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="kotak1bidangpemerintahan">
                        <ul>
                        <li>Pemerintahan</li>
                        <li>Kesejahteraan</li>
                        <li>Pelayanan</li>
                        <li>Tata Usaha dan Umum</li>
                        <li>Keuangan</li>
                        <li>Perencanaan</li>
                        <li>Kewilayahan</li>
                        <li>Pembangunan</li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="kotak2bidangpemerintahan">
                      <ul>
                        <li>Pemerintahan</li>
                        <li>Kesejahteraan</li>
                        <li>Pelayanan</li>
                        <li>Tata Usaha dan Umum</li>
                        <li>Keuangan</li>
                        <li>Perencanaan</li>
                        <li>Kewilayahan</li>
                        <li>Pembangunan</li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<template id="statistikindex">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kotakpanduanpenduduk">
                        <h1>Panduan Penduduk</h1>
                        <form action="{{url('caripanduanpenduduk')}}" method="post" accept-charset="utf-8">
                              {{ csrf_field() }}
                              <input type="text"  id="search" name="search" placeholder="cari panduan" >
                              <input type="submit" value="Search" id="tombol_search_panduan">
                          </form>
                    </div>
                </div>
            </div>
        </div>
</template>

<template id="halamanbisnis">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="kotak1halamanbisnis">
                    <h2 class="text-center">Pasar Online :</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="kotak2Ahalamanbisnis">
                <h2>Pelaku Usaha :</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="kotak2Bhalamanbisnis">
                <h2>Panduan :</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="kotak3Ahalamanbisnis">
                <h2>Potensi Penanaman Modal</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="kotak3Bhalamanbisnis">
                <h2>Lowongan Kerja</h2>
                </div>
            </div>
        </div>
    </div>
</template>

<footer>
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
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('/js/date.js') }}" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
    <script src="{{ asset('/vue/VueIndex.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/wow.min.js') }}" type="text/javascript"></script>
  </body>
</html>