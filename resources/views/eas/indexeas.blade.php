@extends('template')

@section('tulisan1','Data Siswa')

@section('link1')
    <a href="/pegawaiDB" class="btn btn-warning"> PegawaiDB</a>
    <br></br>
    <a href="/eas/tambah" class="btn btn-primary"> + Tambah Siswa Baru</a>
@endsection

@section('konten')
<table class="table table-striped table-hover">
    <thead class="table-primary">
       <tr>
           <th>ID</th>
           <th>NRP</th>
           <th>Nilai Angka</th>
           <th>SKS</th>
           <th>Nilai Huruf</th>
           <th>Bobot</th>
       </tr>
    </thead>
       @foreach($nilaikuliah as $s)
       <tr>
           <td>{{ $s->ID }}</td>
           <td>{{ $s->NRP }}</td>
           <td>{{ $s->NilaiAngka }}</td>
           <td>{{ $s->SKS }}</td>
           <td>
               @if($s->NilaiAngka < 40 )
               <i>D</i>
               @elseif($s->NilaiAngka >= 41 && $s->NilaiAngka <= 60 )
               <i>C</i>
               @elseif($s->NilaiAngka >= 61 && $s->NilaiAngka <= 80 )
               <i>B</i>
               @else
               <i>A</i>
               @endif
            <td>{{ $s->Bobot }}</td>
           </td>

       </tr>
       @endforeach
   </table>
@endsection
