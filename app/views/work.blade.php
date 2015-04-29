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
			<div class="overlay">
				<div class="overlay-content">
					<p class="site-name">WATERisLIFE</p>
					<p class="tag">Responsibly created website with others in mind</p>
					<div class="services">
						<span class="icon-develop"></span>
						<span class="icon-ux"></span>
						<span class="icon-mobile"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-8">
			<img src="/img/work/vast-overview.jpg">
			<div class="overlay">
				<div class="overlay-content">
					<p class="site-name">VAST</p>
					<p class="tag">Eloquent and precise website with custom CMS</p>
					<div class="services">
						<span class="icon-develop"></span>
						<span class="icon-ux"></span>
						<span class="icon-mobile"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-8">
			<img src="/img/work/fellers-overview.jpg">
			<div class="overlay">
				<div class="overlay-content">
					<p class="site-name">FELLERS</p>
					<p class="tag">Large scale fully custom ecommerce website</p>
					<div class="services">
						<span class="icon-develop"></span>
						<span class="icon-ux"></span>
						<span class="icon-mobile"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-8">
			<img src="/img/work/regionalfoodbank-overview.jpg">
			<div class="overlay">
				<div class="overlay-content">
					<p class="site-name">REGIONAL FOOD BANK</p>
					<p class="tag">Non-profit dedicated to feeding everyone</p>
					<div class="services">
						<span class="icon-develop"></span>
						<span class="icon-ux"></span>
						<span class="icon-mobile"></span>
						<span class="icon-design"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

@stop

@section('scripts')
	@parent
@stop