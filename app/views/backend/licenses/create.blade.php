@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
Create a Software License ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		Create a Software License

		<div class="pull-right">
			<a href="{{ route('licenses') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
		</div>
	</h3>
</div>


<form class="form-horizontal" method="post" action="" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Tabs Content -->
	<div class="tab-content">

		<div class="tab-pane active" id="tab-general">
			<!-- Category Title -->
			<div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
				<label class="control-label" for="name">Software Name</label>
				<div class="controls">
					<input class="span6" type="text" name="name" id="name" value="{{ Input::old('name') }}" />
					{{ $errors->first('name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>
			<div class="control-group {{ $errors->has('serial') ? 'error' : '' }}">
				<label class="control-label" for="serial">Serial</label>
				<div class="controls">
					<input class="span6" type="text" name="serial" id="serial" value="{{ Input::old('serial') }}" />
					{{ $errors->first('serial', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<div class="control-group {{ $errors->has('license_email') ? 'error' : '' }}">
				<label class="control-label" for="license_email">License Email</label>
				<div class="controls">
					<input class="span6" type="text" name="license_email" id="license_email" value="{{ Input::old('license_email') }}" />
					{{ $errors->first('license_email', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<div class="control-group {{ $errors->has('license_name') ? 'error' : '' }}">
				<label class="control-label" for="license_name">License Name</label>
				<div class="controls">
					<input class="span6" type="text" name="license_name" id="license_name" value="{{ Input::old('license_name') }}" />
					{{ $errors->first('license_name', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<div class="control-group {{ $errors->has('notes') ? 'error' : '' }}">
				<label class="control-label" for="notes">Notes</label>
				<div class="controls">
					<input class="span6" type="text" name="notes" id="notes" value="{{ Input::old('notes') }}" />
					{{ $errors->first('notes', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<div class="control-group {{ $errors->has('order_number') ? 'error' : '' }}">
				<label class="control-label" for="order_number">Order Number</label>
				<div class="controls">
					<input class="span4" type="text" name="order_number" id="order_number" value="{{ Input::old('order_number') }}" />
					{{ $errors->first('order_number', '<span class="help-inline">:message</span>') }}
				</div>
			</div>


			<div class="control-group {{ $errors->has('purchase_cost') ? 'error' : '' }}">
				<label class="control-label" for="purchase_cost">Purchase Cost</label>
				<div class="controls">
					$ <input class="span2" type="text" name="purchase_cost" id="purchase_cost" value="{{ Input::old('purchase_cost') }}" />
					{{ $errors->first('purchase_cost', '<span class="help-inline">:message</span>') }}
				</div>
			</div>

			<div class="control-group {{ $errors->has('purchase_date') ? 'error' : '' }}">
				<label class="control-label" for="purchase_date">Purchase Date (YYYY-mm-dd)</label>
				<div class="controls">
					<input class="span4" type="text" name="purchase_date" id="purchase_date" value="{{ Input::old('purchase_date') }}" />
					{{ $errors->first('purchase_date', '<span class="help-inline">:message</span>') }}
				</div>
			</div>



		</div>



	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
			<a class="btn btn-link" href="{{ route('licenses') }}">Cancel</a>
			<button type="submit" class="btn btn-success">Create</button>
		</div>
	</div>
</form>
@stop