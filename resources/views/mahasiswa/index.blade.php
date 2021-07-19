 @extends('layouts.app')

 @section('content') 

  <div class="container"> 
 
 <h3>Daftar Mahasiswa

 <a href="{{ url('/mahasiswa/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
 </h3> 
 
 <table class="table table-bordered"> 
 <tr> 
 <td>NIM</td> 
 <td>NAMA</td> 
 <td>JURUSAN</td> 
 <td>ALAMAT</td> 
 </tr> 
 @foreach($rows as $row) 
 <tr> 
 <td>{{ $row->mhsw_nim }}</td> 
 <td>{{ $row->mhsw_nama }}</td> 
 <td>{{ $row->mhsw_jurusan }}</td> 
 <td>{{ $row->mhsw_alamat }}</td> 
 </tr> 
 @endforeach 
 </table> 
 </div>
 @endsection