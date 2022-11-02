@extends('layouts.main')

@section('container')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Mahasiswa Aktif</h1>
                    <p class="mb-4">Berikut merupakan data mahasiswa aktif di lingkungan Fakultas Teknik dan Kejuruan.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>NIM</th>
                                            <th>Prodi</th>
                                            <th>Jurusan</th>
                                            <th>Alamat</th>
                                            <th>Perolehan Poin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>I Made Deva Kerti Wijaya</td>
                                            <td>2015051012</td>
                                            <td>Pendidikan Teknik Informatika</td>
                                            <td>Teknik Informatika</td>
                                            <td>Penarukan</td>
                                            <td>0</td>
                                            <td>
                                                <a href="" class="badge badge-success">Edit</a>
                                                <a href="" class="badge badge-danger">Delete</a>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection