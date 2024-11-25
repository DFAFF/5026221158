@extends('template')

@section('tulisan1','Data Pegawai')

@section('link1')
	<a href="/pegawaiDB"  class="btn btn-primary"> Kembali</a>
@endsection

@section('konten')

	<form action="/pegawaiDB/store" method="post">
		{{ csrf_field() }}

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nama" required="required">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
              <input type="text" name="Jabatan" class="form-control" id="Jabatan" required="required">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
              <input type="text" name="Umur" class="form-control" id="Umur" required="required">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <textarea name="alamat" class="form-control" id="alamat" required="required"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-success"></center>
            </div>
        </div>

	</form>

 @endsection
