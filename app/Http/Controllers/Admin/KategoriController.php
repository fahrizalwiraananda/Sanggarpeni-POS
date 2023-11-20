<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'test';
        $kategori = Kategori::all(); //Maksed guna mengambil seluruh data pada warga
      
        // dd($warga); //cek data dapat diakses
        
        return view('admin.kategori.index', compact(['kategori']))->with([
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {
        $kategori = new Kategori();

        $request->validate([
            'nama_kategori' => 'required',
            'image' => 'required'
        ],
        ['nama_kategori.required' => 'Kategori tidak boleh kosong !',
        'image.required' => 'Gambar tidak boleh kosong !']
        );

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/category',$filename);
            $kategori->image = $filename;
            
        }
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect('kategori');
    }

    public function edit($id){
        $kategori = Kategori::find($id);
        return view('admin.kategori.update', compact('kategori'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request, $id){

        
        $kategori = Kategori::find($id);
        if($request->hasFile('image')){
            $path = 'asset/uploads/category/'.$kategori->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/category/',$filename);
            $kategori->image = $filename;
        }
        
        $kategori->nama_kategori = $request->input('nama_kategori');
        $kategori->update();
        
        return redirect('kategori');
    }


    public function destroy($id){
        $kategori = Kategori::find($id);
        if($kategori->image){
            $path = 'asset/upload/kategori/'.$kategori->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $kategori->delete();
        return redirect('kategori');
    }
}
