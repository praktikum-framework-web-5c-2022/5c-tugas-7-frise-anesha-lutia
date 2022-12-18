@extends('layouts.app')
@section('title')
@section('content')
<h1 class="mb-3">Tambahkan Mahasiswa</h1>
<form action="{{ route('mahasiswas.create') }}" method="GET">
  
    @csrf 
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">NPM</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="npm">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
@endsection