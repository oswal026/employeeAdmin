@extends('layouts.main')

@section('content')
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 text-center">
		
			<h1 class="title-retirado visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">Looking for something?</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
			<p class="text-inf tex-left">We're sorry. The Web address you entered is not a functioning page on our site</p>
		</div>
	</div>
	<div class="row" style="text-align: center;">
		<a href="{{route('employee.index')}}" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-home"></span>  Go to Home Page</a>
	</div>
@endsection