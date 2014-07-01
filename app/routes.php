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

App::setLocale('nl');

Route::get('/', function()
{
    $advertisements = API::get('api/advertisements');
	return View::make('home', compact('advertisements'));
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
        $user = User::firstOrNew(['email' => $info['email']]);
        $user->first_name = $info['first_name'];
        $user->last_name = $info['last_name'];
        $user->save();

        Auth::login($user);

        return Redirect::to('/');
    }

    app('opauth')->run();

}])->where(['strategy' => '.*']);


Route::bind(Lang::get('routes.advertisements'), function($slug) {
    return Advertisement::where('slug', $slug)->firstOrFail();
});

Route::resource(Lang::get('routes.advertisements'), 'AdvertisementController', [
    'names'    => [
        'index' => 'advertisements.index',
        'show' => 'advertisements.show',
    ],
]);

Route::group(['prefix' => 'api', 'namespace' => 'Api'], function() {

    Route::get('advertisements', function() {
        return 'test';
    });
    Route::resource('advertisements', 'AdvertisementController');

});