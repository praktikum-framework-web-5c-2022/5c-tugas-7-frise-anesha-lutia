@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <h3 class="fw-bold">Data Kegiatan</h3>
            <div class="card-body">
                <form action="{{ route('mahasiswas.takeStore',['mahasiswa' => $mahasiswa->id]) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="ukm_id" class="form-label">UKM</label>
                    <div class="form-group">
                        @foreach ($ukms as $item)
                            <div class="form-check">
                                <input type="radio" name="ukm_id" id="{{ $item->id }}" class="form-check-input" value="{{ $item->id }}" {{ $mahasiswa->ukms()->find($item->id) ? 'checked' : '' }}>
                                <label for="{{ $item->id }}" class="form-check-label">{{ $item->nama_ukm }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection