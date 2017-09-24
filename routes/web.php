<?php

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

Route::get('/home', function () {
    return view('home/index');
});

Route::get('/users', function () {
    $users = [
        [
            'id' => '1',
            'firstName' => 'Pauline',
            'lastName' => 'Carte',
            'avatar' => 'https://randomuser.me/api/portraits/women/0.jpg'
        ],
        [
            'id' => '2',
            'firstName' => 'Jason',
            'lastName' => 'Creed',
            'avatar' => 'https://randomuser.me/api/portraits/men/15.jpg'
        ],
        [
            'id' => '3',
            'firstName' => 'Chad',
            'lastName' => 'Nickson',
            'avatar' => 'https://randomuser.me/api/portraits/men/4.jpg'
        ],
        [
            'id' => '4',
            'firstName' => 'Chrystal',
            'lastName' => 'Hendry',
            'avatar' => 'https://randomuser.me/api/portraits/women/11.jpg'
        ],
        [
            'id' => '5',
            'firstName' => 'Eden',
            'lastName' => 'Ramirez',
            'avatar' => 'https://randomuser.me/api/portraits/women/47.jpg'
        ],
        [
            'id' => '6',
            'firstName' => 'Ron',
            'lastName' => 'Flores',
            'avatar' => 'https://randomuser.me/api/portraits/men/20.jpg'
        ],
        [
            'id' => '7',
            'firstName' => 'Martin',
            'lastName' => 'Francis',
            'avatar' => 'https://randomuser.me/api/portraits/men/62.jpg'
        ],
        [
            'id' => '8',
            'firstName' => 'Joyce',
            'lastName' => 'Beckhard',
            'avatar' => 'https://randomuser.me/api/portraits/women/36.jpg'
        ],
        [
            'id' => '9',
            'firstName' => 'Robert',
            'lastName' => 'Barmore',
            'avatar' => 'https://randomuser.me/api/portraits/men/44.jpg'
        ],
        [
            'id' => '10',
            'firstName' => 'Adele',
            'lastName' => 'Morris',
            'avatar' => 'https://randomuser.me/api/portraits/women/44.jpg'
        ],
    ];
    return view('users/index', compact('users'));
});

Route::get('/users/{user}', function () {
    $compliments = [
        'Well done',
        'You are a good friend',
        'Kudos on your promotion, you deserve it!'
    ];
    return view('users/user', compact('compliments'));
});

Route::get('/compliments/received', function () {
    return view('compliments/received');
});

Route::get('/compliments/given', function () {
    return view('compliments/given');
});