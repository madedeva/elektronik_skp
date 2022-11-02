@extends('layouts.main')

@section('container')

<!-- form tambah mahasiswa -->
<div class="card shadow mb-4">
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Tambah Data Mahasiswa</h1>
            <form method="post" action="{{ url('mahasiswa') }}">
                {!! csrf_field() !!}
                <!-- name -->
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                </div>
                <!-- email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                </div>
                <!-- student id -->
                <div class="form-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" class="form-control" id="student_id" placeholder="Masukkan Student ID" name="student_id">
                </div>
                <!-- study program -->
                <div class="form-group">
                    <label for="study_program">Study Program</label>
                    <input type="text" class="form-control" id="study_program" placeholder="Masukkan Study Program" name="study_program">
                </div>
                <!-- major -->
                <div class="form-group">
                    <label for="major">Major</label>
                    <input type="text" class="form-control" id="major" placeholder="Masukkan Major" name="major">
                </div>
                <!-- address -->
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Masukkan Address" name="address">
                </div>
                <!-- password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                </div>
                <!-- tambah data -->
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
            <br>
        </div>
    </div>
</div>
</div>

@endsection