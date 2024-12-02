@extends('template')

@section('tulisan1','Data Bolpen')

@section('link1')
    <a href="/pegawaiDB" class="btn btn-warning"> PegawaiDB</a>
    <br></br>
    <a href="/pegawaiDB/bolpen/tambah" class="btn btn-primary"> + Tambah Bolpen Baru</a>
@endsection

@section('konten')
	<br/>

	<form action="/pegawaiDB/bolpen/cari" method="GET">
        <div class="row mb-3">
            <label for="cari" class="col-sm-2 col-form-label">Cari Nama Bolpen :</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Bolpen .." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
        </div>
	</form>
	<br/>

	<table class="table table-striped table-hover">
     <thead class="table-primary">
		<tr>
			<th>Merk Bolpen</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
     </thead>
		@foreach($bolpen as $b)
		<tr>
			<td>{{ $b->merkbolpen }}</td>
			<td>{{ $b->stockbolpen }}</td>
			<td>
                @if($b->tersedia === 'Y')
                <i class="fa-solid fa-check text-success"></i>
                @else
                <i class="fa-solid fa-xmark text-danger"></i>
                @endif
            </td>
			<td>
				<a href="/pegawaiDB/bolpen/edit/{{ $b->kodebolpen }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/pegawaiDB/bolpen/hapus/{{ $b->kodebolpen }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>
	Halaman : {{ $bolpen->currentPage() }} <br/>
	Jumlah Data : {{ $bolpen->total() }} <br/>
	Data Per Halaman : {{ $bolpen->perPage() }} <br/>


	{{ $bolpen->links() }}

@endsection

