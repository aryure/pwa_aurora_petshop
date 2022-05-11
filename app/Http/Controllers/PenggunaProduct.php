<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;
use DB;

class PenggunaProduct extends Controller
{
    public function index()
    {
        $countCart      = DB::table('carts')->count();
        $dtStok         = Stok::all();

        return view('Pengguna.Product.Product', compact('countCart','dtStok'));
    }

    
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    
    public function detail($id)
    {
        $countCart      = DB::table('carts')->count();
        $prdct          = Stok::findorfail($id);
        
        return view('Pengguna.Product.Detail_Product', compact('prdct', 'countCart'));
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
