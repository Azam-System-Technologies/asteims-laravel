<?php
  
use Illuminate\Support\Facades\Route;
use App\Models\Student;  
<<<<<<< HEAD
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ParentsController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\LocationController;
=======
use App\Models\Teacher;  
use App\Models\Salary_template;  
use App\Http\Controllers\Auth\AuthController;
>>>>>>> 961abd5 (shahab)
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  
Route::get('/',function(){
    return view('Auth/login');
});

Route::get('/students',function(){
    $students = Student::all();
    return view('student.index',compact('students'));
});

Route::get('/student/create',function(){
    return  view('student.create');
    return view('student.view',compact('students'));
});

<<<<<<< HEAD

Route::get('/teachers',function(){
    return view('teachers');
});

=======
>>>>>>> 961abd5 (shahab)
Route::get('/student/show/{id}',function($id){
    $student = Student::find($id);
return view('student.show')->with('students', $student);
});

<<<<<<< HEAD


=======
>>>>>>> 961abd5 (shahab)
Route::post('/student/delete',function(Request $request){
    Student::destroy($request->id);
    return redirect()->back()->with('flash_message', 'Student deleted!'); 
});

<<<<<<< HEAD


=======
>>>>>>> 961abd5 (shahab)
Route::get('/student/edit/{id}',function($id){
    $student = Student::find($id);
    return view('student.edit')->with('students', $student);
});


Route::post('/student/update',function(Request $request){
    
    $student = Student::find($request->id);
    $input = $request->all();
    $student->update($input);
    $students = Student::all();
    return view('student.index',compact('students'));
});

<<<<<<< HEAD


// Routes for parents controller -------------------------------------------------->

// Route::get('/parents',function(){
//     // $students = Student::all();
//     return view('parents.index');
// });

Route::get('parents' , [ParentsController::class , 'index'])->name('index');
Route::get('parents/show/{id}' , [ParentsController::class , 'show'])->name('show');
Route::get('parents/edit/{id}' , [ParentsController::class , 'edit'])->name('edit');
Route::put('parents/update' , [ParentsController::class , 'update'])->name('update');
Route::get('parents/delete/{id}' , [ParentsController::class , 'delete'])->name('delete');

Route::get('/parents/create',function(){
    return view('parents.create');
=======
                // Teachers
Route::get('/teachers',function(){
    $teachers = Teacher::all();
    return view('teacher.index',compact('teachers'));
});
                // Teacher Insertion
Route::get('/teacher/create',function(){
    return  view('teacher.create');
    return view('teacher.view',compact('teachers'));
});
                //Teacher Reading/View
Route::get('/teacher/show/{id}',function($id){
    $teachers = Teacher::find($id);
return view('teacher.show')->with('teachers', $teachers);
});

            // Teacher Data Editing
Route::get('/teacher/edit/{id}',function($id){
    $teachers = Teacher::find($id);
    return view('teacher.edit')->with('teachers', $teachers);
});

            // Teacher Data Update
Route::post('/teacher/update',function(Request $request){   
    $teacher = Teacher::find($request->id);
    $input = $request->all();
    $teacher->update($input);
    $teachers = Teacher::all();
    return view('teacher.index',compact('teachers'));
});
            // Teacher Deletion
Route::post('/teacher/delete',function(Request $request){
    Teacher::destroy($request->id);
    return redirect('teachers')->with('flash_message', 'Teacher Details deleted!'); 
});

                  // Salary Template
  Route::get('/salary_template',function(){
    $salary_template = Salary_template::all();
    return view('salary_template.index',compact('salary_template'));
});
                // Salary Template Insertion
Route::get('/salary_template/create',function(){
    return  view('salary_template.create');
    return view('salary_template.view',compact('salary_template'));
});
                //Salary_template Reading/View
Route::get('/salary_template/show/{id}',function($id){
    $salary_template = salary_template::find($id);
return view('salary_template.show')->with('salary_template', $salary_template);
});

            // Salary_template Data Editing
Route::get('/salary_template/edit/{id}',function($id){
    $salary_template = Salary_template::find($id);
    return view('Salary_template.edit')->with('salary_template', $salary_template);
});

            // Salary_template Data Update
Route::post('/salary_template/update',function(Request $request){   
    $salary_template = Salary_template::find($request->id);
    $input = $request->all();
    $salary_template->update($input);
    $salary_template = Salary_template::all();
    return view('salary_template.index',compact('salary_template'));
});
            // Salary_template Deletion
Route::post('/salary_template/delete',function(Request $request){
    Salary_template::destroy($request->id);
    return redirect('salary_template')->with('flash_message', 'Salary_template Details deleted!'); 
});

                    // Parents
Route::get('/parents',function(){
    return view('parents');
>>>>>>> 961abd5 (shahab)
});




<<<<<<< HEAD
Route::post('insert', [App\Http\Controllers\Auth\ParentsController::class, 'insert'])->name('insert');
Route::post('show', [App\Http\Controllers\Auth\ParentsController::class, 'show'])->name('show');
// End ----------------------------------------------------->

// Routes For Vendor Here --------------------------------------------------------------------->

Route::get('ven' , [VendorController::class , 'index'])->name('vendor_index');
Route::get('vendor/show/{id}' , [VendorController::class , 'show'])->name('show');
Route::get('vendor/edit/{id}' , [VendorController::class , 'edit'])->name('edit');
Route::put('vendor/update' , [VendorController::class , 'update'])->name('update');
Route::get('vendor/delete/{id}' , [VendorController::class , 'delete'])->name('delete');

Route::get('/vendor/create',function(){
    return view('vendor.create');
});




Route::post('insert', [App\Http\Controllers\VendorController::class, 'insert'])->name('vendor_insert');
Route::post('show', [App\Http\Controllers\VendorController::class, 'show'])->name('show');

// End ---------------------------------------------------------------------------------------------->


// Routes For Location Here --------------------------------------------------------------------->

Route::get('location' , [LocationController::class , 'index'])->name('location_index');
Route::get('location/show/{id}' , [LocationController::class , 'show'])->name('show');
Route::get('location/edit/{id}' , [LocationController::class , 'edit'])->name('edit');
Route::put('location/update' , [LocationController::class , 'update'])->name('update');
Route::get('location/delete/{id}' , [LocationController::class , 'delete'])->name('delete');

Route::get('/location/create',function(){
    return view('location.create');
});




Route::post('insert', [App\Http\Controllers\LocationController::class, 'insert'])->name('location_insert');
Route::post('show', [App\Http\Controllers\LocationController::class, 'show'])->name('show');

// End ---------------------------------------------------------------------------------------------->


=======
>>>>>>> 961abd5 (shahab)

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
<<<<<<< HEAD
Route::post('store', [App\Http\Controllers\Auth\StudentController::class, 'store'])->name('store');

=======
Route::post('student_store', [App\Http\Controllers\Auth\StudentController::class, 'store'])->name('student_store');
Route::post('store', [App\Http\Controllers\Auth\TeacherController::class, 'store'])->name('teacher_store');
Route::post('salary_store', [App\Http\Controllers\Auth\Salary_template_Controller::class, 'store'])->name('salary_template_store');
>>>>>>> 961abd5 (shahab)

