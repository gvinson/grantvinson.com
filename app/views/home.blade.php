@extends('layouts.master')
@section('title')
@parent Home
@stop
@section('stylesheets')

@parent
@stop

@section('content')
	
	<div class="title-wrapper">
		<h1><span>G</span><span>R</span><span>A</span><span>N</span><span>T</span></h1>
		{{-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 195 500 94" enable-background="new 0 195 500 94" xml:space="preserve">
		<g enable-background="new    ">
			<path class="g" fill-opacity="0" stroke="#444" stroke-width="1.5" d="M6,243.1c0-25,17.7-43.4,43.2-43.4c13.8,0,23.8,3.7,30.8,11.7l-11.8,11.7c-4.2-4.4-9.1-7.7-18.9-7.7
				c-15.3,0-25.3,11.8-25.3,27.7c0,15.8,10.2,27.9,28,27.9c5.5,0,12.2-1,16.6-3.1v-13.7H48.1v-15.3h36.4v37.9
				c-4.9,4-17.1,9.8-32.5,9.8C24.3,286.6,6,268.1,6,243.1z"/>
			<path class="r" fill-opacity="0" stroke="#444" stroke-width="1.5" d="M122.9,200.7h31.4c17.3,0,31.5,8.1,31.5,27.9c0,12.8-6.7,20.9-16.6,24.8l19.3,32h-19.9L151.4,256h-11.1v29.4h-17.4V200.7z
				 M153.8,241.3c8.6,0,14.1-3.4,14.1-12.7c0-9.5-5.7-12.6-14.1-12.6h-13.5v25.3H153.8z"/>
			<path class="a" fill-opacity="0" stroke="#444" stroke-width="1.5" d="M253.6,200h1.5l38.8,85.5h-18.3l-4.7-11.5h-32.9l-4.7,11.5h-16.8L253.6,200z M264.5,259.4l-5.4-12.8
				c-2.4-5.6-4.9-14.2-5.1-15.1c-0.1,0.4-2.6,9.2-5,15.1l-5.4,12.8H264.5z"/>
			<path class="n" fill-opacity="0" stroke="#444" stroke-width="1.5" d="M352.4,246.1c-4.2-4-10.1-11.6-10.1-11.6s1.2,9.3,1.2,15.5v35.5h-16.3V200h1.7l42.7,40.1c4.1,3.9,10,11.6,10,11.6
				s-1.1-9.6-1.1-15.5v-35.5h16.3v85.5h-1.7L352.4,246.1z"/>
			<path class="t" fill-opacity="0" stroke="#444" stroke-width="1.5" d="M455.8,216.1h-24.2v-15.3h65.8v15.3h-24.2v69.4h-17.4V216.1z"/>
		</g>
		</svg> --}}
		<p id="skills1"><span>FRONTEND</span> <span>DEVELOPER</span></p>
		<p id="dots">
			<img class="icon" src="/img/icons/logo.svg">
		</p>
		<p id="skills2">UX DESIGNER</p>
	</div>
@stop

@section('scripts')
	@parent
@stop