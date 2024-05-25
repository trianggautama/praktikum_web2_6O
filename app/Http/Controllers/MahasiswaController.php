<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->get();

        return view('mahasiswa.index',compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(MahasiswaRequest $request)
    {
        $user = User::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'username'  => $request->username,
            'password'  => Hash::make($request->password),
            'role'      => 'mahasiswa'
        ]);

        Mahasiswa::create([
            'nik'           => $request->nik,
            'npm'           => $request->npm,
            'nama'          => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nomor_telepon' => $request->nomor_telepon,
            'jurusan'       => $request->jurusan,
            'user_id'       => $user->id,
        ]);

        return redirect()->route('mahasiswa.index');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.edit',compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $input     = $request->all();

        if($request->password)
        {
            $input['password'] = Hash::make($request->password);

        }else{
            $input['password'] =  $mahasiswa->user->password;
        }
        $mahasiswa->update($input);
        $mahasiswa->user->update($input);

        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index');
    }

    public function generate($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $user = User::create([
            'nama'      => $mahasiswa->nama,
            'email'     => $mahasiswa->npm.'@gmail.com',
            'username'  => $mahasiswa->npm,
            'password'  => Hash::make('12345678'),
            'role'      => 'mahasiswa'
        ]);

        $mahasiswa->user_id = $user->id;
        $mahasiswa->save();

        return redirect()->route('mahasiswa.index');
    }   
}
