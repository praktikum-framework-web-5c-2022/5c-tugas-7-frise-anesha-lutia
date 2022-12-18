@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <h3 class="fw-bold">Data UKM Mahasiswa</h3>
            @if(session()->has('message'))
                <div class="alert alert-success">{{ session()->get('message') }}</div>
            @endif
            <div class="d-flex justify-content: space-round  mb-5">
                <div class="buton mb-3">
                    <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary shadow">+ Tambahkan Mahasiswa</a>
        </div>
    </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NPM</th>
                                <th>Nama</th>
                                <th>UKM Yang Diambil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswas as $ukm => $mahasiswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mahasiswa->npm }}</td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>
                                        @forelse ($mahasiswa->ukms as $ukm)
                                            <ul>
                                                <li>{{ $ukm->nama_ukm }}</li>
                                            </ul>
                                        @empty
                                            Tidak ada UKM yang diambil
                                        @endforelse
                                    </td>
                                    <td>
                                        <a href="{{ route('mahasiswas.take',['mahasiswa' => $mahasiswa->id]) }}" class="btn btn-info">Pilih Kegiatan</a>
                                        <form action="{{ route('mahasiswas.destroy',$mahasiswa->id) }}" method="POST">   
                                        @csrf
                                            @method('DELETE')
                                            <a href="{{ route('mahasiswas.edit',$mahasiswa->id) }}" class="btn btn-primary">EDIT</a>
                                        <button type="submit" class="btn btn-danger">HAPUS</button>
</form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection