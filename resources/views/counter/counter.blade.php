@extends('template')

@section('tulisan1','Page Counter')

@section('konten')

<div class="alert alert-success">
    <strong>Selamat !</strong> Anda Pengunjung ke
     @foreach($pagecounter as $c)
         {{$c->Jumlah}}
     @endforeach
  </div>
@endsection
