@extends('template')

@section('tulisan1','Edit Bolpen')

@section('link1')
	<a href="/pegawaiDB/bolpen"  class="btn btn-primary"> Kembali</a>
@endsection

@section('konten')
@foreach($bolpen as $b)
    <form action="/pegawaiDB/bolpen/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="kode" value="{{ $b->kodebolpen }}"> <br/>

        <div class="row mb-3">
            <label for="merkbolpen" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
            <input type="text" name="merkbolpen" class="form-control" id="merkbolpen" required="required"  value="{{ $b->merkbolpen}}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="stockbolpen" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
            <input type="number" name="stockbolpen" class="form-control" id="stockbolpen" required="required" value="{{ $b->stockbolpen }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia_y" value="Y"
                    {{ $b->tersedia === 'Y' ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia_y">Tersedia</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia_n" value="N"
                    {{ $b->tersedia === 'N' ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia_n">Tidak Tersedia</label>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-success"></center>
            </div>
        </div>
    </form>
@endforeach
@endsection

