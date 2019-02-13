
@extends('layouts.layouthalamanlain')

@section('content')
<section id="detail_berita">
      <div class="container">
      <h1 class="text-center">{{ $beritas->judulberita }}</h1>
      

      <div class="row">
        <div class="col-md-12">
            <img src="{{ $beritas->urlgambar }}" alt="" width="400px" height="250px">
            <iframe width="420" height="315"
            src="https://www.youtube.com/embed/{{$beritas->urlvideo}}">
            </iframe>
            <h3>{{$beritas->judulberita }}</h3>
            <p style="white-space: pre-line;white-space: pre-wrap;">{{$beritas->deskripsi }}</p><br>
             
        </div>

      </div>

     



    </div>
    </section>


  @endsection

