@extends('layouts.main')

@section('container')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kegiatan Aktif</h1>
                    <p class="mb-4">Berikut merupakan data kegiatan aktif di lingkungan Fakultas Teknik dan Kejuruan.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
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
                                            <td>Pembukaan Dies Natalis</td>
                                            <td>3 Januari 2023</td>
                                            <td>Lapangan Kampus Tengah Undiksha</td>
                                            <td>Kegiatan wajib dihadiri oleh seluruh mahasiswa</td>
                                            <td>10</td>
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