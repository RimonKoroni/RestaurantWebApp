@extends('layouts.layout')

@section('title')
	Food Classes
@stop

@section('style')
	<link rel="stylesheet" href="{{ asset('css/uniform.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
@stop

@section('content')
	<!--breadcrumbs-->
	  <div id="content-header">
	    <div id="breadcrumb"> <a href="{{ url('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>{{ trans('app.home') }}</a> <a href="#" class="current">{{ trans('app.foodClasses') }}</a> </div>
	  </div>
	<!--End-breadcrumbs-->

	<div class="container-fluid">
		<div class="row-fluid">
			<a class="btn btn-primary" href="{{ url('foodClasses/create') }}">{{ trans('app.add') }}</a>
		</div>
	</div>

	<div class="container-fluid">
	    <div class="row-fluid ">
	      <div class="span12">
			<div class="widget-box">
		      <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
		        <h5>{{ trans('app.foodClasses') }}</h5>
		      </div>
		      <div class="widget-content nopadding">
		        <table class="table table-bordered data-table">
		          <thead>
		            <tr>
		              <th>{{ trans('app.image') }}</th>
		              <th>{{ trans('app.name') }}</th>
		              <th></th>
		              <th></th>
		              <th></th>
		            </tr>
		          </thead>
		          <tbody>
		          	@foreach ($types as $type)
						<tr class="gradeX">
			              <td></td>
			              <td>{{ $type->getName(App::getLocale()) }}</td>
			              <td></td>
			              <td ></td>
			              <td></td>
			            </tr>
					@endforeach
		          </tbody>
		        </table>
		      </div>
		    </div>
		   </div>
		</div>
	</div>
@stop

@section('script')
	
	<script type="text/javascript">
		$('ul.sidebar li:nth-child(3)').addClass('active');
	</script>
@stop