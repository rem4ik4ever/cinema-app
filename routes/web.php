<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/cinema-halls', 'CinemaHallController@index');
$router->get('/cinema-halls/{id}', 'CinemaHallController@show');
$router->post('/cinema-halls', 'CinemaHallController@create');
$router->put('/cinema-halls/{id}', 'CinemaHallController@update');
$router->delete('/cinema-halls/{id}', 'CinemaHallController@destroy');


$router->get('/movies', 'MoviesController@index');
$router->get('/movies/{id}', 'MoviesController@show');
$router->post('/movies', 'MoviesController@create');
$router->put('/movies/{id}', 'MoviesController@update');
$router->delete('/movies/{id}', 'MoviesController@destroy');


$router->get('/seats', 'SeatController@index');
$router->get('/seats/{id}', 'SeatController@show');
$router->post('/seats', 'SeatController@create');
$router->put('/seats/{id}', 'SeatController@update');
$router->delete('/seats/{id}', 'SeatController@destroy');


$router->get('/seances', 'SeanceController@index');
$router->get('/seances/{id}', 'SeanceController@show');
$router->post('/seances', 'SeanceController@create');
$router->put('/seances/{id}', 'SeanceController@update');
$router->delete('/seances/{id}', 'SeanceController@destroy');
$router->get('/seances/{id}/movie', 'SeanceController@showMovie');
$router->get('/seances/{id}/cinema-hall', 'SeanceController@showCinemaHall');


$router->get('/reservations', 'ReservationController@index');
$router->get('/reservations/{id}', 'ReservationController@show');
$router->post('/reservations', 'ReservationController@create');
$router->put('/reservations/{id}', 'ReservationController@update');
$router->delete('/reservations/{id}', 'ReservationController@destroy');
$router->get('/reservations/{id}/seat', 'ReservationController@showSeat');
$router->get('/reservations/{id}/seance', 'ReservationController@showSeance');


