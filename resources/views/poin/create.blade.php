@extends('layouts.main')

@section('container')

<!-- data kegiata mahasiswa -->
<div class="card shadow mb-4">
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Menambahkan Poin</h1>
            <form method="post" action="/kegiatan">
                @csrf
                <div class="form-group
                @error('nama') has-danger @enderror">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('nama') has-danger @enderror">
                    <label for="nama">Nama Kegiatan</label>
                    <select class="form-control" id="nama" name="nama">
                        <option value="Kegiatan 1">Kegiatan 1</option>
                        <option value="Kegiatan 2">Kegiatan 2</option>
                        <option value="Kegiatan 3">Kegiatan 3</option>
                        <option value="Kegiatan 4">Kegiatan 4</option>
                        <option value="Kegiatan 5">Kegiatan 5</option>
                    </select>
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('tanggal') has-danger @enderror">
                    <label for="tanggal">Tanggal Kegiatan</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Masukkan Tanggal" name="tanggal" value="{{ old('tanggal') }}">
                    @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('poin') has-danger @enderror">
                    <label for="poin">Jumlah Poin</label>
                    <input type="text" class="form-control @error('poin') is-invalid @enderror" id="poin" placeholder="Masukkan Poin" name="poin" value="{{ old('poin') }}">
                    @error('poin')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Poin</button>
            </form>
            <br>
        </div>
    </div>
</div>

@endsection