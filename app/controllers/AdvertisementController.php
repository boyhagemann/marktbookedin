<?php

class AdvertisementController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$advertisements = API::get('api/advertisements', Input::all());
        return View::make('advertisements/index', compact('advertisements'));
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function supply()
    {
        $advertisements = API::get('api/advertisements', ['type' => 'supply']);
        return View::make('advertisements.supply', compact('advertisements'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function demand()
    {
        $advertisements = API::get('api/advertisements', ['type' => 'demand']);
        return View::make('advertisements.demand', compact('advertisements'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('advertisements.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $v = Validator::make(Input::all(), [
            'type' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);

        if($v->fails()) {
            return Redirect::route('advertisements.create')->withErrors($v->errors())->withInput();
        }

        $advertisement = new Advertisement();
        $advertisement->fill(Input::all());
        $advertisement->user_id = Auth::getUser()->id;
        $advertisement->save();

        $message = Lang::get('advertisements.create.message.success');
        return Redirect::route('advertisements.show', $advertisement->slug)->withSuccess($message);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Advertisement $advertisement)
	{
		return View::make('advertisements.show', compact('advertisement'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
