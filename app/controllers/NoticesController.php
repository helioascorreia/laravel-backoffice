<?php

class NoticesController extends \BaseController {

	/**
	 * Display a listing of notices
	 *
	 * @return Response
	 */
	public function index()
	{
		$notices = Notice::orderBy('id', 'DESC')->simplePaginate(20);

		return View::make('notices.index', compact('notices'));
	}

	/**
	 * Show the form for creating a new notice
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('notices.create');
	}

	/**
	 * Store a newly created notice in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Notice::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Notice::create($data);

		return Redirect::route('notices.index');
	}

	/**
	 * Display the specified notice.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$notice = Notice::findOrFail($id);

		return View::make('notices.show', compact('notice'));
	}

	/**
	 * Show the form for editing the specified notice.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$notice = Notice::find($id);

		return View::make('notices.edit', compact('notice'));
	}

	/**
	 * Update the specified notice in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$notice = Notice::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Notice::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$notice->update($data);

		return Redirect::route('notices.index');
	}

	/**
	 * Remove the specified notice from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Notice::destroy($id);

		return Redirect::route('notices.index');
	}

}
