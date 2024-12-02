@extends('template')

@section('tulisan1','Tambah Bolpen')

@section('link1')
	<a href="/pegawaiDB/bolpen"  class="btn btn-primary"> Kembali</a>
@endsection

@section('konten')

	<form action="/pegawaiDB/bolpen/storebolpen" method="post">
		{{ csrf_field() }}

        <div class="row mb-3">
            <label for="merkbolpen" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merkbolpen" class="form-control" id="merkbolpen" required="required">
            </div>
        </div>

        <div class="row mb-3">
            <label for="stockbolpen" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
              <input type="number" name="stockbolpen" class="form-control" id="stockbolpen" required="required">
            </div>
        </div>

        <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia_y" value="Y">
                    <label class="form-check-label" for="tersedia_y">Tersedia</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia_n" value="N">
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

 @endsection

