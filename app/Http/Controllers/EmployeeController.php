<?php namespace employeeAdmin\Http\Controllers;

use employeeAdmin\Http\Requests;
use employeeAdmin\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use employeeAdmin\Http\Requests\CreateEmployeeRequest;
use employeeAdmin\Http\Requests\EditEmployeeRequest;
use employeeAdmin\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Auth, Debugbar;
use Illuminate\Auth\Authenticatable;

class EmployeeController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->auth = app('auth');

	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		//Debugbar::addMessage($request->all());

		$search = $request->input('search');
		$startDate = $request->input('startContractDate');
		$endDate = $request->input('endContractDate');

		//Search by Document ID, Full Name, E-Mail or Address
		if($search && (!$startDate &&  !$endDate)){

			$employee = Employee::where('fullName','LIKE','%'.$search.'%')
								->orWhere('documentId','LIKE','%'.$search.'%')
								->orWhere('email','LIKE','%'.$search.'%')
								->orWhere('address','LIKE','%'.$search.'%')->paginate(10);
		}else{
			//Search by (Document ID, Full Name, E-Mail or Address) and Start ContractDate
			if($search && $startDate && !$endDate){
				$employee = Employee::where('fullName','LIKE','%'.$search.'%')
									->orWhere('documentId','LIKE','%'.$search.'%')
									->orWhere('email','LIKE','%'.$search.'%')
									->orWhere('address','LIKE','%'.$search.'%')
									->where('contractDate','>=',$startDate)->paginate(10);
			}else{
				//Search by (Document ID, Full Name, E-Mail or Address) and End ContractDate
				if($search && !$startDate && $endDate){
					$employee = Employee::where('fullName','LIKE','%'.$search.'%')
										->orWhere('documentId','LIKE','%'.$search.'%')
										->orWhere('email','LIKE','%'.$search.'%')
										->orWhere('address','LIKE','%'.$search.'%')
										->where('contractDate','<=', $endDate)->paginate(10);
				}else{
					//Search by (Document ID, Full Name, E-Mail or Address) and  (Start and End Contract Date)
					if($search && $startDate && $endDate){
						$employee = Employee::where('contractDate','>=', $startDate)
											->where('contractDate','<=', $endDate)
											->Where(function($query) use ($search)
								            {
								                $query->where('fullName','LIKE','%'.$search.'%')
														->orWhere('documentId','LIKE','%'.$search.'%')
														->orWhere('email','LIKE','%'.$search.'%')
														->orWhere('address','LIKE','%'.$search.'%');
								            })->paginate(10);
					}else{
						//Search by Start and End Contract Date
						if(!$search && $startDate &&  $endDate){
							$employee = Employee::where('contractDate','>=', $startDate)
												->where('contractDate','<=', $endDate)->paginate(10);
						}else{
							//Search by Start Contract Date
							if(!$search && $startDate){
								$employee = Employee::where('contractDate','>=', $startDate)->paginate(10);
							}else{
								//Search by End Contract Date
								if(!$search && $endDate){
									$employee = Employee::where('contractDate','<=', $endDate)->paginate(10);
								}else{
									//Without search. Show all employees
									$employee = Employee::paginate(10);
								}	
							}
						}
					}
				}
			}	
		}


		return view('employee.index',compact('employee','search','startDate','endDate'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('employee.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateEmployeeRequest $request)
	{

		$employee = new Employee($request->all());
		$employee->save();
		return redirect()->route('employee.index');
	
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
		$employee = Employee::findOrFail($id);
		return view('employee.edit', compact('employee'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditEmployeeRequest $request, $id)
	{
		
		$employee = Employee::findOrFail($id);
		$employee->fill($request->all());
		$employee->save();
		return redirect()->route('employee.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Employee::destroy($id);
		Session::flash('message','The employee was deleted');
		return redirect()->route('employee.index');
	}

	public function logout()
	{
		
		$this->auth->logout();
		return new RedirectResponse(url('/login'));

	}

}
