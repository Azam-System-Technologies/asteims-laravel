<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
    function index()
    {
        $vendor['vendor'] = DB::table('vendor')->get();
        return view('vendor.index',  $vendor);
    }


    function insert(Request $req)
    {
        
        DB::table('vendor')->insertGetId([

            'name'=>$req->vend_name,
            'email'=>$req->vend_email,
            'phone'=>$req->vend_phone,
            'contact_name'=>$req->contact_name,
            
        ]);
       
        return redirect(route('vendor_index'));
    }

    function show($vendID)
    {
        
        $vendor = DB::table('vendor')->find($vendID);
        return view('vendor.show' , ['vendor'=> $vendor]);
    }

    function edit($id)
    {
    
        $vendor = DB::table('vendor')->find($id);
        return view('vendor.edit')->with('vendor', $vendor);
    }

    function update(Request $req)
    {
       
        
        DB::table('vendor')->where('id' , $req->pid)->update([
            'name'=>$req->vend_name,
            'email'=>$req->vend_email,
            'phone'=>$req->vend_phone,
            'contact_name'=>$req->contact_name,
        ]);


        return redirect('ven');
    }

    function delete($id)
    {
        DB::table('vendor')->where('id' , $id)->delete();
        return redirect('ven');
    }
}
