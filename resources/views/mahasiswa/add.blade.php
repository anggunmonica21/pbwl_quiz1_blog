@extends('layouts.app') 
 
 @section('content') 
 
 <div class="container"> 
 
 <h3>Tambah Data Mahasiswa</h3> 
 <form action="{{ url('/mahasiswa') }}" method="POST"> 
 @csrf 

 <div class="form-group">
     <label for="">Nim</label>
     <input type="text" name="mhsw_nim" class="form-control">
 </div>

 <div class="form-group">
     <label for="">Nama</label>
     <input type="text" name="mhsw_nama" class="form-control">
 </div>

 <div class="form-group">
     <label for="">Jurusan</label>
     <input type="text" name="mhsw_jurusan" class="form-control">
 </div>

 <div class="form-group">
     <label for="">Alamat</label>
     <input type="text" name="mhsw_alamat" class="form-control">
 </div>

 <div class="form-group">
     <input type="submit" value="SIMPAN" class="btn btn-primary">
 </div>

 </form> 
 </div> 
 
@endsection 