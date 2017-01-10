@extends('layouts.layout')

@section('title')
	Home
@stop

@section('content')
	<!--breadcrumbs-->
	  <div id="content-header">
	    <div id="breadcrumb"> <a href="{{ url('home') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>{{ trans('app.home') }}</a></div>
	  </div>
	<!--End-breadcrumbs-->
	<!--Action boxes-->
	  <div class="container-fluid">
	    <div class="quick-actions_homepage">
	      <ul class="quick-actions">
	        <li class="bg_lb"> <a href="index.html"> <i class="icon-inbox"></i> <span class="label label-important">20</span> {{ trans('app.orders') }} </a> </li>
	        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-bell"></i> {{ trans('app.notification') }}</a> </li>
	      </ul>
	    </div>
	<!--End-Action boxes--> 
	<!--Chart-box-->    
	    <div class="row-fluid">
	      <div class="widget-box">
	        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
	          <h5>Site Analytics</h5>
	        </div>
	        <div class="widget-content" >
	          <div class="row-fluid">
	            <div class="span9">
	              <div class="chart"></div>
	            </div>
	            <div class="span3">
	              <ul class="site-stats">
	                <li class="bg_lh"><i class="icon-user"></i> <strong>2540</strong> <small>Total Users</small></li>
	                <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>New Users </small></li>
	                <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>Total Shop</small></li>
	                <li class="bg_lh"><i class="icon-tag"></i> <strong>9540</strong> <small>Total Orders</small></li>
	                <li class="bg_lh"><i class="icon-repeat"></i> <strong>10</strong> <small>Pending Orders</small></li>
	                <li class="bg_lh"><i class="icon-globe"></i> <strong>8540</strong> <small>Online Orders</small></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	<!--End-Chart-box-->  
@stop

@section('script')
	<script src="{{ asset('js/jquery.flot.min.js') }}"></script> 
	<script src="{{ asset('js/matrix.dashboard.js') }}"></script> 
	<script type="text/javascript">
		$('ul.sidebar li:nth-child(1)').addClass('active');
	</script>
@stop