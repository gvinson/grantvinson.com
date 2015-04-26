@extends('layouts.master')
@section('title')
@parent About
@stop
@section('stylesheets')
	
@parent
@stop

@section('content')
	
	<div class="grid">
		<div class="col-8">
			<img src="/img/work/waterislife-overview.jpg">
		</div>
		<div class="col-8">
			<img src="/img/work/vast-overview.jpg">
		</div>
		<div class="col-8">
			<img src="/img/work/fellers-overview.jpg">
		</div>
		<div class="col-8">
			<img src="/img/work/regionalfoodbank-overview.jpg">
		</div>
		<div class="clearfix"></div>
	</div>

@stop

@section('scripts')
	@parent
@stop