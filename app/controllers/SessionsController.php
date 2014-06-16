<?php

class SessionsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('sessions.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::check())
            return Redirect::route('admin');
        else
            return View::make('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::only('username', 'password');
        $attempt = Auth::attempt($input);

        if ($attempt)
            return Redirect::intended('/admin');
        else
            return Redirect::back()->withInput()->withErrors(['mess' => 'Wrong E-mail address or Password']);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();

        return Redirect::home();
    }

}