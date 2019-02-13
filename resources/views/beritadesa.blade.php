@extends('layouts.layouthalamanlain')

@section('content')

<section id="berita-desa" class="section-padding">
      <div class="container">
      <h1 class="text-center">Berita Desa Pringgajurang</h1>
      @foreach($beritas as $berita)
      <div class="row">
        <div class="col-md-12">
          @if($berita->urlgambar != null && $berita->urlvideo != null)
            <img src="{{ $berita->urlgambar }}" alt="" width="400px" height="250px">
            @endif
            @if($berita->urlgambar == null && $berita->urlvideo != null)
            <iframe width="400" height="250"
                src="https://www.youtube.com/embed/{{$beritas->urlvideo}}">
               </iframe>
            @endif
            @if($berita->urlgambar != null && $berita->urlvideo == null)
            <img src="{{ $berita->urlgambar }}" alt="" width="400px" height="250px">
            @endif

            <h3>{{ $berita->judulberita }}</h3>
            <p>{{ substr($berita->deskripsi,0,510) }} . . . </p><br>
            <a class="button white " href="{{ url('detailberitadesa/' .  $berita->judulberita ) }}">Selengkapnya>></a>
        </div>

      </div>

      @endforeach



      {{ $beritas->links() }}



    </div>
    </section>


@endsection






  
