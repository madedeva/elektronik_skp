@extends('layouts.main')

@section('container')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Mahasiswa Aktif</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pengisian Poin SKP</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <!-- get data from points table -->
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Prodi</th>
                                            <th>Point</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($poin as $poins)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $poins->name }}</td>
                                            <td>{{ $poins->nim }}</td>
                                            <td>{{ $poins->prodi }}</td>
                                            <td>{{ $poins->point }}</td>
                                            <td>
                                                <a href="/poin/{{ $poins->id }}" class="badge badge-info">Detail</a>
                                                <a href="/poin/{{ $poins->id }}/edit" class="badge badge-success">Edit</a>
                                                <form action="/poin/{{ $poins->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="badge bg-danger text-white border-0" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                                                </form>
                                        </tr>
                                        @endforeach
                                </table>     
                            </div>
                        </div>
                    </div>

@endsection