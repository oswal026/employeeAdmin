<form role="form" id="form-search" method="GET" action="{{route('search')}}">

  	<div class="form-group">
  		<div class="col-sm-6">
    		<label for="search">Document ID, Full Name, E-Mail or Address</label>
    		<input type="text" class="form-control" name="search" id="search" placeholder="Search by Document ID, Full Name, E-Mail or Address" value="{{$search}}">
  	 	</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-3">
    		<label for="startContractDate">Contract Start Date</label>
    		<input type="text"  class="form-control datepicker" name="startContractDate" id="startContractDate" placeholder="yyyy-mm-dd" value="{{$startDate}}">
  	 	</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-3">
    		<label for="endContractDate">Contract End Date</label>
    		<input type="text" class="form-control datepicker" name="endContractDate" id="endContractDate" placeholder="yyyy-mm-dd" value="{{$endDate}}">
  	 	</div>
  	</div>

  	<div class="buttonSearch">
      <button type="submit" class="btn btn-default" id="btnSearch">Search</button>
      <button type="submit" class="btn btn-default" id="btnReset">Reset Filters</button>
  	</div>
	
</form>