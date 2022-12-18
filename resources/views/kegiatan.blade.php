@extends('layouts.app')
@section('content')
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card p-4 bg-dark text-white">
            <h3 class="fw-bold">Data Kegiatan</h3>
        </div>
    </div>
</div>
<div class="row mb-4">
    @foreach ($ukms as $ukm)
        <div class="col-md-6 mb-4">
            <div class="card p-4">
                <h5 class="fw-bold">{{ $ukm->nama_ukm }}</h5>
                <div class="card-body">
                    <ol class="list-group list-group-numbered">
                        @foreach ($ukm->mahasiswas as $item)
                            <li>{{ $item->nama_ukm }} <code>{{ $item->pivot->created_at->format('d F Y') }}</code></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection