<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listing',
        'listing' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Fuga libero consectetur consequuntur ipsa eveniet atque numquam aliquam
                                    sed ipsam maiores pariatur cumque laborum nemo tenetur animi,
                                    quis veniam odio quae?',
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Fuga libero consectetur consequuntur ipsa eveniet atque numquam aliquam
                                    sed ipsam maiores pariatur cumque laborum nemo tenetur animi,
                                    quis veniam odio quae?',
            ],
        ]
    ]);
});
