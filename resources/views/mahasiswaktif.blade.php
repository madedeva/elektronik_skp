@extends('layouts.main')

@section('container')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Mahasiswa Aktif</h1>
                    <p class="mb-4">Berikut merupakan data mahasiswa aktif di lingkungan Fakultas Teknik dan Kejuruan.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>NIM</th>
                                            <th>Prodi</th>
                                            <th>Jurusan</th>
                                            <th>Alamat</th>
                                            <th>Perolehan Poin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->nim }}</td>
                                            <td>{{ $user->prodi }}</td>
                                            <td>{{ $user->jurusan }}</td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>0</td>
                                            <td>
                                                <a href="" class="badge badge-success">Edit</a>
                                                <a href="" class="badge badge-danger">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection