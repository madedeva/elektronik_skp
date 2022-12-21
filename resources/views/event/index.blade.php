@extends('layouts.main')

@section('container')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kegiatan Aktif</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan</h6>
                        </div>
                        <!-- tambah kegiatan -->
                        <div class="card-body">
                            <a href="/event/create" class="btn btn-primary">Tambah Data Kegiatan</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Tanggal</th>
                                            <th>Tempat</th>
                                            <th>Deskripsi</th>
                                            <th>Poin yang diperoleh</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($event as $events)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $events->name }}</td>
                                            <td>{{ $events->date }}</td>
                                            <td>{{ $events->location }}</td>
                                            <td>{{ $events->description }}</td>
                                            <td>{{ $events->point }}</td>
                                            <td>
                                                <a href="" class="badge badge-success">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <a href="" class="badge badge-danger">Delete</a>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection