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
    $supply = API::get('api/advertisements', ['type' => 'supply']);
    $demand = API::get('api/advertisements', ['type' => 'demand']);
	return View::make('layouts.home', compact('supply', 'demand'));
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
        $user->image = $info['image'];
        $user->save();

        Auth::login($user);

        return Redirect::to('/');
    }

    app('opauth')->run();

}])->where(['strategy' => '.*']);


Route::bind(Lang::get('routes.advertisements'), function($slug) {
    return Advertisement::where('slug', $slug)->firstOrFail();
});

Route::get(Lang::get('routes.supply'), [
    'as'    => 'advertisements.supply',
    'uses'  => 'AdvertisementController@supply',
]);

Route::get(Lang::get('routes.demand'), [
    'as'    => 'advertisements.demand',
    'uses'  => 'AdvertisementController@demand',
]);

Route::group(['before' => 'auth'], function() {

    Route::resource(Lang::get('routes.advertisements'), 'AdvertisementController', [
        'names'    => [
            'index' => 'advertisements.index',
            'show' => 'advertisements.show',
            'create' => 'advertisements.create',
            'store' => 'advertisements.store',
            'edit' => 'advertisements.edit',
            'update' => 'advertisements.update',
            'destroy' => 'advertisements.destroy',
        ],
    ]);

});


Route::group(['prefix' => 'api', 'namespace' => 'Api'], function() {

    Route::get('advertisements', function() {
        return 'test';
    });
    Route::resource('advertisements', 'AdvertisementController');

});