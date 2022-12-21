<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;

class UserController extends Controller
{
    public function index()
    {
        $mahasiswa = User::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'student_id' => 'required',
            'study_program' => 'required',
            'major' => 'required',
            'address' => 'required',
        ]);

        User::create($request->all());

        return redirect('mahasiswa.index')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy($id)
    {
        $mahasiswa = User::find($id);
        $mahasiswa->delete();
        return redirect('mahasiswa.index')->with('status', 'Data Mahasiswa Berhasil Dihapus!');
    }

    public function dashboard() {

        $jumlah = User::count();

        return view('index', compact('jumlah'));

    }
}
