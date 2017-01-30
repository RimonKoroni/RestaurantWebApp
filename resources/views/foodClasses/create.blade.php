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
			        	{!! Form::open(['route' => 'foodClasses.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
			        		<div class="control-group">
				          		<div class="image-container">
				          			<img id="previewImg" src="{{ asset('img/imagePlaceholder.png') }}" class="image-uploaded img-responsive" alt="">
				          			<div class="overlay">
								    	<a id="zoom-previewImg" class="lightbox_trigger" href="{{ asset('img/imagePlaceholder.png') }}">
								    		<span id="zoom"><i class="icon-search"></i></span>
								    	</a>
									</div>
				            	</div>
				            </div>
				            <div class="control-group {{ $errors->has('foodTypeImage') ? 'error' : ''}}">
				            	{!! Form::label('foodTypeImage', trans('foodType.uploadImage'), ['class' => 'control-label']) !!}
					            <div class="controls">
					            	{!! Form::file('foodTypeImage', []) !!}
					            	<span for='foodTypeImage' class='help-inline'>
				              			@if ($errors->has('foodTypeImage'))
				              				{{$errors->first('foodTypeImage')}}
				              			@endif
				              		</span>
					          	</div>
				            </div>
				            <div class="control-group {{ $errors->has('arabicName') ? 'error' : ''}}">
				            	{!! Form::label('arabicName', trans('foodType.arabicName') . ' :', ['class' => 'control-label']) !!}
				              	<div class="controls">
				              		{!! Form::text('arabicName', "", ['class' => 'span6', 'placeholder' => trans('foodType.arabicName')]) !!}
				              		<span for='arabicName' class='help-inline'>
				              			@if ($errors->has('arabicName'))
				              				{{$errors->first('arabicName')}}
				              			@endif
				              		</span>
				              	</div>
				            </div>
				            <div class="control-group {{ $errors->has('englishName') ? 'error' : ''}}">
				              	{!! Form::label('englishName', trans('foodType.englishName') . ' :', ['class' => 'control-label']) !!}
				              	<div class="controls">
				              		{!! Form::text('englishName', "", ['class' => 'span6', 'placeholder' => trans('foodType.englishName')]) !!}
				              		<span for='englishName' class='help-inline'>
				              			@if ($errors->has('englishName'))
				              				{{$errors->first('englishName')}}
				              			@endif
				              		</span>
				              	</div>
				            </div>
				            <div class="control-group {{ $errors->has('turkishName') ? 'error' : ''}}">
				              	{!! Form::label('turkishName', trans('foodType.turkishName') . ' :', ['class' => 'control-label']) !!}
				              	<div class="controls">
				              		{!! Form::text('turkishName', "", ['class' => 'span6', 'placeholder' => trans('foodType.turkishName')]) !!}
				              		<span for='turkishName' class='help-inline'>
				              			@if ($errors->has('turkishName'))
				              				{{$errors->first('turkishName')}}
				              			@endif
				              		</span>
				              	</div>
				            </div>
				            <div class="form-actions">
				            	{!! Form::submit(trans('foodType.add'), ['class' => 'btn btn-success']) !!}
				            </div>
			        	{!! Form::close() !!}
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