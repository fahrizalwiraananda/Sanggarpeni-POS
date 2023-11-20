<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'test';
        $member = Member::all(); //Maksed guna mengambil seluruh data pada warga
      
        // dd($warga); //cek data dapat diakses
        
        return view('admin.member.index', compact(['member']))->with([
            'user' => Auth::user(),
        ]);
    }

    public function add(){

        $produk = Member::all();

        $q = DB::table('members')->select(DB::raw('MAX(RIGHT(kode_member,5)) as kode'));

        $kode="";
        if($q->count()>0){
            foreach($q->get() as $kode) {
                $tmp = ((int)$kode->kode)+1;
                $kode = sprintf("%05s", $tmp);
            }
        }
        else{
            $kode = "00001";
        }
        



        return view('admin.member.add', compact('kode'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {
        $member = new Member();


        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'email' => 'required',
            'telpon' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required',
            'alamat_lengkap' => 'required',
            'foto' => 'required'
        ],
        [
        'name.required' => 'Nama tidak boleh kosong !',
        'username.required' => 'Username tidak boleh kosong !',
        'tgl_lahir.required' => 'Tanggal Lahir tidak boleh kosong !',
        'jk.required' => 'Jenis Kelamin tidak boleh kosong !',
        'email.required' => 'Email tidak boleh kosong !',
        'telpon.required' => 'Nomor Telepon tidak boleh kosong !',
        'provinsi.required' => 'Provinsi tidak boleh kosong !',
        'kabupaten.required' => 'Kabupaten tidak boleh kosong !',
        'kecamatan.required' => 'Kecamatan tidak boleh kosong !',
        'kode_pos.required' => 'Kode Pos tidak boleh kosong !',
        'alamat_lengkap.required' => 'Alamat Lengkap tidak boleh kosong !',
        'foto.required' => 'Foto tidak boleh kosong !'
        ]
        );

        if($request->hasFile('foto'))
        {
            $file = $request->file('foto');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/member',$filename);
            $member->foto = $filename;
            
        }
        $member->name = $request->name;
        $member->kode_member = $request->kode_member;
        $member->username = $request->username;
        $member->tgl_lahir = $request->tgl_lahir;
        $member->jk = $request->jk;
        $member->email = $request->email;
        $member->telpon = $request->telpon;
        $member->provinsi = $request->provinsi;
        $member->kabupaten = $request->kabupaten;
        $member->kecamatan = $request->kecamatan;
        $member->kode_pos = $request->kode_pos;
        $member->alamat_lengkap = $request->alamat_lengkap ;
        $member->save();

        return redirect('member');
    }

    public function edit($id){
        $member = Member::find($id);
        return view('admin.member.update', compact('member'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request, $id){

        
        $member = Member::find($id);
        if($request->hasFile('foto')){
            $path = 'asset/uploads/member/'.$member->foto;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('foto');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/member/',$filename);
            $member->foto = $filename;
        }
        
        $member->name = $request->input('name');
        $member->username = $request->input('name');
        $member->username = $request->input('username');
        $member->tgl_lahir = $request->input('tgl_lahir');
        $member->jk = $request->input('jk');
        $member->email = $request->input('email');
        $member->telpon = $request->input('telpon');
        $member->provinsi = $request->input('provinsi');
        $member->kabupaten = $request->input('kabupaten');
        $member->kecamatan = $request->input('kecamatan');
        $member->kode_pos = $request->input('kode_pos');
        $member->alamat_lengkap = $request->input('alamat_lengkap');
        $member->update();
        
        return redirect('member');
    }


    public function destroy($id){
        $member = Member::find($id);
        if($member->foto){
            $path = 'asset/upload/member/'.$member->foto;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $member->delete();
        return redirect('member');
    }
}
