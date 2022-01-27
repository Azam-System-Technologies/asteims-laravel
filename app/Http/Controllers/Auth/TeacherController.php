<?php

namespace App\Http\Controllers\Auth;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view ('teacher.index')->with('teacher', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
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

        $request->validate([
            'upload_file' => 'required|mimes:jpg,png,jpeg,svg|max:5048'
        ]);
        $input = $request->all();
        if($request->hasFile('upload_file'))
        {
            $destination_path = 'public/images/teacherimages';
            $image = $request->file('upload_file');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('upload_file')->storeAs($destination_path,$image_name);

            $input['upload_file'] = $image_name;
      
         }
         Teacher::create($input);
         return redirect('teachers')->with('flash_message', 'Teacher Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teachers = Teacher::find($id);
        return view('teacher.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teachers = Teacher::find($id);
        return view('teacher.edit')->with('teachers', $teachers);
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
        $teacher = Teacher::find($id);
        $input = $request->all();
        $teacher->update($input);
        return redirect()->back()->with('flash_message', 'Teacher Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Teacher::destroy($request->id);
        return redirect()->back()->with('flash_message', 'Teacher Data deleted!');  
    }
}
