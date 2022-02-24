<?php

use Illuminate\Support\Facades\Route;
use App\Models\Expert;
use App\Models\Rating;

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

Route::get('/', function () {
    $experts = Expert::all();
    return view('index', compact('experts'));
});

Route::get('/click/{id}', function ($id) {
    $rating = Rating::where("expert_id", $id)->first();
    $rating->rating = $rating->rating + 1;
    $rating->save();
    return redirect("/");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
