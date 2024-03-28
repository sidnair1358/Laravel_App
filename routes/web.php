<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', function () {
    return view(
        'listings',
        [
            'heading' => 'Latest listings',
            'listings' => Listing::all()

        ]
    );
});

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'heading' => 'Single Listing',
        'listing' => Listing::find($id)
    ]);
});

Route::get('/posts/{id}', function ($id) {
    return response('Posts' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    dd($request->name . ' ' . $request->city);
});