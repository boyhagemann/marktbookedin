<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/logout', ['as' => 'auth.logout', function()
{
    Auth::logout();
    return Redirect::to('/');
}]);

Route::any('auth/social/{strategy}/{action?}', ['as' => 'auth.social', function ($strategy, $action = 'request') {

    if($strategy == 'callback') {

        $response = unserialize(base64_decode(Input::get('opauth')));
        $info = $response['auth']['info'];

        User::unguard();
        $user = User::firstOrCreate(['email' => $info['email']]);
        $user->first_name = $info['first_name'];
        $user->last_name = $info['last_name'];
        $user->save();

        Auth::login($user);

        return Redirect::to('/');


        dd($response);
    }
    app('opauth')->run();


}])->where(['strategy' => '.*']);
