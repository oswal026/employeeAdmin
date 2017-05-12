<?php namespace employeeAdmin\Http\Controllers;

use employeeAdmin\Http\Requests;
use employeeAdmin\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Auth, Debugbar;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use employeeAdmin\Admin;

class LoginController extends Controller {

	public function __construct()
    {
        $this->auth = app('auth');
        $this->middleware('guest');

     }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('login');
	}


	/**
    * Login a la aplicación (Post)
    * @param request
    * @return Response
    */
    public function loginPost(Request $request)
    {

       	//Necessary to use remember_token in DB
    	if($request->input('remember') == 'on'){
    		$remember = true;
    	}else{
    		$remember = false;
    	}
    	

        if (Auth::attempt(['user' => $request->input('user'), 'password' => $request->input('password')],$remember))
        {
            return redirect()->intended('employee');

        }else{
        	return new RedirectResponse(url('loginError/?error=noAdmin')); 
        }
    }


    public function loginError(Request $request){


        return view('errors.loginError',
            ['error' => $request->error,
            ]);   
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
