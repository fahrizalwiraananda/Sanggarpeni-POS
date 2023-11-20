<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;




class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = new Produk();

        $dtproduk = $produk->join('categories', 'categories.id_kategori', '=', 'products.id_kategori')
        ->select('products.*','categories.nama_kategori')
        ->orderBy('kode_produk', 'asc')
        ->get();


        return view('admin.produk.index', ['produk' => $dtproduk], compact('produk'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function add(){
        $kategori = Kategori::all();

        $produk = Produk::all();

        $q = DB::table('products')->select(DB::raw('MAX(RIGHT(kode_produk,5)) as kode'));

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
        



        return view('admin.produk.add', compact('kategori', 'kode'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function insert(Request $request){
        $request->validate([
            'nama_produk' => 'required',
            'id_kategori' => 'required',
            'harga_produk' => 'required',
            'diskon' => 'required',
            'berat' => 'required',
            'material' => 'required',
            'size' => 'required',
            'pelapis' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'image' => 'required'
        ],
        [
        'nama_produk.required' => 'Nama Produk tidak boleh kosong !',
        'id_kategori.required' => 'Kategori tidak boleh kosong !',
        'harga_produk.required' => 'Harga Produk Kelamin tidak boleh kosong !',
        'diskon.required' => 'Diskon tidak boleh kosong !',
        'berat.required' => 'Berat Produk tidak boleh kosong !',
        'material.required' => 'Material tidak boleh kosong !',
        'size.required' => 'Ukuran tidak boleh kosong !',
        'pelapis.required' => 'Pelapis tidak boleh kosong !',
        'stok.required' => 'Stok tidak boleh kosong !',
        'deskripsi.required' => 'Deskripsi Produk tidak boleh kosong !',
        'image.required' => 'Foto tidak boleh kosong !'
        ]
        );

        $produk = new Produk();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/product',$filename);
            $produk->image = $filename;
            
        }

       
        $produk->kode_produk = $request->input('kode_produk');
        $produk->nama_produk = $request->input('nama_produk');
        $produk->id_kategori = $request->input('id_kategori');
        $produk->harga_produk = $request->input('harga_produk');
        $produk->diskon = $request->input('diskon');
        $produk->berat = $request->input('berat');
        $produk->material = $request->input('material');
        $produk->size = $request->input('size');
        $produk->pelapis = $request->input('pelapis');
        $produk->stok = $request->input('stok');
        $produk->deskripsi = $request->input('deskripsi');

    
        $produk->save();
        return redirect('produk');
    }

    public function edit($id_produk){
        $kategori = Kategori::all();
        
        $produk = Produk::where('id_produk',$id_produk)->first();

        return view('admin.produk.update', compact('produk','kategori'))->with([
            'user' => Auth::user(),
        ]);
    
    }

    public function update(Request $request,$id){
        $produk = Produk::find($id);

        if($request->hasFile('image')){
            $path = 'asset/uploads/product/'.$produk->image;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('asset/uploads/product',$filename);
            $produk->image = $filename;
        }
        $produk->kode_produk = $request->input('kode_produk');
        $produk->nama_produk = $request->input('nama_produk');
        $produk->id_kategori = $request->input('id_kategori');
        $produk->harga_produk = $request->input('harga_produk');
        $produk->diskon = $request->input('diskon');
        $produk->berat = $request->input('berat');
        $produk->material = $request->input('material');
        $produk->size = $request->input('size');
        $produk->pelapis = $request->input('pelapis');
        $produk->stok= $request->input('stok');
        $produk->deskripsi= $request->input('deskripsi');
        $produk->update();
        return redirect('produk');
    }

    public function delete($id){
        $produk = Produk::find($id);
        if($produk->image){
            $path = 'asset/uploads/product/'.$produk->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $produk->delete();
        return redirect('produk');
    }

    public function ekspor(){
        $produk = new Produk();

        $dtproduk = $produk->join('categories', 'categories.id_kategori', '=', 'products.id_kategori')->select('products.*','categories.nama_kategori')->get();


        return view('admin.produk.export', ['produk' => $dtproduk], compact('produk'))->with([
            'user' => Auth::user(),
        ]);
    }

    
    public function print($id_produk){
        $kategori = Kategori::all();
        
        $produk = Produk::where('id_produk',$id_produk)->first();

        return view('admin.produk.preview-print', compact('produk','kategori'))->with([
            'user' => Auth::user(),
        ]);
    
    }

    public function barcodeGenerate($id_produk){
        $kategori = Kategori::all();
        
        $produk = Produk::where('id_produk',$id_produk)->first();

        view()->share('products', $produk);
        $pdf = Pdf::loadView('admin.produk.preview-print', compact('produk'));
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('invoice.pdf');    
    }

    //public function print($id){
    //    $produk = Produk::find($id);
        
    //    $pdf = PDF::loadView('admin.produk.barcode', ['kode_produk' => $produk]);

   //     return $pdf->stream('Cetak Barcode.pdf');
   // }
}
