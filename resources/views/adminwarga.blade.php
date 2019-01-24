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
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsiveadmin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemon">
</head>

<body onload="startTime()" data-spy="scroll" data-target="#primary-menu">



            <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
   <a class="navbar-brand" href="#" @click="currentView='indexpage';activate(0);isHidden = false">
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
      @guest
              <li>
                  <a href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
        @else
              @guest
                          <li>
                              <a href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                    @else
                          <li class="nav-item">
                             <a class="nav-link" href="{{ url('/') }}">Home</a>
                          </li>
                           <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="{{url('/')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Surat <span class="caret"></span>
                                      </a>
                                      <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown" style="overflow-y: scroll;font-size:15px;width: 400px;max-height:300px;">
                                        <a class="dropdown-item" href="{{url('surat_ket_domisili/'.$data_penduduks[0]->NIK)}}">Surat Keterang Domisili</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_pindah_penduduk/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Pindah</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_nikah/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Nikah</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_izin_keramaian/'.$data_penduduks[0]->NIK)}}">Surat Izin Keramaian</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_kehendak_nikah/'.$data_penduduks[0]->NIK)}}">Surat Kehendak Nikah</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_wali/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Wali</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_wali_hakim/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Wali Hakim</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_persetujuan_mempelai/'.$data_penduduks[0]->NIK)}}">Surat Persetujuan Mempelai</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_bio_penduduk/'.$data_penduduks[0]->NIK)}}">Surat Bio Penduduk</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_izin_pengangkutan_kayu/'.$data_penduduks[0]->NIK)}}">Surat izin pengangkutan kayu</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_izin_pengangkutan_tanah_urug/'.$data_penduduks[0]->NIK)}}">Surat izin pengangkutan Tanah Urug</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_beda_identitas_kis/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Beda Identitas KIS</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_beda_nama/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Beda Nama</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_catatan_kriminal/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Catatan Kriminal</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_cerai/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Cerai</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_domisili_usaha/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Domisili Usaha</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_harga_tanah/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Harga Tanah</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_jamkesos/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Jamkesos</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_kehilangan/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Kehilangan</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_jual_beli/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Jual Beli</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_kelakuan_baik/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Kelakuan Baik</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_kepemilikan_kendaraan/'.$data_penduduks[0]->NIK)}}">Surat Kepemilikan Kendaraan</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_kepemilikan_tanah/'.$data_penduduks[0]->NIK)}}">Surat Kepemilikan Tanah</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_kurang_mampu/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Kurang Mampu</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_luar_daerah/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Luar daerah</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_luar_negeri/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Luar Negeri</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_penduduk/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Luar Penduduk</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_tidak_memiliki_jamkesos/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Tidak Memiliki JAMKESOS</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_usaha/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Usaha</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('surat_ket_yatim/'.$data_penduduks[0]->NIK)}}">Surat Keterangan Yatim</a>
                                        <div class="dropdown-divider"></div>
                                      </div>
                                  </li>
                          <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->NIK }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
          @endguest
       </ul>
    </ul>
  </div>
   </div>
</nav>



                  

<br><br><br><br>

@php
  $no=1
@endphp



<section class="section-padding" id="biodata">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Data Kependudukan Anda</h1><br><br>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">


        <p><strong>Nama : </strong>{{$data_penduduks[0]->Nama}}</p>
        <p><strong>Alamat : </strong>{{$data_penduduks[0]->Alamat}}</p>
        @if ($kode_area_dusuns->count()>0)
           <p><strong>Dusun : </strong>{{$kode_area_dusuns[0]->Nama_Dusun}}</p>
        @else
          <p><strong>Dusun : </strong> - </p>
        @endIf
        <p><strong>RW : </strong>{{$data_penduduks[0]->RW}}</p>
        <p><strong>RT : </strong>{{$data_penduduks[0]->RT}}</p>
        <p><strong>Nomor KK : </strong>{{$data_penduduks[0]->Nomor_KK}}</p>
        <p><strong>NIK : </strong>{{$data_penduduks[0]->NIK}}</p>
        <p><strong>JENIS KELAMIN : </strong>{{$data_penduduks[0]->Jenis_Kelamin}}</p>
        <p><strong>TEMPAT LAHIR : </strong>{{$data_penduduks[0]->Tempat_Lahir}}</p>
        <p><strong>TANGGAL LAHIR : </strong>{{$data_penduduks[0]->Tanggal_Lahir}}</p>
        <p><strong>AGAMA : </strong>{{$data_penduduks[0]->Agama}}</p>
        <p><strong>PENDIDIKAN : </strong>{{$data_penduduks[0]->Pendidikan}}</p>
        <p><strong>JENIS PEKERJAAN : </strong>{{$data_penduduks[0]->Jenis_Pekerjaan}}</p>
        <p><strong>STATUS PERKAWINAN : </strong>{{$data_penduduks[0]->Status_Perkawinan}}</p>
        <p><strong>STATUS HUBUNGAN DALAM MASYARAKAT : </strong>{{$data_penduduks[0]->Status_Hubungan_Dalam_Keluarga}}</p>
        <p><strong>KEWARGANEGARAAN : </strong>{{$data_penduduks[0]->Kewarganegaraan}}</p>
        <p><strong>AYAH : </strong>{{$data_penduduks[0]->Nama_Ayah}}</p>
      </div>
      <div class="col-md-6">
        <p><strong>IBU : </strong>{{$data_penduduks[0]->Nama_Ibu}}</p>
        <p><strong>Golongan_Darah : </strong>{{$data_penduduks[0]->Golongan_Darah}}</p>
        <p><strong>Akta_Lahir : </strong>{{$data_penduduks[0]->Akta_Lahir}}</p>
        <p><strong>No_Paspor : </strong>{{$data_penduduks[0]->No_Paspor}}</p>
        <p><strong>Tanggal_akhir_Paspor : </strong>{{$data_penduduks[0]->Tanggal_akhir_Paspor}}</p>
        <p><strong>No_KITAS : </strong>{{$data_penduduks[0]->No_KITAS}}</p>
        <p><strong>NIK_Ayah : </strong>{{$data_penduduks[0]->NIK_Ayah}}</p>
        <p><strong>NIK_Ibu : </strong>{{$data_penduduks[0]->NIK_Ibu}}</p>
        <p><strong>No_Akta_Perkawinan : </strong>{{$data_penduduks[0]->No_Akta_Perkawinan}}</p>
        <p><strong>Tanggal_Perkawinan : </strong>{{$data_penduduks[0]->Tanggal_Perkawinan}}</p>
        <p><strong>No_Akta_Perceraian : </strong>{{$data_penduduks[0]->No_Akta_Perceraian}}</p>
        <p><strong>Tanggal_Perceraian : </strong>{{$data_penduduks[0]->Tanggal_Perceraian}}</p>
        <p><strong>Cacat : </strong>{{$data_penduduks[0]->Cacat}}</p>
        <p><strong>Cara_KB : </strong>{{$data_penduduks[0]->Cara_KB}}</p>
        <p><strong>Hamil : </strong>{{$data_penduduks[0]->Hamil}}</p>
        <p><strong>STATUS KEPENDUDUKAN : </strong>{{$data_penduduks[0]->Status_kependudukan}}</p>
        <p><strong>KETERANGAN : </strong>{{$data_penduduks[0]->Keterangan}}</p>
      </div>
  </div>
</section>        


<section id="tabelberita" class="section-padding tabel7kolom">
      <div class="container-fluid">
         <h1>Tabel data Barang</h1>
        <div class="row">
          <div class="col-md-12">
            <div style="overflow: auto;max-height: 400px;position: relative;  ">
                <table id="tabeldatakadus">
                <thead>
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <col width="1000px">
                  <tr>
                    <th>Judul Berita</th>
                    <th>Deskripsi</th>
                    <th>edit</th> 
                    <th>hapus</th> 
                  </tr>
                </thead>
                 <tbody>
                  @foreach($barangdesas as $barangdesa)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $barangdesa->nama }}</td>
                        <td>{{ $barangdesa->harga }}</td>
                        <td>{{ $barangdesa->jumlah }}</td>
                        <td>{{ substr($barangdesa->deskripsi,0,100) }}</td>
                        <td><a href={{ url('formeditbarangdesa/' .  $barangdesa->id ) }}>edit</a></td>
                        <td><a href={{ url('deletebarangdesa/' .  $barangdesa->id ) }}>hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
            <a href="{{url('formaddbarangdesa/'.$jmlbarang)}}" class="tomboladd">Tambah Data Baru</a>
                </div>
              </div>
              <p class="text-center text-danger">{{ session('batas') }}</p>
            </div>
    </section>

   <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="{{asset('images/location-arrow.png')}}" alt="">
                                </div>
                                <p><strong>Alamat: </strong>Jl. Jurusan Montong Gading - Pringgajurang, Km 4, Desa Pringgajurang.Kode Pos 83664</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="{{asset('images/phone-arrow.png')}}" alt="">
                                </div>
                                <p><strong>Telpon: </strong>
                                    08123456789
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="{{asset('images/mail-arrow.png')}}" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">kantor@desaPringgajurang.id</a>
                                    
                                </p>
                            </div>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2018.made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://winchy.tech">winchy.tech</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





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