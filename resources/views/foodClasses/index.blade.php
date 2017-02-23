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
		        <table class="table table-bordered data-table table-with-image">
		          <thead>
		            <tr>
		              <th>{{ trans('app.image') }}</th>
		              <th>{{ trans('app.name') }}</th>
		              <th style="width: 400px; important!"></th>
		            </tr>
		          </thead>
		          <tbody>
		          	@foreach ($types as $type)
						<tr class="gradeX">
			              <td class="imageColumn">
			              	<div class="image-container">
			          			<img id="previewImg" src="{{ $type->image != null ? asset('uploadedImages/' . $type->image) : asset('img/imagePlaceholder.png')}}" class="image-uploaded img-responsive" alt="">
			          			<div class="overlay">
							    	<div id="zoom-previewImg" class="lightbox_trigger btn-link" href="{{ $type->image != null ? asset('uploadedImages/' . $type->image) : asset('img/imagePlaceholder.png')}}">
							    		<span id="zoom"><i class="icon-search"></i></span>
							    	</div>
								</div>
			            	</div>
			              </td>
			              <td><p>{{ $type->getName(App::getLocale()) }}</p></td>
			              <td>
			              	<a class="btn btn-primary icon icon-pencil tip-bottom" title="{{ trans('app.edit') }}" href="{{ route('foodClasses.edit', $type->id) }}"> {{ trans('app.edit') }}</a>
			              	<a class="btn btn-danger icon icon-trash tip-bottom btnDelete" title="{{ trans('app.delete') }}" data-delete-link="{{ route('foodClasses.destroy', $type->id) }}" data-toggle="modal" data-target="#modal-delete"> {{ trans('app.delete') }}</a>
			              	<a class="btn btn-success icon icon-reorder tip-bottom" title="{{ trans('app.details') }}" href="{{ route('foodClasses.show', $type->id) }}"> {{ trans('app.details') }}</a>
			              </td>
			            </tr>
					@endforeach
		          </tbody>
		        </table>
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