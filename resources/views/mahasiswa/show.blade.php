@extends('layouts.main')

@section('container')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Mahasiswa Aktif</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                        </div>
                        <!-- tambah mahasiswa -->
                        <div class="card-body">
                            <a href="/mahasiswa/create" class="btn btn-primary">Tambah Data Mahasiswa</a>
                        </div>
                        <div class="card-body">
                            <!-- show data mahasiswa -->
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title
                                    ">{{ $mahasiswa->name }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $mahasiswa->student_id }}</h6>
                                    <p class="card-text">{{ $mahasiswa->study_program }}</p>
                                    <p class="card-text">{{ $mahasiswa->major }}</p>
                                    <p class="card-text">{{ $mahasiswa->address }}</p>
                                    <a href="/mahasiswa" class="card-link">Kembali</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Kegiatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>

@endsection