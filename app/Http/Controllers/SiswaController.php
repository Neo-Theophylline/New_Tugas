<?php

namespace App\Http\Controllers;


use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;
use Termwind\Components\Dd;

class SiswaController extends Controller
{


    public function index()
    {
        //siapkan data siswa
        $siswas = user::all();

        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        //ambil data kelas
        $clases = Clas::all();

        return view('siswa.create', compact('clases'));
    }



    public function store(Request $request)
    {
        //siapkan data 
        clas::all();
        //alihkan ke halaman create 

        //validate
        $request->validate([
            'kelas' => 'required',
            'name' => 'required',
            'nisn' => 'required|unique:users,nisn',
            'alamat' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'no_handphone' => 'required|unique:users,no_handphone',
            'photo' => 'nullable',
        ]);

        $datauser = [
            'clas_id' => $request->kelas,

            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_handphone' => $request->no_handphone,
        ];
        if ($request->hasFile('photo')) {
            $datauser['photo'] = $request->file('photo')->store('images', 'public');
        }

        user::create($datauser);

        return redirect('/');
    }

    //funsi delete
    public function destroy($id)
    {
        $siswa = User::findOrFail($id);

        // Cek apakah ada file photo yang tersimpan
        if (
            $siswa->photo &&
            Storage::exists($siswa->photo)
        ) {
            Storage::disk('public')->delete($siswa->photo);
        }

        Storage::disk('public')->delete($siswa->photo);

        $siswa->delete();

        return redirect('/');
    }

    public function show($id)
    {
        $datauser = User::find($id);

        if ($datauser != null) {
            return view('siswa.show', compact('datauser'));
        } else {
            return redirect('/');
        }
    }

    public function edit($id)
    {
        $datauser = User::find($id);
        $clases = Clas::all();
        if ($datauser != null) {
            session(['datauser' => $id]);
            $clases = Clas::all();

            
            return view('siswa.edit', compact('datauser', 'clases'));
        }
        
        $lastid = session('datauser');

        if ($lastid &&  User::find($lastid)) {
            return redirect('/siswa/' . $lastid . '/edit');
        }

        return redirect('/'); // Redirect to a default page if no user found

    }


    public function update(Request $request, $id)
    {
        $datauser = User::findOrFail($id);
        $request->validate([
            'kelas' => 'required',
            'name' => 'required',
            'nisn' => 'required|unique:users,nisn,' . $id,
            'alamat' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'no_handphone' => 'required|unique:users,no_handphone,' . $id,
            'photo' => 'nullable',
        ]);

        $data = [
            'clas_id' => $request->kelas,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_handphone' => $request->no_handphone,
        ];

        if ($request->hasFile('photo')) {
            if ($datauser->photo && Storage::exists($datauser->photo)) {
                Storage::disk('public')->delete($datauser->photo);
            }
            $data['photo'] = $request->file('photo')->store('images', 'public');
        }

        $datauser->update($data);

        return redirect('/');
    }
}
