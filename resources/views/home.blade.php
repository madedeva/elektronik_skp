@extends('layouts.main')

@section('container')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Mahasiswa Aktif</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah }} Mahasiswa</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-person-fill fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Kegiatan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">1 Kegiatan</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kemajuan
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">53%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-clipboard-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Waktu dan Tanggal
                                                <div class="col-auto col-12 row">
                                                    <div class="h5 mb-0 mr-2 text-xs font-weight-bold text-gray-800">
                                                        02, Nov 2022</div>
                                                </div>
                                                <div class="col-auto col-12 row">

                                                    <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="jam"></div>
                                                    <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="menit"></div>
                                                    <div class="h5 mb-0 mr-1 text-xs font-weight-bold text-gray-800" id="detik"></div>
                                                </div>
                                            </div>
                                            <div class="p mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="bi bi-clock-fill fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->

                    <div class="row">

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>

@endsection