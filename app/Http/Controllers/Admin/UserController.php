<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //return 'test';
          $userdt = User::all(); 
          
          return view('admin.user.index', compact(['userdt']))->with([
              'user' => Auth::user(),
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $userdt = User::all(); 
          
        return view('admin.user.profil', compact(['userdt']))->with([
            'user' => Auth::user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function add(){
        $userdt = User::all();
        return view('admin.user.add', compact('userdt'))->with([
            'user' => Auth::user(),
        ]);
    }


    public function store(Request $request)
    {
        {
            $validateData = $request->validate([
    
                'name' => ['required', 'max:100'],
                'email' => ['required', 'email:rfc,dns'],
                'ttl' => ['required'],
                'gender' => ['required_with:Laki-Laki,Perempuan'],
                'telepon' => ['required', 'digits:12'],
                'alamat' => ['required', 'max:800'],
                'foto' => ['required'],
                'level' => ['required'],
                'status' => ['required'],
                'username' => ['required', 'max:800'],
                'password' => ['required'],
            ],[
            'name.required' => 'Nama tidak boleh kosong !',
            'email.required' => 'Email tidak boleh kosong !',        
            'ttl.required' => 'Tanggal tidak boleh kosong !',
            'gender.required' => 'Gender tidak boleh kosong !',
            'telepon.required' => 'Nomor Telepon tidak boleh kosong !',
            'alamat.required' => 'Alamat tidak boleh kosong !',
            'foto.required' => 'Foto tidak boleh kosong !',
            'level.required' => 'Level tidak boleh kosong !',
            'status.required' => 'Status Telepon tidak boleh kosong !',
            'username.required' => 'Username tidak boleh kosong !',
            'password.required' => 'Password tidak boleh kosong !'
            ]);
    
    
            $name = $validateData['name'];
            $email = $validateData['email'];
            $ttl = $validateData['ttl'];
            $gender = $validateData['gender'];
            $telepon = $validateData['telepon'];
            $alamat = $validateData['email'];
            $foto = $validateData['foto'];
            $level = $validateData['level'];
            $status = $validateData['status'];
            $username = $validateData['username'];
            $password = $validateData['password'];
          
    
            $userdt = new User();
            $finduser = $userdt->where('email', $email)->first();
            if ($finduser) {
                return redirect('/add')->withErrors([
                    'email' => 'Email sudah terdaftar !'
                ]);
            }
    
            
            if($request->hasFile('foto'))
            {
                $file = $request->file('foto');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('asset/uploads/foto',$filename);
                $userdt->foto = $filename;
                
            }
    
            $userdt->name= $request->input('name');
            $userdt->email= $request->input('email');
            $userdt->ttl= $request->input('ttl');
            $userdt->gender= $request->input('gender');
            $userdt->telepon= $request->input('telepon');
            $userdt->alamat= $request->input('alamat');
            $userdt->level= $request->input('level');
            $userdt->status= $request->input('status');
            $userdt->username= $request->input('username');
            $userdt->password = bcrypt($request->password);
            $userdt->save();
    
            return redirect('/profil')->with('success', "Data berhasil dikirim, mohon tunggu pesan untuk mendapat usernma dan password !");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $userdt = User::find($id);
        return view('admin.user.update', compact('userdt'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request, $id){

        
        $userdt = User::find($id);
        if($request->hasFile('foto')){
            $path = 'asset/uploads/foto/'.$userdt->foto;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('foto');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/foto/',$filename);
            $userdt->foto = $filename;
        }
        
        $userdt->name= $request->input('name');
        $userdt->username= $request->input('username');
        $userdt->email= $request->input('email');
        $userdt->password = bcrypt($request->password);
        $userdt->ttl= $request->input('ttl');
        $userdt->gender= $request->input('gender');
        $userdt->telepon= $request->input('telepon');
        $userdt->alamat= $request->input('alamat');
        $userdt->level= $request->input('level');
        $userdt->status= $request->input('status');
        $userdt->update();
        
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $user = User::find($id);
        if($user->foto){
            $path = 'asset/upload/foto/'.$user->foto;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $user->delete();
        return redirect('user');
    }
}
