<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('auth.register');
        }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validateData = $request->validate([

            'name' => ['required', 'max:100'],
            'email' => ['required'],
            'ttl' => ['required'],
            'gender' => ['required_with:Laki-Laki,Perempuan'],
            'telepon' => ['required', 'digits:12'],
            'alamat' => ['required', 'max:800'],
            'foto' => ['required'],
        ],[
        'name.required' => 'Nama tidak boleh kosong !',
        'email.required' => 'Email tidak boleh kosong !',        
        'ttl.required' => 'Tanggal tidak boleh kosong !',
        'gender.required' => 'Gender tidak boleh kosong !',
        'telepon.required' => 'Nomor Telepon tidak boleh kosong !',
        'alamat.required' => 'Alamat tidak boleh kosong !',
        'foto.required' => 'Foto tidak boleh kosong !'
        ]);


        $name = $validateData['name'];
        $email = $validateData['email'];
        $ttl = $validateData['ttl'];
        $gender = $validateData['gender'];
        $telepon = $validateData['telepon'];
        $alamat = $validateData['email'];
        $foto = $validateData['foto'];
      

        $user = new User();
        $finduser = $user->where('email', $email)->first();
        if ($finduser) {
            return redirect('/register')->withErrors([
                'email' => 'Email sudah terdaftar !'
            ]);
        }

        
        if($request->hasFile('foto'))
        {
            $file = $request->file('foto');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/foto',$filename);
            $user->foto = $filename;
            
        }

        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->ttl= $request->input('ttl');
        $user->gender= $request->input('gender');
        $user->telepon= $request->input('telepon');
        $user->alamat= $request->input('alamat');
        $user->save();

        return redirect('/login')->with('success', "Data berhasil dikirim, mohon tunggu pesan untuk mendapat usernma dan password !");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
