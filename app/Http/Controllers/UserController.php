<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class UserController extends Controller
{

    // get data
    public function index()
    {
        $users = Mahasiswa::all();
        return view('mahasiswaktif', [
            'title' => 'Data Mahasiswa',
            'users' => $users,
        ]);
    }

    //delete data
    public function delete($id)
    {
        $user = Mahasiswa::find($id);
        $user->delete();
        return redirect('/data');
    }

    // update data
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->student_id = $request->student_id;
        $user->study_program = $request->study_program;
        $user->major = $request->major;
        $user->address = $request->address;
        $user->save();
        return redirect('/data');
    }

    public function create(){
        return view('mahasiswa');
    }

    public function store(Request $request){
        $create = $request->all();
        Mahasiswa::create($create);
        return redirect('/data');
    }

}
