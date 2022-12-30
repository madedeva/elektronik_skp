@extends('layouts.main')

@section('container')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kegiatan</h6>
    </div>
<div class="card-body">
            <form method="post" action="{{ route('event.store') }}">
                @csrf
                <div class="form-group
                @error('nama') has-danger @enderror">
                    <label for="nama">Nama Kegiatan</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Kegiatan" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('tanggal') has-danger @enderror">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Masukkan Tanggal" name="tanggal" value="{{ old('tanggal') }}">
                    @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('tempat') has-danger @enderror">
                    <label for="tempat">Tempat</label>
                    <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" placeholder="Masukkan Tempat" name="tempat" value="{{ old('tempat') }}">
                    @error('tempat')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('deskripsi') has-danger @enderror">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan Deskripsi" name="deskripsi" value="{{ old('deskripsi') }}">
                    @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('poin') has-danger @enderror">
                    <label for="poin">Poin yang didapatkan</label>
                    <input type="text" class="form-control @error('poin') is-invalid @enderror" id="poin" placeholder="Masukkan Poin" name="poin" value="{{ old('poin') }}">
                    @error('poin')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
 </div>


@endsection