@extends('layouts.main')

@section('container')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Mahasiswa</h1>

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
                                <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="student_id">Student ID</label>
                                <input type="text" class="form-control" id="student_id" placeholder="Masukkan Student ID" name="student_id">
                            </div>
                            <div class="form-group">
                                <label for="study_program">Study Program</label>
                                <input type="text" class="form-control" id="study_program" placeholder="Masukkan Study Program" name="study_program">
                            </div>
                            <div class="form-group">
                                <label for="major">Major</label>
                                <input type="text" class="form-control" id="major" placeholder="Masukkan Major" name="major">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Masukkan Address" name="address">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>
                        </div>
                    </div>

@endsection