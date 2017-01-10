<div id="sidebar">
  <ul class="sidebar">
    <li><a href="{{ url('home') }}"><i class="icon icon-home"></i> <span>{{ trans('app.dashboard') }}</span></a> </li>
    <li> <a href="{{ url('orders') }}"><i class="icon icon-inbox"></i> <span>{{ trans('app.orders') }}</span> <span class="label label-important">5</span> </a> </li>
    <li> <a href="{{ url('foodClasses') }}"><i class="icon icon-th-large"></i> <span>{{ trans('app.foodClasses') }}</span></a> </li>
    <li><a href="{{ url('foods') }}"><i class="icon icon-th"></i> <span>{{ trans('app.foods') }}</span></a></li>
    <li><a href="{{ url('statistics') }}"><i class="icon icon-bar-chart"></i> <span>{{ trans('app.statistics') }}</span></a></li>
    <li><a href="{{ url('reports') }}"><i class="icon icon-signal"></i> <span>{{ trans('app.reports') }}</span></a></li>
  </ul>
</div>



