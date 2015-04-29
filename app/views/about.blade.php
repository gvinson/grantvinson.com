@extends('layouts.master')
@section('title')
@parent About
@stop
@section('stylesheets')
	
@parent
@stop

@section('content')
	
	<div class="grid">
		<div class="col-5 non-mobile">
			<img class="me" src="/img/me.jpg" alt="Grant Vinson">
			<div class="line"></div>
			<ul class="skills">
				<li><span class="icon-develop"></span>DEVELOPMENT</li>
				<li><span class="icon-ux"></span>USER EXPERIENCE</li>
				<li><span class="icon-mobile"></span>RESPONSIVE</li>
				<li><span class="icon-design"></span>DESIGN</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="col-10 right">
			<h1>How do you do,</h1>
			<p><b>The name's Grant Vinson and I'm a front end developer. My passion for peoples' experiences drive me to create seamless interfaces for whatever the situation may be.</b></p>
			<p>Experiences on the web are what keep me awake at night. Is this click area to close to this other click area? How does this font render on retina devices? Why is this page taking more than 2 seconds to load? These are the questions that make coffee mandatory.</p>
			<p>With 4 years of professional experience under my belt and almost double that dabbling with programming, I know my way around websites. </p>
			<p>I get out of this field what I put into it, hints why I am actively on sites like <a href="https://twitter.com/grant_vinson" target="_blank">Twitter</a>, <a href="https://github.com/gvinson" target="_blank">Github</a>, <a href="http://codepen.io/vinsongrant/" target="_blank">CodePen</a>, <a href="http://stackoverflow.com/users/1054156/grant-vinson" target="_blank">StackOverflow</a>, <a href="http://community.sitepoint.com/users/gvinson/activity" target="_blank">Sitepoint</a>; the more I can help, the more accomplished I am.</p>
			<p>Creating top notch experiences are what matter to me. The ease of delivery for information to users all across the globe is what this industry is all about...that and coffee.</p>
		</div>
		<div class="clearfix"></div>
		<div class="col-12 mobile-only">
			<img class="me" src="/img/me.jpg" alt="Grant Vinson">
			<div class="line"></div>
			<ul class="skills">
				<li><span class="icon-develop"></span>DEVELOPMENT</li>
				<li><span class="icon-ux"></span>USER EXPERIENCE</li>
				<li><span class="icon-mobile"></span>RESPONSIVE</li>
				<li><span class="icon-design"></span>DESIGN</li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>

@stop

@section('scripts')
	@parent
@stop