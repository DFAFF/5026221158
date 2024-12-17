@extends('template')

@section('tulisan1','Chat Emote')

@section('konten')

<div class="alert alert-success">
    <strong>Berikut adalah pesan untuk anda !</strong> :
    @foreach($pesan as $word)
    <a>{{ $word }}</a>
@endforeach
  </div>
@endsection
