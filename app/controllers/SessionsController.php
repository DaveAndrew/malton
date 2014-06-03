<?php
use Acme\Forms\LoginForm;

class SessionsController extends \BaseController {

    protected $loginForm;

    function __construct(LoginForm $loginForm)
    {
        $this->loginForm = $loginForm;
    }


    /**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->loginForm->validate($input = Input::only('email','password'));

        if (Auth::attempt($input))
        {
            return Redirect::intended('/'); // url.intended
        }

        return Redirect::back()->withInput()->with('flash_message', 'Invalid login details.');

        // validate

//        $input = Input::only('email', 'password');
//
//        $attempt = (Auth::attempt($input));
//
//        if ($attempt)
//        {
//            dd('were good');
//        }
//
//        dd('failed');


//        $input = Input::all();
//
//        $attempt = Auth::attempt([
//            'email' => $input['email'],
//            'password' => $input['password']
//        ]);
//
//        if ($attempt) return Redirect::intended('/')->with('flash_message', 'You have been logged in.');
//
//        return Redirect::back()->with('flash_message', 'Invalid login details.')->withInput();

	}



	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
		Auth::logout();

        return Redirect::home();
	}

//    /**
//     * @return mixed
//     */
//    public function getLoginForm()
//    {
//        return $this->loginForm;
//    }

}