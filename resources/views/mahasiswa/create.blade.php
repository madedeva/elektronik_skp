@extends('layouts.main')

@section('container')

<!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                        <form method="post" action="{{ route('mahasiswa.store') }}">
                        @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Gunakan email undiksha" name="email">
                            </div>
                            <div class="form-group">
                                <label for="student_id">NIM</label>
                                <input type="text" class="form-control" id="student_id" placeholder="Masukkan NIM" name="student_id">
                            </div>
                            <div class="form-group">
                                <label for="study_program">Program Studi</label>
                                <input type="text" class="form-control" id="study_program" placeholder="contoh: Pendidikan Teknik Informatika" name="study_program">
                            </div>
                            <div class="form-group">
                                <label for="major">Jurusan</label>
                                <!-- dropdown input -->
                                <select class="form-control" id="major" name="major">
                                    <option value="Teknik Informatika">------ Pilih jurusan -----</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Industri">Teknologi Industri</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" placeholder="contoh: Jalan Udayana No. 12, Banyuasri" name="address">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>
                        </div>
                    </div>

@endsection