@extends('layouts.layout')

@section('title')
	Details
@stop

@section('style')
	<link rel="stylesheet" href="{{ asset('css/uniform.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
@stop

@section('content')
	<!--breadcrumbs-->
  	<div id="content-header">
    	<div id="breadcrumb"> <a href="{{ url('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>{{ trans('app.home') }}</a> <a href="{{ url('foodClasses') }}" title="Go to Food Classes" class="tip-bottom">{{ trans('app.foodClasses') }}</a> <a href="#" class="current">{{ trans('app.classInfo') }}</a>  
    	</div>
    	<h1>{{ $type->getName(App::getLocale()) }}</h1>
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
			        	{!! Form::open(['class' => 'form-horizontal']) !!}
			        		<div class="control-group">
				          		<div class="image-container">
				          			<img id="previewImg" src="{{ $type->image != null ? asset('uploadedImages/' . $type->image) : asset('img/imagePlaceholder.png')}}" class="image-uploaded img-responsive" alt="">
				          			<div class="overlay">
								    	<a id="zoom-previewImg" class="lightbox_trigger" href="{{ $type->image != null ? asset('uploadedImages/' . $type->image) : asset('img/imagePlaceholder.png')}}">
								    		<span id="zoom"><i class="icon-search"></i></span>
								    	</a>
									</div>
				            	</div>
				            </div>
				            <div class="control-group">
				            	<label class="control-label">{{ trans('foodType.arabicName') . ' : ' }}</label>
				              	<label class="control-label">{{ $type->arabic_name }}</label>
				            </div>
				            <div class="control-group">
				              	<label class="control-label">{{ trans('foodType.englishName') . ' : ' }}</label>
				              	<label class="control-label">{{ $type->english_name }}</label>
				            </div>
				            <div class="control-group">
				              	<label class="control-label">{{ trans('foodType.turkishName') . ' : ' }}</label>
				              	<label class="control-label">{{ $type->turkish_name }}</label>
				            </div>
				            
				            <div class="form-actions">
				            	<a type="button" class="btn btn-success icon icon-pencil" href="{{ route('foodClasses.edit', $type->id) }}"> {{ trans('app.edit') }}</a>
				            	<a class="btn btn-danger icon icon-trash tip-bottom btnDelete" title="{{ trans('app.delete') }}" data-delete-link="{{ route('foodClasses.destroy', $type->id) }}" data-toggle="modal" data-target="#modal-delete"> {{ trans('app.delete') }}</a>
				            </div>
				            
			            {!! Form::close() !!}

			        </div>
		        </div>
	    	</div>
    	</div>
    </div>


    <div class="modal fade" id="modal-delete">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">{{ trans('app.close') }}</span>
					</button>
					<h4 class="modal-title">{{ trans('app.deleteConfirmationTitle') }}</h4>
				</div>
				<div class="modal-body">
					<p>{{ trans('messages.deleteConfirm') }}</p>
				</div>
				<div class="modal-footer">
					{!! Form::open(['id' => 'delete-form', 'method' => 'DELETE']) !!}
						<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('app.close') }}</button>
						{!! Form::submit(trans('app.delete'), ['class' => 'btn btn-primary']) !!}
					{!! Form::close() !!}
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@stop

@section('script')
	<script src="{{ asset('js/create-food.js') }}"></script>  
	<script type="text/javascript">
		$('ul.sidebar li:nth-child(3)').addClass('active');
		$('.btnDelete').on('click', function(event) {
			event.preventDefault();
			$('#delete-form').attr('action', $('.btnDelete').data('delete-link'));
		});
	</script>
@stop