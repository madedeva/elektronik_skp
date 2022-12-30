@extends('layouts.main')

@section('container')

<!-- Page Heading -->
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
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Prodi</th>
                                            <th>Jurusan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mahasiswa as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->student_id }}</td>
                                            <td>{{ $user->study_program }}</td>
                                            <td>{{ $user->major }}</td>
                                            <td>
                                                <!-- show mahasiswa with route -->
                                                <a href="/mahasiswa/{{ $user->id }}" class="badge badge-info">Detail</a>
                                                <a href="" class="badge badge-success">Edit</a>
                                                <!-- delete method -->
                                                <form action="/mahasiswa/{{ $user->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="badge badge-danger border-0" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                                </form> 
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>     
                            </div>
                        </div>
                    </div>

@endsection