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
   <a class="navbar-brand" href="url('/')" @click="currentView='indexpage';activate(0);isHidden = false">
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
                          
                          <!--  <li class="nav-item dropdown">
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
                                  </li> -->
                          <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->Nomor_KK }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-down" aria-labelledby="navbarDropdown">
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
            <h1 class="text-center">Nomor KK : {{ $data_penduduks[0]->Nomor_KK }}</h1><br><br>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">


        <div style="overflow: auto;max-height: 400px;position: relative;  ">
      <table id="tabeldatakadus">
      <thead>
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
        <col width="1000px">
      
        <tr>
                  <th>No</th>
                  <th>Alamat</th>
                  <th>RW</th>
                  <th>RT</th>
                  <th id="nama_tombol">Nama</th>
                  <th>Nomor KK</th>
                  <th>Nomor NIK</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Jenis Pekerjaan</th> 
                  <th>Status Perkawinan</th> 
                  <th>Status Hubungan Dalam Keluarga</th> 
                  <th>Kewarganegaraan</th> 
                  <th>Nama Ayah</th> 
                  <th>Nama Ibu</th> 
                  <th>Golongan Darah</th> 
                  <th>Akta Lahir</th> 
                  <th>Nomor Dokumen Paspor</th>
                  <th>Tanggal Akhir Paspor</th>  
                  <th>Nomor Dokumen KITAS</th>             
                  <th>NIK Ayah</th> 
                  <th>NIK Ibu</th> 
                  <th>No Akta Perkawinan</th> 
                  <th>Tanggal Perkawinan</th> 
                  <th>No Akta Perceraian</th> 
                  <th>Tanggal Perceraian</th> 
                  <th>Cacat</th> 
                  <th>Cara KB</th> 
                  <th>Hamil</th> 
                  <th>Status kependudukan</th> 
                  <th>Keterangan</th>
                  <th>Usia</th>  
                  <th>Tempat Mendapatkan Air Bersih</th>  
                  <th>Status Gizi Balita</th>  
                  <th>Kebiasaan Berobat Bila Sakit</th>       
                  <th>edit</th> 
        </tr>
      </thead>
       <tbody id="tbodytabel">
        @php
        $no=1
        @endphp
        @foreach($data_penduduks as $data_penduduk)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data_penduduk->Alamat }}</td>
            <td>{{ $data_penduduk->RW }}</td>
            <td>{{ $data_penduduk->RT }}</td>
            <td>{{ $data_penduduk->Nama }}</td>
            <td>{{ $data_penduduk->Nomor_KK }}</td>
            <td>{{ $data_penduduk->NIK }}</td>
            <td>{{ $data_penduduk->Jenis_Kelamin }}</td>
            <td>{{ $data_penduduk->Tempat_Lahir }}</td>
            <td>{{ $data_penduduk->Tanggal_Lahir }}</td>
            <td>{{ $data_penduduk->Agama }}</td>
            <td>{{ $data_penduduk->Pendidikan }}</td>
            <td>{{ $data_penduduk->Jenis_Pekerjaan }}</td>
            <td>{{ $data_penduduk->Status_Perkawinan }}</td>
            <td>{{ $data_penduduk->Status_Hubungan_Dalam_Keluarga }}</td>
            <td>{{ $data_penduduk->Kewarganegaraan }}</td>
            <td>{{ $data_penduduk->Nama_Ayah }}</td>
            <td>{{ $data_penduduk->Nama_Ibu }}</td>
            <td>{{ $data_penduduk->Golongan_Darah }}</td>
            <td>{{ $data_penduduk->Akta_Lahir }}</td>
            <td>{{ $data_penduduk->No_Paspor }}</td>
            <td>{{ $data_penduduk->Tanggal_akhir_Paspor }}</td>
            <td>{{ $data_penduduk->No_KITAS }}</td>
            <td>{{ $data_penduduk->NIK_Ayah }}</td>
            <td>{{ $data_penduduk->NIK_Ibu }}</td>
            <td>{{ $data_penduduk->No_Akta_Perkawinan }}</td>
            <td>{{ $data_penduduk->Tanggal_Perkawinan }}</td>
            <td>{{ $data_penduduk->No_Akta_Perceraian }}</td>
            <td>{{ $data_penduduk->Tanggal_Perceraian }}</td>
            <td>{{ $data_penduduk->Cacat }}</td>
            <td>{{ $data_penduduk->Cara_KB }}</td>
            <td>{{ $data_penduduk->Hamil }}</td>
            <td>{{ $data_penduduk->Status_kependudukan }}</td>
            <td>{{ $data_penduduk->Keterangan }}</td>
            <td>{{ $data_penduduk->Usia }}</td>
            <td>{{ $data_penduduk->tempat_mendapatkan_air_bersih }}</td>
            <td>{{ $data_penduduk->status_gizi_balita }}</td>
            <td>{{ $data_penduduk->kebiasaan_berobat_bila_sakit }}</td>
            
            <td><a href="formeditdatapendudukwarga/{{ $data_penduduk->NIK }}/{{ $kode_area_dusuns[0]->id_dusun }}">edit</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
          </div>
          <!-- <a href="{{url('formadddatapendudukkades')}}" class="tomboladd">Tambah Data</a> -->
      </div>
  </div>
</section>



<section id="buatsurat"  class="section-padding">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-left">
         <select id="pilihsurat">
                 <option selected="true" disabled="disabled">Surat</option>
                    <option value="surat_ket_domisili">Surat Keterang Domisili</option>
                    <option value="surat_ket_pindah_penduduk">Surat Keterangan Pindah</option>
                    <option value="surat_ket_nikah">Surat Keterangan Nikah</option>
                    <option value="surat_izin_keramaian">Surat Izin Keramaian</option>
                    <option value="surat_kehendak_nikah">Surat Kehendak Nikah</option>
                    <option value="surat_ket_wali">Surat Keterangan Wali</option>
                    <option value="surat_ket_wali_hakim">Surat Keterangan Wali Hakim</option>
                    <option value="surat_persetujuan_mempelai">Surat Persetujuan Mempelai</option>
                    <option value="surat_bio_penduduk">Surat Bio Penduduk</option>
                    <option value="surat_izin_pengangkutan_kayu">Surat izin pengangkutan kayu</option>
                    <option value="surat_izin_pengangkutan_tanah_urug">Surat izin pengangkutan Tanah Urug</option>
                    <option value="surat_ket_beda_identitas_kis">Surat Keterangan Beda Identitas KIS</option>
                    <option value="surat_ket_beda_nama">Surat Keterangan Beda Nama</option>
                    <option value="surat_ket_catatan_kriminal">Surat Keterangan Catatan Kriminal</option>
                    <option value="surat_ket_cerai">Surat Keterangan Cerai</option>
                    <option value="surat_ket_domisili_usaha">Surat Keterangan Domisili Usaha</option>
                    <option value="surat_ket_harga_tanah">Surat Keterangan Harga Tanah</option>
                    <option value="surat_ket_jamkesos">Surat Keterangan Jamkesos</option>
                    <option value="surat_ket_kehilangan">Surat Keterangan Kehilangan</option>
                    <option value="surat_ket_jual_beli">Surat Keterangan Jual Beli</option>
                    <option value="surat_ket_kelakuan_baik">Surat Keterangan Kelakuan Baik</option>
                    <option value="surat_ket_kepemilikan_kendaraan">Surat Kepemilikan Kendaraan</option>
                    <option value="surat_ket_kepemilikan_tanah">Surat Kepemilikan Tanah</option>
                    <option value="surat_ket_kurang_mampu">Surat Keterangan Kurang Mampu</option>
                    <option value="surat_ket_luar_daerah">Surat Keterangan Luar daerah</option>
                    <option value="surat_ket_luar_negeri">Surat Keterangan Luar Negeri</option>
                    <option value="surat_ket_penduduk">Surat Keterangan Luar Penduduk</option>
                    <option value="surat_ket_tidak_memiliki_jamkesos">Surat Keterangan Tidak Memiliki JAMKESOS</option>
                    <option value="surat_ket_usaha">Surat Keterangan Usaha</option>
                    <option value="surat_ket_yatim">Surat Keterangan Yatim</option>
            </select>
          <!-- <input  type="text" name="NIKsurat" placeholder="NIK" id="NIKsurat"> -->
          <select name="NIKsurat" id="NIKsurat">   
                 @foreach ($data_penduduks as $data_penduduk)
                    <option value="{{ $data_penduduk->NIK }}">{{ $data_penduduk->Nama }}</option>
                 @endforeach
          </select><br><br>
        <a href="" id="tombolbuatsurat">Buat Surat</a>
      </div>
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
                  <col width="1000px">
                  <col width="1000px">
                  <tr>
                    <th>Nama Barang</th>
                    <th>Nama Harga</th>
                    <th>Nama Jumlah</th>
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