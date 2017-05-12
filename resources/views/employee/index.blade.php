@extends('layouts.mainHome')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<p class="createEmployee">
				<a class="btn btn-success" title="Create Employee" href="{{route('employee.create')}}" role="button">
					Create Employee
				</a>
			</p>
			<div class="panel panel-default">
				<div class="panel-heading"> <h4>Employees</h4></div>

				@if(Session::has('message'))
					<p class="alert alert-success"> {{ Session::get('message') }}</p>

				@endif

				<div class="panel-body">
					<div class="search">
						@include('employee.partials.search')
					</div>
						@include('employee.partials.table')
						<!-- Use to pagination-->
						{!!$employee->render()!!}
		
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')

<script>

	$(document).ready(function() 
	    { 
	        $("#employeeList").tablesorter(); 
	    } 
	);


	function validateDate(date){
		return (date).match(/([0-9]{4})\-([0-9]{2})\-([0-9]{2})/);
	}	

	//Valid contactDate
	$("#btnSearch").click(function(e){  

		var dateStart = $("#startContractDate").val();
		var dateEnd = $("#endContractDate").val();

		//Valid date format to Contract start date
		if(dateStart){
			if(!validateDate(dateStart)){
				$('#message').modal('show');
		        $("label[for='msj']").text('Contract start date have an invalid date format.');
		        return false;
			}
		}

		//Valid date format to Contract end date
		if(dateEnd){
			if(!validateDate(dateEnd)){
				$('#message').modal('show');
		        $("label[for='msj']").text('Contract end date have an invalid date format.');
		        return false;
			}
		}

		if($("#startContractDate").val()  != "" && $("#endContractDate").val() != ""){
			if( $("#startContractDate").val() > $("#endContractDate").val() ){
				$('#message').modal('show');
	            $("label[for='msj']").text('Contract start date can not be greater than contract end date.');
	            return false;
			}
		}

	});

	//Reset filters
	$("#btnReset").click(function(){ 
		$("#search").val('');
		$("#startContractDate").val('');
		$("#endContractDate").val('');
	});

	//Modal used to delete employee
	$('#confirmDelete').on('show.bs.modal', function (e) {
	    $message = $(e.relatedTarget).attr('data-message');
	    $(this).find('.modal-body p').text($message);
	    $title = $(e.relatedTarget).attr('data-title');
	    $(this).find('.modal-title').text($title);

	    // Pass form reference to modal for submission on yes/ok
	    var form = $(e.relatedTarget).closest('form');
	    $(this).find('.modal-footer #confirm').data('form', form);
  	});

  	<!-- Form confirm (yes/ok) handler, submits form -->
  	$('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
    	$(this).data('form').submit();
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
