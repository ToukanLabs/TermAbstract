<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/disorder', function () {
    if (!request()->get('term')) {
        return response([]);
    }

    return App\Models\Disorder::where('term', 'like', '%' . request()->get('term') . '%')->get();

})->name('disorders');
