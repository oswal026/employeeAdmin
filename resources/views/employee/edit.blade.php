@extends('layouts.mainHome')<a href=""></a>
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Edit Employee: {{$employee->fullName}} </h4>  </div>
				<div class="required">
					<p class="requiredTittle"> (*) Required fields</p>
				</div>
				<div class="panel-body">
					@include('employee.partials.messages')
					{!! Form::model($employee,['route' => ['employee.update',$employee],'method' => 'PUT', 'class' => 'form-horizontal']) !!}
						@include('employee.partials.fields')
						<div class="actionButton">	
							<button type="submit" class="btn btn-primary">Edit</button>
							<a class="btn btn-primary" href="{{route('employee.index')}}" role="button">
								Back
							</a>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('scripts')

<script>

	$(document).ready(function(){

		if($('input:text[name=birthDate]').val()=="0000-00-00"){
			$('input:text[name=birthDate]').val("");
		}

		if($("input[name=isFreelance]:checked").val() == 'Y') {
            $("#hourlyR").show();
        }

        if($("input[name=isFreelance]:checked").val() == 'N'){
        	$('input:text[name=hourlyR]').val("");  //limpia el valor
        	$("#hourlyR").hide();
        }
	});	

	//Para mostrar el campo hourly rate si es freelance
	$('input[type="radio"]').click(function(){
        if($(this).attr("value")=="Y"){
            $("#hourlyR").show();

        }
        if($(this).attr("value")=="N"){
        	$("#hourlyRate").val("");  //limpia el valor
        	$("#hourlyR").hide();
        }

    });



	$(function(){
		$('.datepicker').datepicker({
			endDate: '+1D',
		    format: "yyyy-mm-dd",
		    language: "en",
		    autoclose: true,
		    todayHighlight: true,
		    todayBtn: "linked"
		});
	});


</script>

@endsection