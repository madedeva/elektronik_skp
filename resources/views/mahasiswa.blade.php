@extends('layouts.main')

@section('container')

<!-- form tambah mahasiswa -->
<div class="card shadow mb-4">
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Tambah Data Mahasiswa</h1>
            <form method="post" action="/mahasiswa">
                @csrf
                <div class="form-group
                @error('nama') has-danger @enderror">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('nim') has-danger @enderror">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM" name="nim" value="{{ old('nim') }}">
                    @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('prodi') has-danger @enderror">
                    <label for="prodi">Prodi</label>
                    <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" placeholder="Masukkan Prodi" name="prodi" value="{{ old('prodi') }}">
                    @error('prodi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('jurusan') has-danger @enderror">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ old('jurusan') }}">
                    @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group
                @error('alamat') has-danger @enderror">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat') }}">
                    @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
            <br>
        </div>
    </div>
</div>
</div>

@endsection