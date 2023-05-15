<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Personal_info;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::any('/{fileName?}/{nextFile?}', function($fileName='welcome', $nextFile=null) {
//     $finalFile = ($nextFile != null) ? $fileName . '/' . $nextFile : $fileName;
//     return view($finalFile);
// });

Route::get('/welcome', [RegistrationController::class, 'index']);
Route::post('/welcome', [RegistrationController::class, 'postData']);
Route::get('/response', function () {
    $personalInfo = Personal_info::all();
    echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($personalInfo);echo '</pre>'; die();
});