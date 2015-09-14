<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * @SWG\Swagger(
 *      @SWG\Info(
 *          title="Test API",
 *          description="This is a test project for swaggervel",
 *          version="1.0.0"
 *      )
 * )
 *
 * @SWG\Tag(name="persons")
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docs', function () {
    return response()->json(\Swagger\scan(app_path()));
});

Route::resource('persons', 'PersonsController');
