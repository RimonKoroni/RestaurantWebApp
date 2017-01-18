@extends('layouts.layout')

@section('title')
	Create new class
@stop

@section('style')
	<link rel="stylesheet" href="{{ asset('css/uniform.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
@stop

@section('content')
	<!--breadcrumbs-->
  	<div id="content-header">
    	<div id="breadcrumb"> <a href="{{ url('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>{{ trans('app.home') }}</a> <a href="{{ url('foodClasses') }}" title="Go to Food Classes" class="tip-bottom">{{ trans('app.foodClasses') }}</a> <a href="#" class="current">{{ trans('app.createNewClass') }}</a>  
    	</div>
    	<h1>{{ trans('app.createNewClassTitle') }}</h1>
  	</div>
	<!--End-breadcrumbs-->

	<div class="container-fluid">
	  <hr>
	  	<div class="row-fluid">
	    	<div class="span8">
	      		<div class="widget-box">
			        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
			          <h5>{{ trans('app.classInfo') }}</h5>
			        </div>
			        <div class="widget-content nopadding">
			          <form action="#" method="get" class="form-horizontal">
			          	<div class="control-group">
			          		<div class="image-container">
			          			<img src="{{ asset('img/imagePlaceholder.png') }}" class="image-uploaded img-responsive" alt="">
			          			<div id="overlay">
							    	<a class="lightbox_trigger" href="{{ asset('img/imagePlaceholder.png') }}">
							    		<span id="zoom"><i class="icon-search"></i></span>
							    	</a>
								</div>
			            	</div>
			            </div>
			          	<div class="control-group">
			              <label class="control-label">{{ trans('foodType.uploadImage') }}</label>
			              <div class="controls">
			                <input type="file" />
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">{{ trans('foodType.arabicName') }} :</label>
			              <div class="controls">
			                <input type="text" class="span11" placeholder="Arabic Name" />
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">{{ trans('foodType.englishName') }} :</label>
			              <div class="controls">
			                <input type="text" class="span11" placeholder="English Name" />
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">{{ trans('foodType.turkishName') }} :</label>
			              <div class="controls">
			                <input type="text" class="span11" placeholder="Turkish Name" />
			              </div>
			            </div>
			            <div class="form-actions">
			              <button type="submit" class="btn btn-success">{{ trans('foodType.add') }}</button>
			            </div>
			          </form>
			        </div>
		        </div>
	    	</div>
    	</div>
	</div>
@stop

@section('script')
	<script src="{{ asset('js/create-food.js') }}"></script>  
	<script type="text/javascript">
		$('ul.sidebar li:nth-child(3)').addClass('active');
	</script>
@stop