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
                                            <th>#</th>
                                            <th>Kegiatan</th>
                                            <th>Tanggal Kegiatan</th>
                                            <th>Lokasi</th>
                                            <th>Point</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($event as $events)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $events->name }}</td>
                                            <td>{{ $events->date }}</td>
                                            <td>{{ $events->location }}</td>
                                            <td>{{ $events->point }}</td>
                                            <td>
                                                <a href="/event/{{ $events->id }}" class="badge badge-info">Detail</a>
                                                <a href="/event/{{ $events->id }}/edit" class="badge badge-success">Edit</a>
                                                <form action="/event/{{ $events->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="badge bg-danger text-white border-0" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                                </form>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection