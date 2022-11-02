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
                                            <th>Id</th>
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
                                        @foreach ($users as $mahasiswa)
                                        <tr>
                                            <td>{{ $mahasiswa->id }}</td>
                                            <td>{{ $mahasiswa->name }}</td>
                                            <td>{{ $mahasiswa->email }}</td>
                                            <td>{{ $mahasiswa->student_id }}</td>
                                            <td>{{ $mahasiswa->study_program }}</td>
                                            <td>{{ $mahasiswa->major }}</td>
                                            <td>{{ $mahasiswa->address }}</td>
                                            <td>0</td>
                                            <td>
                                                <a href="" class="badge badge-success">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <a href="/data/delete/{{ $mahasiswa->id }}" class="badge badge-danger">Delete</a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>     
                            </div>
                        </div>
                    </div>

@endsection