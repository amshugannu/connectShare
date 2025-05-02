<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\studentController;
use App\Http\Controllers\Samplecontroller;
// Route::get('/', function () {
//     return view('welcome');
    
// });

// Route::get('/',function(){
//     return view('welcome');
// });

// Route::get('/',function(){
//     $name = "rahim";
//     $age = 23;
//     return view('second',['name'=>'rahim','age'=>24]);
    // return view('second',withName($name));
// });

// Route::get('/student1',function(){
//     $name = "rah";
//     $age = 21;

//     return view('student',compact(['name',"age"]));
// });

// Route::get('/student2',function(){
//     $name = "mohan";
//     $age = 24;

//     return view('student',compact(['name',"age"]));
// });

// Route::get('/student3',function(){
//     $name = "mani";
//     $age = 19;

//     return view('student',compact(['name',"age"]));
// });

// Route::get('/{id}/{name}/{password}',[userController::class,'display']);

// Route::get('/',[studentController])

// Route::get('/json',[studentController::class,'json_resp']);

// Route::redirect('/welcome',"abc");

// Route::get("/json",function(){
//     return response()->json([
//         'message'=>'hello, laravel',
//         'status'=>200
//     ]);
// });


// Route::get('/example',function(){
//     return response("hello ,")->header('Content-Type','text/plain')->header('Custom-Header','CustomValue');
// });

// Route::get("/{id}/{name}/{password}",'display2')

// Route::resourse()

// Route::get('/form',function(){
//     return view('studentController');
// })

// Route::get('/form',[studentController::class,'getform']);
// Route::get('/',[Samplecontroller::class,'index']);



// use App\Http\Controllers\StudentController;

// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/{id}', [StudentController::class, 'show']);


// use App\Http\Controllers\UserController;
// use App\Http\Controllers\SampleController;

// Route::get('/students', [UserController::class, 'index']);
// Route::get('/students/{id}', [UserController::class, 'show']);

// Route::post("/adduser",[mycontroller::class,'adduser']);

// Route::view('login',"myform");
// Route::post('/log',[Samplecontroller::class,"loginone"]);

// Route::get('/welcomeone', function () {
//     $message = session('message') ?? 'Welcome!';
//     return $message;
// });

// Route::view('/mail',"content");
// use App\Http\Controllers\uploadcontroller;


// Route::view('/',"myform");
// Route::post('/upload',[uploadcontroller::class,"upload"]);

// Route::view('/lang','welcome');




// use Illuminate\Support\Facades\DB;

// Route::get('/check-db', function () {
//     $results = DB::table('tests')->get(); // Fetch all rows
//     return response()->json($results); // Return JSON response
// });


// use App\Models\Test;

// Route::get('/insert', function () {
//     $test = new Test();
//     $test->name = 'Laravel Demo';
//     $test->save();

//     return 'Data inserted successfully!';
// });







// use App\Http\Controllers\ResourceController;

// Route::get('/', function () { return view('pages.home'); })->name('home');
// Route::get('/explore', [ResourceController::class, 'index'])->name('explore');
// Route::get('/share', function () { return view('pages.share'); })->name('share');
// Route::post('/resource/store', [ResourceController::class, 'store'])->name('resource.store');
// Route::get('/dashboard', function () { return view('pages.dashboard'); })->name('dashboard');
// Route::get('/resource/{id}', [ResourceController::class, 'show'])->name('resource.detail');
// Route::get('/login', function () { return view('pages.login'); })->name('login');
// Route::get('/register', function () { return view('pages.register'); })->name('register');






// use App\Http\Controllers\ResourceController;
// // use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('pages.home'); })->name('home');

// // Resource Routes
// Route::get('/explore', [ResourceController::class, 'index'])->name('explore');
// Route::get('/resource/{id}', [ResourceController::class, 'show'])->name('resource.detail');

// // Share Resource Routes
// Route::get('/share', function () { return view('pages.share'); })->name('share');
// Route::post('/resource/store', [ResourceController::class, 'store'])->name('resource.store');

// // Dashboard Routes (for user resources)
// Route::get('/dashboard', [ResourceController::class, 'dashboard'])->name('dashboard');

// // Edit Resource Routes
// Route::get('/resource/{id}/edit', [ResourceController::class, 'edit'])->name('resource.edit');
// Route::put('/resource/{id}', [ResourceController::class, 'update'])->name('resource.update');

// // Delete Resource Routes
// Route::delete('/resource/{id}', [ResourceController::class, 'destroy'])->name('resource.destroy');

// // Authentication Routes
// Route::get('/login', function () { return view('pages.login'); })->name('login');
// Route::get('/register', function () { return view('pages.register'); })->name('register');











// use App\Http\Controllers\ResourceController;
// use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\Auth\LoginController;
// // use Illuminate\Support\Facades\Route;

// // Home Page
// Route::get('/', function () { 
//     return view('pages.home'); 
// })->name('home');

// // Resource Routes
// Route::get('/explore', [ResourceController::class, 'index'])->name('explore');
// Route::get('/resource/{id}', [ResourceController::class, 'show'])->name('resource.detail');

// // Share Resource Routes
// Route::get('/share', function () { 
//     return view('pages.share'); 
// })->name('share');
// Route::post('/resource/store', [ResourceController::class, 'store'])->name('resource.store');

// // Dashboard Routes (for user resources)
// Route::get('/dashboard', [ResourceController::class, 'dashboard'])->name('dashboard');

// // Edit Resource Routes
// Route::get('/resource/{id}/edit', [ResourceController::class, 'edit'])->name('resource.edit');
// Route::put('/resource/{id}', [ResourceController::class, 'update'])->name('resource.update');

// // Delete Resource Routes
// Route::delete('/resource/{id}', [ResourceController::class, 'destroy'])->name('resource.destroy');

// // Authentication Routes
// // Show Login Page
// Route::get('/login', function () { 
//     return view('pages.login'); 
// })->name('login');

// // Handle Login Submission
// Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// // Show Register Page
// Route::get('/register', function () { 
//     return view('pages.register'); 
// })->name('register');

// // Handle Register Submission
// Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// // Logout Route
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


























// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Home Page
Route::get('/', function () { 
    return view('pages.home'); 
})->name('home');

// Explore Resources
Route::get('/explore', [ResourceController::class, 'index'])->name('explore');
Route::get('/resource/{id}', [ResourceController::class, 'show'])->name('resource.detail');

// Share a Resource
Route::get('/share', function () { 
    return view('pages.share'); 
})->name('share');
Route::post('/resource/store', [ResourceController::class, 'store'])->name('resource.store');

// Dashboard for user resources
Route::get('/dashboard', [ResourceController::class, 'dashboard'])->name('dashboard');

// Edit Resource
Route::get('/resource/{id}/edit', [ResourceController::class, 'edit'])->name('resource.edit');
Route::put('/resource/{id}', [ResourceController::class, 'update'])->name('resource.update');

// Delete Resource
Route::delete('/resource/{id}', [ResourceController::class, 'destroy'])->name('resource.destroy');

// Collaborate on a resource
Route::get('/resource/{id}/collaborate', [ResourceController::class, 'collaborate'])->name('resource.collaborate');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



?>
