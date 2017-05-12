<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Employee Management - NearSource</title>
    <meta name="Employee Management - NearSource">
    <link href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">    
    <link href="{{asset('assets/bower_components/normalize.css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">

	<!-- Jquery -->
	<script src="{{asset('assets/bower_components/jquery/jquery-1.12.1.js')}}"></script>
	<!-- Datepicker Files -->
    <link rel="stylesheet" href="{{asset('assets/bower_components/datePicker/css/bootstrap-datepicker.css')}}">
    <script src="{{asset('assets/bower_components/datePicker/js/bootstrap-datepicker.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.js')}}"></script>

    <!--TableSorter  -->
	<script type="text/javascript" src="{{asset('assets/bower_components/tableSorter/jquery.tablesorter.js')}}"></script>



</head>
<body>

	<!-- Modal Dialog -->
	<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title">Delete Parmanently</h4>
	      </div>
	      <div class="modal-body">
	        <p>Are you sure about this ?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	        <button type="button" class="btn btn-danger" id="confirm">Delete</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal message -->
	<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title titleModal" id="myModalLabel">Alert</h4>
            </div>
            <div class="modal-body">
                <label id="msj"  for="msj" class="msj" > </label> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="close" na="close"<>Close</button>
            </div>
          </div>
        </div>
    </div>

	<header>
        <div class="logo">
            <img class="logo_nearsource" src="{{asset('assets/imgs/logo.jpg')}}"> 
        </div>
        <div class="tittle">
            <p class="ptittle">Employee Management</p>
        </div>
    </header>


	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="navbar-brand logout" href="{{route('logout')}}">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<script>
        $(function(){
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        });
    </script>

	@yield('scripts')

</body>
</html>
