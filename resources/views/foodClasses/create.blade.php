@extends('layouts.layout')

@section('title')
	Create new class
@stop

@section('style')

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
			              <label class="control-label">First Name :</label>
			              <div class="controls">
			                <input type="text" class="span11" placeholder="First name" />
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Last Name :</label>
			              <div class="controls">
			                <input type="text" class="span11" placeholder="Last name" />
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Password input</label>
			              <div class="controls">
			                <input type="password"  class="span11" placeholder="Enter Password"  />
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Company info :</label>
			              <div class="controls">
			                <input type="text" class="span11" placeholder="Company name" />
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Description field:</label>
			              <div class="controls">
			                <input type="text" class="span11" />
			                <span class="help-block">Description field</span> </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Message</label>
			              <div class="controls">
			                <textarea class="span11" ></textarea>
			              </div>
			            </div>
			            <div class="form-actions">
			              <button type="submit" class="btn btn-success">Save</button>
			            </div>
			          </form>
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