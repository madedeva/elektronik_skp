<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        

        return redirect("/mahasiswa")->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    public function show(User $user)
    {
        $mahasiswa = Student::find($id);
        return view('mahasiswa.show', ['mahasiswa' => $mahasiswa]);
    }

    public function edit($id)
    {
        $mahasiswa = User::where('id', $id)->get();
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
        
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'student_id' => 'required',
            'study_program' => 'required',
            'major' => 'required',
            'address' => 'required',
        ]);

        User::where('id', $id->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'student_id' => $request->student_id,
                'study_program' => $request->study_program,
                'major' => $request->major,
                'address' => $request->address,
            ]);
            
        return redirect('/mahasiswa')->with('status', 'Data Mahasiswa Berhasil Diubah!');
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