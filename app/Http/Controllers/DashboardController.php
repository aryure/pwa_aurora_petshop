<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        // $countpenjualan = DB::table('transaksi')->count();
        $countusers     = DB::table('users')->count();
        // $counthewan     = DB::table('pesananhewan')->count();
        // $countinvoices     = DB::table('users')->count();
        return view('Admin.Dashboard.Dashboard', compact('countusers'));
    }

    // function countData($table){
    // }
   
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

   
    public function edit($id)
    {
        //
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
