@extends('layouts.layout')

@section('title')
	Statistics
@stop


@section('content')
	<!--breadcrumbs-->
	  <div id="content-header">
	    <div id="breadcrumb"> <a href="{{ url('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>{{ trans('app.home') }}</a> <a href="#" class="current">{{ trans('app.statistics') }}</a> </div>
	  </div>
	<!--End-breadcrumbs-->



@stop

@section('script')
	<script type="text/javascript">
		$('ul.sidebar li:nth-child(5)').addClass('active');
	</script>
@stop