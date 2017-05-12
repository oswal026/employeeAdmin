
<div class="form-group">
	<label for="documentId" class="col-sm-3 control-label">Document ID<span class="required">*</span></label>
	<div class="col-sm-2">
		{!! Form::text('documentId',null,['class' => 'form-control', 'placeholder' => 'V-12345678', 'maxlength' => '10']) !!}
	</div>
</div>
<div class="form-group">
	<label for="fullName" class="col-sm-3 control-label">Full Name<span class="required">*</span></label>
	<div class="col-sm-6">
		{!! Form::text('fullName',null,['class' => 'form-control', 'maxlength' => '100']) !!}
	</div>
</div>
<div class="form-group">
	<label for="address" class="col-sm-3 control-label">Address<span class="required">*</span></label>
	<div class="col-sm-6">
		{!! Form::textarea('address',null,['class' => 'form-control', 'rows' => '3']) !!}
	</div>
</div>
<div class="form-group">
	<label for="email" class="col-sm-3 control-label">E-Mail Address</label>
	<div class="col-sm-4"> 
		{!! Form::text('email',null,['class' => 'form-control', 'placeholder' => 'example@gmail.com' , 'maxlength' => '45']) !!}
	</div>
</div>
<div class="form-group">
	<label for="phone" class="col-sm-3 control-label">Phone</label>
	<div class="col-sm-2">
		{!! Form::text('phone',null,['class' => 'form-control', 'placeholder' => '1234-1234567' , 'maxlength' => '12']) !!}
	</div>
</div>
<div class="form-group">
	<label for="contractDate" class="col-sm-3 control-label">Contract Date<span class="required">*</span></label>
	<div class="col-sm-2">
		{!! Form::text('contractDate',null,['class' => 'form-control datepicker', 'placeholder' => 'yyyy-mm-dd', 'size' => '10']) !!}
	</div>
</div>
<div class="form-group">
	<label for="birthDate" class="col-sm-3 control-label">Birth Date</label>
	<div class="col-sm-2">
		{!! Form::text('birthDate',null,['class' => 'form-control datepicker', 'placeholder' => 'yyyy-mm-dd']) !!}
	</div>
</div>
<div class="form-group">
	<label for="isFreelance" class="col-sm-3 control-label">Is Freelance?<span class="required">*</span></label>
	<div class="col-sm-2">
		<label class="radio-inline"> 
			{!! Form::radio('isFreelance','Y',false) !!} Yes
		</label>
		<label class="radio-inline">
			{!! Form::radio('isFreelance','N',false) !!} No
		</label>	
	</div>
</div>
<div class="form-group" id="hourlyR" style="display: none;">
	<label for="hourlyRate" class="col-sm-3 control-label">Hourly Rate<span class="required">*</span></label>
	<div class="col-sm-3">
		{!! Form::text('hourlyRate',null,['class' => 'form-control', 'step' =>'any', 'maxlength' => '18.2']) !!}
	</div>
</div>
	
