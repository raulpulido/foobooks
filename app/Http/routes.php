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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function()
{
    return 'ABOUT content';
});
Route::get('about/directions',array('as'=>'directions', function()
{
    $theURL=URL::route('directions');
    return "Directions go to this URL: $theURL";
}));

Route::get('about/{theSubject}',function($theSubject)
{
    return $theSubject.' goes here';
});

Route::get('about/classes/{theSubject}',function($theSubject)
{
    return "Content on $theSubject";
});

Route::get('about/classes/{theSubject}/{theSubject2}',function($theSubject,$theSubject2)
{
    return "Content on $theSubject and  $theSubject2";
});

Route::get('where',function()
{
    return Redirect::route('directions');
});