<?php

namespace App\Http\Controllers\Auth;
use App\Models\Salary_template;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Salary_template_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Salary_template = Salary_template::all();
        return view ('Salary_template.index')->with('Salary_template', $Salary_template);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Salary_template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $teacher = new Teacher;
        // $teacher->name = $request->input('name');
        // $teacher->designation = $request->input('designation');
        // $teacher->date_of_birth = $request->input('date_of_birth');
        // $teacher->gender = $request->input('gender');
        // $teacher->religion = $request->input('religion');
        // $teacher->email = $request->input('email');
        // $teacher->mobile = $request->input('mobile');
        // $teacher->address = $request->input('address');
        // $teacher->joining_date = $request->input('joining_date');
        // $teacher->username = $request->input('username');
        // $teacher->password = $request->input('password');
        // $request->validate([
        //     'upload_file' => 'required|mimes:jpg,png,jpeg,svg|max:5048'
        // ]);
        
        $input = $request->all();
        // if($request->hasFile('upload_file'))
        // {
        //     $destination_path = 'public/images/teacherimages';
        //     $image = $request->file('upload_file');
        //     $image_name = $image->getClientOriginalName();
        //     $path = $request->file('upload_file')->storeAs($destination_path,$image_name);

        //     $input['upload_file'] = $image_name;
      
         //}
         Salary_template::create($input);
         return redirect('salary_template')->with('flash_message', 'Salary_template Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Salary_template = Salary_template::find($id);
        return view('Salary_template.show')->with('Salary_template', $Salary_template);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salary_template = Salary_template::find($id);
        return view('Salary_template.edit')->with('salary_template', $salary_template);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Salary_template = Salary_template::find($id);
        $input = $request->all();
        $Salary_template->update($input);
        return redirect()->back()->with('flash_message', 'Salary_template Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Salary_template::destroy($request->id);
        return redirect()->back()->with('flash_message', 'Salary_template Data deleted!');  
    }
}
