{!! Form::open(['route' => ['employee.destroy',$e], 'method' => 'DELETE']) !!}
	<button class='btn btn-xs btn-danger' title="Delete Employee" type='button' data-toggle="modal" data-target="#confirmDelete" data-title="Delete Employee" data-message='Are you sure you want to delete this employee?'>
	<i class='glyphicon glyphicon-trash'></i>
    </button>
{!! Form::close() !!}

