<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Gender;
use Illuminate\Support\Facades\Hash;

class DashboardAdminController extends Controller
{
    public function indexAdmin(Request $request)
    {

        if($request->has('search')){
            $dtAdmin = Admin::where('nama_admin', 'LIKE', '%' . $request->search . '%')->get();
            $dtGender = Gender::all();

        }else{
            $dtAdmin = Admin::With('gender')->get();
            $dtGender = Gender::all();
        }

        return view('Admin.User.Admin.User_Admin',compact('dtAdmin', 'dtGender'));
    }


    public function createAdmin()
    {
        return view('Admin.User.Admin.Create_Admin');
    }


    public function storeAdmin(Request $request)
    {
        // dd($request->all());

        $config = ['table'=>'admins','field'=>'kode_admin', 'length'=>7,'prefix'=>'adm-'];
        $kode_admin = IdGenerator::generate($config);

        Admin::Create([
            'kode_admin'    => $kode_admin,
            'nama_admin'    => $request->nama_admin,
            'level'         => $request->level,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email'         => $request->email,
            'alamat'        => $request->alamat,
            'no_tlpn'       => $request->no_tlpn,
            'password'      => Hash::make($request->password),
        ]);

        return redirect('/user-admin');
    }

   
    public function show($id)
    {
        //
    }


    public function editAdmin($id)
    {
        

        $siadmin = Admin::findorfail($id);
        return view('Admin.User.Admin.Edit_Admin',compact('siadmin'));
    }


    public function updateAdmin(Request $request, $id)
    {
        $siadmin = Admin::findorfail($id);
        $siadmin->update($request->all());
        return redirect('user-admin');
    }


    public function destroyAdmin($id)
    {
        $siadmin = Admin::findorfail($id);
        $siadmin->delete();
        return back();
    }
}
