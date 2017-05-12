<table class="table table-striped table-hover" id="employeeList" class="tablesorter">
	<thead> 
		<tr>
			<th>Document ID</th>
			<th>Full Name</th>
			<th>E-Mail Address</th>
			<th></th>
		</tr>	
	</thead> 
	<tbody>
		@foreach($employee as $e)
			<tr>
				<td>{{$e->documentId}}</td>
				<td>{{$e->fullName}}</td>
				<td>{{$e->email}}</td>
				<td>
					<div class="row">
					<div class="col-md-1">
						<a class="btn btn-xs btn-info" title="Edit Employee" href="{{route('employee.edit',$e)}}" role="buttom"> <i class='glyphicon glyphicon-edit'></i></a>
					</div>
					<div class="col-md-1">
					@include('employee.partials.delete')
					</div>
					</div>

				</td>
			</tr>
		@endforeach
	</tbody>
</table>
