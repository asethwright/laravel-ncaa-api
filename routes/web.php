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

Route::get('/', function () {
  // documentation goes here
});

Route::get('/games', function () {
  $myArray = [
    [
      'home' => 'UNC',
      'away' => 'Arkansas',
      'ptsHome' => 72,
      'ptsAway' => 65
    ],
    [
      'home' => 'Duke',
      'away' => 'South Carolina',
      'ptsHome' => 81,
      'ptsAway' => 89
    ]
  ];
  return Response::json($myArray);
});

Route::get('/games/{id}', function ($id) {
  return $id;
});
