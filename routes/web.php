<?php

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/layouts/app', function () {
    $data = 'Rizky Risnandi Ikhsan';
    return view('/layouts/app',['data' => $data]);
})->name('app');
// Route::view('/layouts/app','layouts/app', ['name'=> 'Rizky Risnandi']);
// Route::get('/layouts/app/{id}/{title}', function (Request $request) {
//     // return 'ini adalah app ' . $request->id . 'dan disini ada '. $request->title;
//     return redirect()->route('app');
// });

Route::get('app', [AppController::class, 'index'])->name('blogs');
Route::get('blog-add', [AppController::class, 'add']);
route::post('blog-create', [AppController::class, 'create']);
route::get('blog/{id}/detail',[AppController::class, 'show']);
route::get('blog/{id}/edit',[AppController::class, 'edit']);
route::patch('blog/{id}/update',[AppController::class, 'update']);
route::get('blog/{id}/delete',[AppController::class, 'delete']);
