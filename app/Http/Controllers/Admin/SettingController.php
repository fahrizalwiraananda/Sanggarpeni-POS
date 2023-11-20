<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'test';
        $settings = Setting::all(); //Maksed guna mengambil seluruh data pada warga
      
        // dd($warga); //cek data dapat diakses
        
        return view('admin.setting.index', compact(['settings']))->with([
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {
        $setting = new Setting();

        $request->validate([
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'diskon' => 'required',
            'path_logo' => 'required'
        ],
        [
            
        'nama_perusahaan.required' => 'Nama Perusahaan tidak boleh kosong !',
        'alamat.required' => 'Alamat tidak boleh kosong !',
        'telepon.required' => 'Nomor Telepon tidak boleh kosong !',
        'diskon.required' => 'Diskon tidak boleh kosong !',
        'path_logo.required' => 'Foto Logo tidak boleh kosong !'
        ]
        );

        if($request->hasFile('path_logo'))
        {
            $file = $request->file('path_logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/setting',$filename);
            $setting->path_logo = $filename;
            
        }
        $setting->nama_perusahaan = $request->nama_perusahaan;
        $setting->alamat = $request->alamat;
        $setting->telepon = $request->telepon;
        $setting->diskon = $request->diskon;

        $setting->save();

        return redirect('setting');
    }

    public function edit($id){
        $setting = Setting::find($id);
        return view('admin.setting.update', compact('setting'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request, $id){

        
        $setting = Setting::find($id);
        if($request->hasFile('path_logo')){
            $path = 'asset/uploads/setting/'.$setting->path_logo;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('path_logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/setting/',$filename);
            $setting->path_logo = $filename;
        }
        
        $setting->nama_perusahaan = $request->input('nama_perusahaan');
        $setting->alamat = $request->input('alamat');
        $setting->telepon = $request->input('telepon');
        $setting->diskon = $request->input('diskon');
        $setting->update();
        
        return redirect('setting');
    }


    public function destroy($id){
        $setting = Setting::find($id);
        if($setting->image){
            $path = 'asset/upload/setting/'.$setting->path_logo;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $setting->delete();
        return redirect('setting');
    }
}
