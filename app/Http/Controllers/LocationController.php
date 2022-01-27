<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{

        function index()
        {
            $location['location'] = DB::table('location')->get();
            return view('location.index',  $location);
        }
    
    
        function insert(Request $req)
        {
            
            DB::table('location')->insertGetId([
    
                'location'=>$req->location,
                'description'=>$req->desc,
                
            ]);
           
            return redirect(route('location_index'));
        }
    
        function show($locID)
        {
            
            $location = DB::table('location')->find($locID);
            return view('location.show' , ['location'=> $location]);
        }
    
        function edit($id)
        {
        
            $location = DB::table('location')->find($id);
            return view('location.edit')->with('location', $location);
        }
    
        function update(Request $req)
        {
           
            
            DB::table('location')->where('id' , $req->pid)->update([
                'location'=>$req->location,
                'description'=>$req->desc,
            ]);
    
    
            return redirect('location');
        }
    
        function delete($id)
        {
            DB::table('location')->where('id' , $id)->delete();
            return redirect('location');
        }
}
