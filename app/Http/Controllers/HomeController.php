<?php namespace employeeAdmin\Http\Controllers;

use employeeAdmin\Employee;
use Auth;
use Illuminate\Auth\Authenticatable;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
		$this->auth = app('auth');
		

	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee = Employee::paginate(10);
		return view('employee.index',compact('employee'));

	}

	

}
